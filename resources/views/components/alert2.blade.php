<div    {{$attributes -> merge(['class' => 'p-4 text-sm rounded-lg ' . $color])}} role="alert">
    <span class="font-medium">{{ $title }}</span> {{ $slot }}
    <p>
        {{$attributes}}
    </p>
</div> 