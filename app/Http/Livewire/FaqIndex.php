<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class FaqIndex extends Component
{
    use WithPagination;

    public $showFaqModal = false;
    public $question;
    public $answer;
    public $faqId;
    public $faqStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $mySelected = [];
    public $selectAll = false;
    public $firstId = NULL;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'question' => 'required',
        'answer' => 'required',
    ];

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->mySelected = Faq::where('id', '>=', $this->firstId)->limit(5)->pluck('id');
        } else {
            $this->mySelected = [];
        }
    }

    public function updatedMySelected($value)
    {
        if (count($value) == 5) {
            $this->selectAll = true;
        } else {
            $this->selectAll = false;
        }
    }

    public function resetSelected()
    {
        $this->mySelected = [];
        $this->selectAll = false;
    }

    public function deleteSelected()
    {
        Faq::WhereIn('id', $this->mySelected)->delete();
        $this->mySelected = [];
        $this->selectAll = false;
    }

    public function showCreateModal()
    {
        $this->showFaqModal = true;
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
        Faq::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Faq deleted successfully']);
    }

    public function createFaq()
    {
        $this->validate();

        Faq::create([
          'question' => $this->question,
          'answer' => $this->answer,
          'status' => $this->faqStatus,
      ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Faq created successfully']);
    }

    public function showEditModal($faqId)
    {
        $this->reset(['question']);
        $this->faqId = $faqId;
        $faq = Faq::find($faqId);
        $this->question = $faq->question;
        $this->answer = $faq->answer;
        $this->faqStatus = $faq->status;
        $this->showFaqModal = true;
    }
    
    public function updateFaq()
    {
        $this->validate();

        $faq = Faq::findOrFail($this->faqId);
        $faq->update([
            'question' => $this->question,
            'answer' => $this->answer,
            'status' => $this->faqStatus,
        ]);
        $this->reset();
        $this->showFaqModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Faq updated successfully']);
    }

    public function deleteFaq($faqId)
    {
        $faq = Faq::findOrFail($faqId);
        $faq->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Faq deleted successfully']);
    }

    public function closeFaqModal()
    {
        $this->showFaqModal = false;
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
        $faqs = Faq::OrderBy('created_at', $this->sort)->paginate($this->perPage);
        $this->firstId = $faqs[0]->id;
        return view('livewire.faq-index', [
            'faqs' => $faqs
        ]);
    }

    
}
