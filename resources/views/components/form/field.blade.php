@props(['label', 'name', 'type' => 'text'])

<div class="flex flex-col">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="border" value="{{ old($name) }}">

    <div>
        @error($name)
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>
</div>
