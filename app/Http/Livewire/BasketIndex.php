<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class BasketIndex extends Component
{
    use WithPagination;

    public $showTransactionModal = false;
    public $amount;
    public $transactionId;
    public $transactionCount;
    public $description;
    public $transactionStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rule = [
        'amount' => 'required',
    ];

    public function mount()
    {
        $this->transactionCount = Transaction::all()->count();
    }

    public function showCreateModal()
    {
        $this->showTransactionModal = true;
    }

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function deleteId($id)
    {
        $this->showConfirmModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        Transaction::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Transaction deleted successfully']);
    }

    public function createTransaction()
    {
        $this->validate();

        Transaction::create([
            'user_id' => Auth::user()->id,
          'amount' => $this->amount,
          'description' => $this->description,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Transaction created successfully']);
    }

    public function showEditModal($transactionId)
    {
        $this->reset(['amount']);
        $this->transactionId = $transactionId;
        $transaction = Transaction::find($transactionId);
        $this->amount = $transaction->amount;
        $this->description = $transaction->description;
        $this->showTransactionModal = true;
    }
    
    public function updateTransaction()
    {
        $this->validate();
        
        $transaction = Transaction::findOrFail($this->transactionId);
        $transaction->update([
            'user_id' => Auth::user()->id,
            'amount' => $this->amount,
            'description' => $this->description,
        ]);
        $this->reset();
        $this->showTransactionModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Transaction updated successfully']);
    }

    public function deleteTransaction($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        $transaction->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Transaction deleted successfully']);
    }

    public function closeTransactionModal()
    {
        $this->showTransactionModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function render()
    {
        return view('livewire.basket-index', [
            'transactions' => Transaction::orderBy('id', $this->sort)->paginate($this->perPage),
        ]);
    }
}
