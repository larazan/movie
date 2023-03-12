
<!-- Header -->
<div class="b tm">
    <div class="flex items-center fe bg-white cs border-slate-200 vs jj tei sa">
        <!-- People -->
        <div class="flex items-center">
            <!-- Close button -->
            <button class="qz gq xv mr-4" @click.stop="msgSidebarOpen = !msgSidebarOpen" aria-controls="messages-sidebar" :aria-expanded="msgSidebarOpen" aria-expanded="true">
                <span class="d">Close sidebar</span>
                <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                </svg>
            </button>
            <!-- People list -->
            <div class="flex items-center ld">
                {{--<img class="os sf rounded-full mr-2" src="{{ asset('images/user-36-01.jpg') }}" width="32" height="32" alt="User 01">--}}
                <img class="os sf rounded-full mr-2" src="{{ Avatar::create($receiverInstance->first_name.' '.$receiverInstance->last_name)->toBase64() }}" width="32" height="32" alt="User 01">
                <div class="ld">
                    <span class="text-sm gp text-slate-800">{{ $receiverInstance->first_name }}</span>
                </div>
            </div>
        </div>
        <!-- Buttons on the right side -->
        <div class="flex">
            <button class="ve ub rounded border border-slate-200 hover--border-slate-300 bv nq">
                <svg class="oo sl du gq" viewBox="0 0 16 16">
                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                </svg>
            </button>
            <button class="ve ub rounded border border-slate-200 hover--border-slate-300 bv nq">
                <svg class="oo sl du text-indigo-500" viewBox="0 0 16 16">
                    <path d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- Body -->
<div class="uw vs jj tei vh">
@if ($selectedConversation)
    @foreach ($messages as $message)
    <!-- Chat msg -->
    <div class="flex aj ri ww">
        <img class="rounded-full mr-4" src="{{ asset('images/user-40-11.jpg') }}" width="40" height="40" alt="User 01">
        <div>
            <div class="text-sm {{ auth()->id() == $message->sender_id ? 'ho ye' : 'bg-white text-slate-800 border-slate-200' }}  dk lw ct border  shadow-md rt">
                {{ $message->body }}
            </div>
            <div class="flex items-center fe">
                <div class="go text-slate-500 gp">{{ $message->created_at->format('m: i a') }}</div>
                @php

                if($message->user->id === auth()->id()){
                if($message->read == 0){
                echo'<svg class="w-3 h-3 ub du gq" viewBox="0 0 12 12">
                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                </svg>';
                } else {
                echo'<svg class="ox h-3 ub du yt" viewBox="0 0 20 12">
                    <path d="M10.402 6.988l1.586 1.586L18.28 2.28a1 1 0 011.414 1.414l-7 7a1 1 0 01-1.414 0L8.988 8.402l-2.293 2.293a1 1 0 01-1.414 0l-3-3A1 1 0 013.695 6.28l2.293 2.293L12.28 2.28a1 1 0 011.414 1.414l-3.293 3.293z"></path>
                </svg>';
                }
                }

                @endphp
            </div>
        </div>
    </div>

    @endforeach

    @else
    <div class="flex w-full h-full items-center justify-center">
            <div class="flex flex-col items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 stroke-current text-gray-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    
                </span>
                <h1 class="mt-5 text-lg font-medium text-gray-400">
                    Obrolan belum ada, silahkan memulai obrolan
                </h1>
            </div>
        </div>
    @endif
</div>



@push('js')
<script>
    $(".chatbox_body").on('scroll', function() {
        // alert('aahsd');
        var top = $('.chatbox_body').scrollTop();
        //   alert('aasd');
        if (top == 0) {

            window.livewire.emit('loadmore');
        }

    });
</script>


<script>
    window.addEventListener('updatedHeight', event => {

        let old = event.detail.height;
        let newHeight = $('.chatbox_body')[0].scrollHeight;

        let height = $('.chatbox_body').scrollTop(newHeight - old);


        window.livewire.emit('updateHeight', {
            height: height,
        });


    });
</script>
@else
<div class="fs-4 text-center text-primary mt-5">
    no conversasion selected
</div>




@endif


<script>
    window.addEventListener('rowChatToBottom', event => {

        $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight);

    });
</script>


<script>
    $(document).on('click', '.return', function() {


        window.livewire.emit('resetComponent');

    });
</script>


<script>
    window.addEventListener('markMessageAsRead', event => {
        var value = document.querySelectorAll('.status_tick');

        value.array.forEach(element, index => {


            element.classList.remove('bi bi-check2');
            element.classList.add('bi bi-check2-all', 'text-primary');
        });

    });
</script>
@endpush