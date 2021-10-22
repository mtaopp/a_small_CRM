<form class="w-full" action="{{ $action }}" method="post">
    @csrf
    {{ $slot }}
</form>
