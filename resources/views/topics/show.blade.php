<x-app-layout>

    @push('css')
        <link rel="stylesheet" href="{{asset('css/game.css')}}">
    @endpush

    @livewire('start-game', ['topic' => $topic], key($topic->id))

</x-app-layout>