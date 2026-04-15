<x-layout>

    <form action="{{ route('blogPost.update', $blogPost) }}" method="post">
        @csrf
        @method('PUT')

        <x-form.field label="Title" name="title" value="{{ $blogPost->title }}" />

        <x-form.textarea label="Description" name="description" value="{{ $blogPost->description }}" />

        <x-form.textarea label="Body" name="body" value="{{ $blogPost->body }}"/>

        <button type="submit">Update</button>
    </form>

</x-layout>
