<x-layout>
    <h1>{{ $message->title }}</h1>
    <p>{{ $message->content }}</p>
    <form action="/message/{{ $message->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
</x-layout>
