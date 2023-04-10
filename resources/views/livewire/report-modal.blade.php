<div class="gp cursor-pointer text-indigo-400 hover:text-indigo-500" wire:click="showCreateModal">Laporkan</div>

<x-jet-dialog-modal wire:model="showReportModal" class="">

    <x-slot name="title" class="border-b bg-slate-200">
        <span class="font-semibold">Create Report</span>
    </x-slot>

    <x-slot name="content">
        <div class="border-t">
            <div class="vc vu ">
                <div class="fw">

                    <form>
                        <!-- <input type="hidden" wire:model="$author" name="author" value="1" /> -->
                        <input type="hidden" wire:model="$reportType" name="type" value="{{ $reportType }}" />
                        <input type="hidden" wire:model="$reportCode" name="code" value="{{ $reportCode }}" />
                        <div class="">
                            <div class="">
                                <div class="flex flex-col space-y-3">
                                    <div class="col-start-1 sm:col-span-3">
                                        <label for="reportProblem" class="block text-sm font-medium text-gray-700">
                                            Jenis Permasalahan
                                        </label>
                                        <div class="flex flex-wrap items-center ni">
                                            @foreach ($problems as $problem)
                                            <div class="ns">
                                                <label class="flex items-center">
                                                    <input type="radio" wire:model="$reportProblem" name="reportProblem" class="u" value="{{ $problem }}">
                                                    <span class="text-sm nq">{{ $problem }}</span>
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div wire:ignore class="col-start-1 sm:col-span-3">
                                        <label for="info" class="block text-sm font-medium text-gray-700">
                                            Informasi Tambahan
                                        </label>
                                        <textarea wire:model="reportInfo" id="indo" cols="50" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $reportInfo }}</textarea>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="reportPublish" class="block text-sm font-medium text-gray-700">Status</label>
                                        <div class="flex flex-wrap items-center ni">
                                            @foreach ($statuses as $key => $value)
                                            <div class="ns">
                                                <label class="flex items-center">
                                                    <input type="radio" wire:model="$reportPublish" name="reportPublish" class="u" value="{{ $key }}">
                                                    <span class="text-sm nq">{{ $value }}</span>
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="footer">
        <div class="border-slate-200">
            <div class="flex flex-wrap justify-end fc">
                <x-m-button wire:click="closeReportModal" class="border-slate-200 hover:text-white hover--border-slate-300 g_">Cancel</x-m-button>
                <x-m-button wire:click="createReport" class=" ho xi ye2">Create</x-m-button>
            </div>
        </div>

    </x-slot>
</x-jet-dialog-modal>