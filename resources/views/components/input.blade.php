@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-violet-300 focus:border-violet-500 bg-violet-50 focus:ring-violet-500 rounded-md shadow-sm']) !!}>
