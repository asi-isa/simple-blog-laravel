<x-layout>

    <form action="/store" method="post">
        @csrf

        <div class="flex flex-col">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="border" value="{{ old('title') }}">

            <div>
                @error('title')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>
        

        <div class="flex flex-col">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3" class="border">{{ old('description') }}</textarea>

            <div>
                @error('description')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-col">
            <label for="body">Body</label>
            <textarea name="body" id="body" rows="10" class="border">{{ old('body') }}</textarea>

            <div>
                @error('body')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <button type="submit">Create</button>
    </form>
</x-layout>


{{-- test --}}
