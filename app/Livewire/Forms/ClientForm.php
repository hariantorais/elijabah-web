<?php

namespace App\Livewire\Forms;

use App\Models\Client;
use Illuminate\Database\QueryException;
use Livewire\Form;

class ClientForm extends Form
{
    public ?Client $client = null;

    public $company_name = '';

    public $pic_name = '';

    public $email = '';

    public $phone = '';

    public $address = '';

    public function setClient(Client $client): void
    {
        $this->client = $client;

        $this->company_name = $client->company_name;
        $this->pic_name = $client->pic_name;
        $this->email = $client->email;
        $this->phone = $client->phone;
        $this->address = $client->address;
    }

    /**
     * Aturan Validasi
     */
    public function rules()
    {
        return [
            'company_name' => 'required|min:3',
            'pic_name' => 'required|min:3',
            'email' => 'required|email|unique:clients,email,' . ($this->client?->id ?? 'NULL'),
            'phone' => 'required',
            'address' => 'nullable',
        ];
    }

    /**
     * Eksekusi Simpan (Hybrid: Store / Update)
     */
    public function save(): string
    {
        $this->validate();

        $data = $this->except(['client']);

        if ($this->client) {
            $this->client->update($data);

            return 'updated';
        }

        Client::create($data);

        return 'created';
    }

    public function destroy($id): array
    {
        $client = Client::find($id);
        try {
            $name = $client->company_name;
            $client->delete();

            return [
                'type' => 'success',
                'message' => "Klien '$name' berhasil dihapus."
            ];

        } catch (QueryException $e) {
            if ($e->getCode() === '23000' || (isset($e->errorInfo[1]) && $e->errorInfo[1] === 1451)) {
                $type = 'error';
                $message = 'Klien tidak dapat dihapus karena masih memiliki data proyek atau transaksi terkait di dalam sistem.';
            } else {
                $type = 'error';
                $message = 'Gagal menghapus data karena kendala database.';
            }

            return ['type' => $type, 'message' => $message];
        } catch (\Exception $e) {
            return ['type' => 'error', 'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()];
        }
    }
}
