@props(['type' => 'info']) <!-- Almacenar la variable type en otra variable con el mismo nombre -->

@php
    switch ($type) {
        case 'info':     
            $color = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
        case 'danger':
            $color = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;
        case 'sucess':
            $color = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;
        case 'warning':
            $color = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
            break;
        case 'dark':
            $color = 'text-black-800 bg-black-50 dark:bg-gray-800 dark:text-black-400';
            break;
        
        default:
            $color = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
    }
@endphp


{{-- class="p-4 text-sm rounded-lg {{$color}} "  --}}
<div    {{$attributes -> merge(['class' => 'p-4 text-sm rounded-lg ' . $color])}} role="alert">
    <span class="font-medium">{{ $title }}</span> {{ $slot }}
    <p>
        {{$attributes}}
    </p>
</div> 
