@foreach ($items as $label => $item)
    <a
        href="{{ $page->url($item) }}"
        class="flex items-center px-3 py-3 text-md font-medium rounded-md {{ $page->isActive($item) ? 'bg-gray-100 dark:bg-gray-700 text-indigo-800 hover:text-indigo-500 dark:text-indigo-300 underline' : 'text-gray-800 dark:text-gray-100 hover:text-indigo-500' }}"
    >
        {{ $label }}
    </a>
@endforeach
