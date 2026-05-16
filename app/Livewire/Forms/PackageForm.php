<?php

namespace App\Livewire\Forms;

use App\Models\Package;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;
use Livewire\Form;

class PackageForm extends Form
{
    public ?Package $package = null;

    // Properti sesuai skema database
    public $name = '';

    public $description = '';

    public $price = '';

    public $original_price = '';

    public $discount_label = '';

    public $features = '';

    public $is_popular = false;

    public $cta_text = 'Pesan Sekarang';

    public $cta_link = '';

    public $order = 0;


    public function setPackage(Package $package): void
    {
        $this->package = $package;

        $this->name = $package->name;
        $this->description = $package->description;
        $this->price = $package->price;
        $this->original_price = $package->original_price;
        $this->discount_label = $package->discount_label;
        $this->is_popular = (bool) $package->is_popular;
        $this->cta_text = $package->cta_text;
        $this->cta_link = $package->cta_link;
        $this->order = $package->order;

        $this->features = is_array($package->features)
            ? implode("\n", $package->features)
            : '';
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3|unique:packages,name,'.($this->package?->id ?? 'NULL'),
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'original_price' => 'nullable|numeric|min:0',
            'features' => 'required',
            'order' => 'required|integer',
        ];
    }

    /**
     * Eksekusi Simpan Data (Store / Update)
     */
    public function save(): array
    {
        $this->validate();

        $data = $this->except(['package']);
        $data['slug'] = Str::slug($this->name);
        $data['is_popular'] = (bool) $this->is_popular;

        // Pecah string textarea berdasarkan baris baru menjadi array bersih
        $data['features'] = array_filter(array_map('trim', explode("\n", $this->features)));

        try {
            if ($this->package) {
                $this->package->update($data);

                return ['type' => 'success', 'message' => "Paket '{$this->name}' sukses diperbarui."];
            }

            Package::create($data);

            return ['type' => 'success', 'message' => "Paket baru '{$this->name}' berhasil dibuat."];
        } catch (\Exception $e) {
            return ['type' => 'error', 'message' => 'Gagal menyimpan ke database: '.$e->getMessage()];
        }
    }

    /**
     * Eksekusi Hapus Data
     */
    public function destroy($id): array
    {
        $package = Package::find($id);
        if (! $package) {
            return ['type' => 'error', 'message' => 'Paket tidak ditemukan.'];
        }

        try {
            $name = $package->name;
            $package->delete();

            return ['type' => 'success', 'message' => "Paket '{$name}' berhasil dihapus."];
        } catch (QueryException $e) {
            $message = ($e->getCode() === '23000')
                ? 'Paket tidak bisa dihapus karena sedang digunakan oleh data projek.'
                : 'Gagal menghapus karena kendala database.';

            return ['type' => 'error', 'message' => $message];
        }
    }
}
