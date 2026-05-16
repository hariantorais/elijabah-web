<?php

namespace App\Livewire\Forms;

use App\Models\Invoice;
use Livewire\Form;

class InvoiceForm extends Form
{
    public ?Invoice $invoice = null;

    public $project_id = '';

    public $invoice_number = '';

    public $amount = '';

    public $due_date = '';

    public $status = 'unpaid';

    public $notes = '';

    public $paid_at = ''; // <--- 1. Tambahkan properti ini

    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;

        $this->project_id = $invoice->project_id;
        $this->invoice_number = $invoice->invoice_number;
        $this->amount = $invoice->amount;
        $this->due_date = $invoice->due_date ? $invoice->due_date->format('Y-m-d') : '';
        $this->status = $invoice->status;
        $this->notes = $invoice->notes;

        // 2. Format tanggal bayar lama dari database agar bisa dibaca input type="date"
        $this->paid_at = $invoice->paid_at ? $invoice->paid_at->format('Y-m-d') : '';
    }

    public function rules()
    {
        return [
            'project_id' => 'required',
            'invoice_number' => 'required',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
            'status' => 'required|in:unpaid,paid,canceled',
            // 3. Validasi: Wajib diisi hanya jika status bernilai 'paid'
            'paid_at' => 'required_if:status,paid|nullable|date',
        ];
    }

    public function save(): array
    {
        $this->validate();
        $data = $this->except(['invoice']);

        // 4. Sinkronisasi nilai paid_at sebelum masuk database
        if ($data['status'] !== 'paid') {
            $data['paid_at'] = null;
        }

        try {
            if ($this->invoice) {
                $this->invoice->update($data);

                return ['type' => 'success', 'message' => 'Invoice berhasil diperbarui.'];
            }

            Invoice::create($data);

            return ['type' => 'success', 'message' => 'Invoice berhasil diterbitkan.'];
        } catch (\Exception $e) {
            return ['type' => 'error', 'message' => 'Gagal menyimpan: '.$e->getMessage()];
        }
    }

    /**
     * Eksekusi Hapus Data
     */
    public function destroy($id): array
    {
        $invoice = Invoice::find($id);
        if (! $invoice) {
            return ['type' => 'error', 'message' => 'Data invoice tidak ditemukan.'];
        }

        $number = $invoice->invoice_number;
        $invoice->delete();

        return ['type' => 'success', 'message' => "Invoice '{$number}' berhasil dihapus dari sistem."];
    }

    public function generateInvoiceNumber()
    {
        $year = date('Y');
        $month = date('m');
        $prefix = "INV/{$year}/{$month}/";

        $lastInvoice = Invoice::where('invoice_number', 'like', $prefix.'%')
            ->orderBy('id', 'desc')
            ->first();

        if ($lastInvoice) {
            $lastNumber = (int) str_replace($prefix, '', $lastInvoice->invoice_number);
            $nextNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $nextNumber = '0001';
        }

        $this->invoice_number = $prefix.$nextNumber;
    }
}
