<x-layout>
    <h2>Create new message: </h2>
    <form action="/create" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        <button type="submit">Submit</button>
    </form>

    <h2>Recent messages:</h2>
    <ul>
        @foreach ($messages as $message)
            <li>
                <a href="/message/{{ $message->id }}">
                    <b>{{ $message->title }}:</b><br>
                </a>
                {{ $message->content }}<br>
                {{ $message->created_at->diffForHumans() }}
            </li>
        @endforeach
    </ul>
</x-layout>
