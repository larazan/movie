<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ReportModal extends Component
{
    public $showReportModal = false;
    public $author;
    public $reportProblem;
    public $problems = [
        'duplikasi', 
        'kesalahan tampilan', 
        'fungsi', 
        'konten tidak sesuai', 
        'gambar buruk', 
        'spam'
    ];
    public $reportInfo;
    public $reportId;
    public $reportCode;
    public $reportType;
    public $type = [
        'movie',
        'music',
        'person',
    ];

    public $reportPublish = '0';
    public $statuses = [
        0 => 'unpublish',
        1 => 'publish'
    ];

    protected $rules = [
        'reportProblem' => 'required',
    ];

    public function showCreateModal()
    {
        $this->showReportModal = true;
    }

    public function createReport()
    {
        $this->validate();

        Report::create([
          'author_id' => Auth::user()->id,
          'type' => $this->reportType,
          'code' => $this->reportCode,
          'problem' => $this->reportProblem,
          'info' => $this->reportInfo,
          'publish' => $this->reportPublish
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Report created successfully']);
    }

    public function closeReportModal()
    {
        $this->showReportModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.report-modal');
    }
}
