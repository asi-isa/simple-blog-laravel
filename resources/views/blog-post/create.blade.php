<x-layout>

    <form action="/store" method="post">
        @csrf

        <x-form.field label="Title" name="title" />

        <x-form.textarea label="Description" name="description" />

        <x-form.textarea label="Body" name="body" />

        <button type="submit">Create</button>
    </form>
</x-layout>
