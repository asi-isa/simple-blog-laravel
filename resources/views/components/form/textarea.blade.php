@props(['label', 'name', 'value' => ''])

<div class="flex flex-col">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea name="{{ $name }}" rows="3" class="border">{{ old($name) ?? $value }}</textarea>

    <div>
        @error($name)
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>
</div>
