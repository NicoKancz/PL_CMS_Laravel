@props(['active'])

@php
$classes = ($active ?? false)
            ? 'tw-block tw-pl-3 tw-pr-4 tw-py-2 tw-border-l-4 tw-border-indigo-400 tw-text-base tw-font-medium tw-text-indigo-700 tw-bg-indigo-50 tw-focus:outline-none tw-focus:text-indigo-800 tw-focus:bg-indigo-100 tw-focus:border-indigo-700 tw-transition tw-duration-150 tw-ease-in-out'
            : 'tw-block tw-pl-3 tw-pr-4 tw-py-2 tw-border-l-4 tw-border-transparent tw-text-base tw-font-medium tw-text-gray-600 tw-hover:text-gray-800 tw-hover:bg-gray-50 tw-hover:border-gray-300 tw-focus:outline-none tw-focus:text-gray-800 tw-focus:bg-gray-50 tw-focus:border-gray-300 tw-transition tw-duration-150 tw-ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
