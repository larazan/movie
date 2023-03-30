<div>
    @if($exportFinished)
        <button class="btn ha xo ye" wire:click="downloadExport">
        Download file
        </button>
    @else
        <button class="btn ho xi ye" wire:click="export">
            <span class="hidden trm nq">
                @if($exporting && !$exportFinished)
                <span class="d-inline" wire:poll="updateExportProgress">Exporting...please wait.</div>
                @else
                    Export
                @endif
            </span>
        </button>
    @endif
</div>