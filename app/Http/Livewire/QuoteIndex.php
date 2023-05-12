<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class QuoteIndex extends Component
{
    use WithPagination;

    public $showQuoteModal = false;
    public $quote;
    public $character;
    public $movie;
    public $year;
    public $currentYear;
    public $quoteId;
    public $quoteStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'quote' => 'required',
        'character' => 'required',
        'movie' => 'required',
        'year' => 'required',
    ];

    public function mount()
    {
        $this->currentYear = now()->year;
    }

    public function showCreateModal()
    {
        $this->showQuoteModal = true;
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
        Quote::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Quote deleted successfully']);
    }

    public function createQuote()
    {
        $this->validate();

        Quote::create([
          'quote' => $this->quote,
          'character' => $this->character,
          'movie' => $this->movie,
          'year' => $this->year,
          'status' => $this->quoteStatus,
      ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Quote created successfully']);
    }

    public function showEditModal($quoteId)
    {
        $this->reset(['quote']);
        $this->quoteId = $quoteId;
        $quo = Quote::find($quoteId);
        $this->quote = $quo->quote;
        $this->character = $quo->character;
        $this->movie = $quo->movie;
        $this->year = $quo->year;
        $this->quoteStatus = $quo->status;
        $this->showQuoteModal = true;
    }
    
    public function updateQuote()
    {
        $this->validate();

        $quote = Quote::findOrFail($this->quoteId);
        $quote->update([
            'quote' => $this->quote,
            'character' => $this->character,
            'movie' => $this->movie,
            'year' => $this->year,
            'status' => $this->quoteStatus,
        ]);

        $this->reset();
        $this->showQuoteModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Quote updated successfully']);
    }

    public function deleteQuote($quoteId)
    {
        $quote = Quote::findOrFail($quoteId);
        $quote->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Quote deleted successfully']);
    }

    public function closeQuoteModal()
    {
        $this->showQuoteModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function resetFilters()
    {
        $this->reset();
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.quote-index', [
            'quotes' => Quote::Where('quote','LIKE','%'.$this->search.'%')->orderBy('quote', $this->sort)->paginate($this->perPage)
        ]);
    }
}