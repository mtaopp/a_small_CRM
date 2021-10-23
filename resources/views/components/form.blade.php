<form {{ $attributes->merge(['class', 'w-full']) }} >
    @csrf
    {{ $slot }}
</form>
