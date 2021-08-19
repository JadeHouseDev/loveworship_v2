<div>
    <div>
        <input type="text" wire:model="name" /> <br>
        <button wire:click='add'>Add</button>
    </div>

    <h3>Titles</h3>
    <span>
        @foreach ($titles as $title)
        <li>{{ $title['t'] }}</li>
        @endforeach
    </span>

    {{-- {{ $users }} --}}

    {{-- @livewire('members', ['users'=>$users]) --}}
    <livewire:members />
</div>
