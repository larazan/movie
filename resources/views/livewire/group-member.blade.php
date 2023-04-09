<div>
    @if ($group)
    <div class="w-full m-2">
        @forelse ($group->members as $gmember)
            <x-jet-button wire:click="detachMember({{ $gmember->id }})" class="hover:bg-red-500">{{ $gmember->name }}
            </x-jet-button>
        @empty
            No members
        @endforelse
    </div>
    @endif
    <input wire:model="queryMember" type="text" class="rounded w-full" placeholder="Search Person">
    @if (!empty($queryMember))
        <div class="w-full">
            @if (!empty($persons))
                @foreach ($persons as $person)
                    <div wire:click="addCast({{ $person->id }})"
                        class="w-full p-2 m-2 bg-green-300 hover:bg-green-400 cursor-pointer">
                        {{ $person->name }}</div>
                @endforeach
            @endif
        </div>
    @endif
</div>
