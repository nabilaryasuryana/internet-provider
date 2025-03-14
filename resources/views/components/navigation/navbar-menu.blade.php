<li>
    <a 
    href="{{ route($link) }}" 
    wire:navigate 
    class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700
    {{ Route::currentRouteName() === $link ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900 dark:text-white' }}
    ">
        {{ $text }}
    </a>
</li>