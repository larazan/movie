<div class="w-full flex">
    <form wire:submit.prevent="import" enctype="multipart/form-data" class="w-full flex space-x-1">
        @csrf
        <input type="file" wire:model="importFile" class="@error('import_file') is-invalid @enderror">
        <button class="btn hd xu ye">Import</button>
        @error('import_file')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </form>

    @if($importing && !$importFinished)
        <div wire:poll="updateImportProgress">Importing...please wait.</div>
    @endif

    @if($importFinished)
        Finished importing.
    @endif
</div>