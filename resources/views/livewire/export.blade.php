<div>
    <button class="btn ho xi ye" wire:click="export">
        <span class="hidden trm nq">
            @if($exporting && !$exportFinished)
            <span class="d-inline" wire:poll="updateExportProgress">Exporting...please wait.</div>
            @else
                Export
            @endif
        </span>
    </button>
    @if($exportFinished)
    <button class="btn ha xo ye" wire:click="downloadExport">
    Download file
    </button>
    @endif
</div>