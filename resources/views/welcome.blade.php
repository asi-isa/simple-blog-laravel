<x-layout>
    <ul>
      @forelse ($posts as $post)
         <li>
            <a href="#">{{ $post->title }}</a>
         </li>
      @empty
         <li>
            <p>No posts.</p>
         </li>
      @endforelse
    </ul>
</x-layout>
