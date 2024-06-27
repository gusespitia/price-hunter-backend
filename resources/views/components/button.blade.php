<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 bg-blue-600 dark:bg-blue-700 hover:bg-blue-800 dark:hover:bg-blue-900 text-white dark:text-white']) }}>
    {{ $slot }}
</button>
