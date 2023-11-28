@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full border-2 border-gray-300 p-3 rounded-md focus:outline-none focus:border-blue-500 mb-6']) !!}>
