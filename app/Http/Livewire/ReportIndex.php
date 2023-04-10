<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\Component;

class ReportIndex extends Component
{
    use WithPagination;

    public $showReportModal = false;
    public $showReportDetailModal = false;

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

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'reportProblem' => 'required',
    ];

    public function showCreateModal()
    {
        $this->showReportModal = true;
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
        Report::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Report deleted successfully']);
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

    public function showEditModal($reportId)
    {
        $this->reset(['reportName']);
        $this->reportId = $reportId;
        $report = Report::find($reportId);
        $this->author = $report->author_id;
        $this->reportType = $report->type;
        $this->reportCode = $report->code;
        $this->reportProblem = $report->problem;
        $this->reportInfo = $report->info;
        $this->reportPublish = $report->publish;

        $this->showReportModal = true;
    }

    public function showDetailModal()
    {
        // $this->reset(['name']);
        // $this->groupId = $groupId;
        // $group = Group::find($groupId);
        // $this->actress = $group->person_id;
        // $this->name = $group->name;
        // $this->group = $group->group;
        // $this->description = $group->description;
        // $this->country = $group->country;
        // $this->duration = $group->duration;
        // $this->minute = $this->oriDura($group->duration, 'menit');
        // $this->second = $this->oriDura($group->duration, 'detik');
        // $this->oldImage = $group->small;
        // $this->groupStatus = $group->status;

        $this->showReportDetailModal = true;
    }
    
    public function updateReport()
    {
        $this->validate();
        
        $report = Report::findOrFail($this->reportId);
        $report->update([
            'author_id' => Auth::user()->id,
            'type' => $this->reportType,
            'code' => $this->reportCode,
            'problem' => $this->reportProblem,
            'info' => $this->reportInfo,
            'publish' => $this->reportPublish
        ]);

        $this->reset();
        $this->showReportModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Report updated successfully']);
    }

    public function deleteReport($reportId)
    {
        $report = Report::findOrFail($reportId);
        $report->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Report deleted successfully']);
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
        return view('livewire.report-index', [
            'reports' => Report::OrderBy('id', $this->sort)->get(),
        ]);
    }
}
