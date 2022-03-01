@props(['status'])

@php
    $classes = ($status ?? false)
                ? 'p-2 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800'
                : 'p-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800';
    $text = ($status ?? false) ? 'Active' : 'Inactive'
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} role="alert">
    <span>{{ $text }}</span>
</div>
