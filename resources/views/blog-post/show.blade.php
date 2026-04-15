<x-layout>

    <h1>{{ $blogPost->title }}</h1>

    <div>{{ $blogPost->description }}</div>

    <div>{{ $blogPost->body }}</div>


    <div>
        @auth
            @if (Auth::user()->id === $blogPost->user->id)
                <form action="{{ route('blogPost.destroy', $blogPost) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit">DELETE</button>
                </form>
            @endif

            @if (Auth::user()->id === $blogPost->user->id)
                <a href="{{ route('blogPost.edit', $blogPost) }}">Edit</a>
            @endif
        @endauth
    </div>
</x-layout>
