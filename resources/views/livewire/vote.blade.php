

<div class="flex flex-col w-full space-y-2">
    <div>
        <span class="font-mabrybold text-sm">
           {{$poll->title}} {{ $voteCount }}
        </span>
    </div>
    <div class="w-1/2 mt-2 flex justify-center border border-gray-300 rounded shadow">
        <div class="flex flex-col w-full ">
            @if ($optionBoard)
            <div class="flex justify-between items-center border-b border-gray-300 py-1.5 px-1.5" >
                <div class="flex w-full flex-col space-y-2">
                    @foreach($poll->options as $option)
                        <div wire:click="store({{ $option->id }})" class="flex w-full px-1 py-1 justify-center bg-white hover:bg-blue-300 text-center border-2 border-blue-300 rounded  text-blue-300 cursor-pointer">
                            <span class="font-mabry capitalize">{{$option->content}}</span>
                        </div>
                    @endforeach
                   
                </div>
            </div>
            @endif
       
            @if ($optionResult)
            <div class="flex justify-between items-center border-b border-gray-300 py-1.5 px-1.5" >
                <div class="flex w-full py-1 flex-col space-y-2">
                    @foreach($poll->options as $option)
                    <div class="relative flex w-full ">
                        <div class=" relative w-{{ General::widthPercentage($option->sum('votes_count'), $option->votes_count) }}/12 h-8 gp px-2 py-2 border-indigo-500 hm rounded"></div>
                        <div class="absolute px-3 py-1 bottom-0 text-indigo-600 text-sm capitalize">{{ General::percentage($option->sum('votes_count'), $option->votes_count) }}% {{$option->content}}</div>
                    </div>
                    @endforeach
                    {{--
                    <div class="relative flex w-full ">
                        <div class="relative w-4/12 h-8 gp px-2 py-2  bg-gray-100 rounded"></div>
                        <div class="absolute px-3 py-1 bottom-0 text-sm ">40% All Stories</div>
                    </div>
                    --}}
                </div>
            </div>
            @endif
        
       
            <div class="flex justify-between items-center border-b border-gray-300 py-2 px-3">
                <div class="text-sm font-mabry text-slate-400">{{ $poll->options->sum('votes_count') }} votes</div>
                <div class="text-sm font-mabry text-slate-400">{{$poll->EndDateFormat}}</div>
            </div>
        
        </div>
    </div>
</div>