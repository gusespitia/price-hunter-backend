<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 dark:text-gray-600 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-center">
                    <div class="col-span-1 md:row-span-3 bg-blue-500 text-white p-4 rounded-lg shadow-lg flex items-center justify-center">
                        <img src="{{ asset('images/pricehunter_logo.png') }}" alt="Dashboard Price Hunter" class="w-48 h-auto">
                    </div>
                    <div class="bg-blue-500 text-white p-4 rounded-lg shadow-lg">
                        <h3 class="text-lg font-bold">Total Products</h3>
                        <p class="text-2xl">{{ $productCount }}</p>
                    </div>
                    <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg">
                        <h3 class="text-lg font-bold">Total Categories</h3>
                        <p class="text-2xl">{{ $categoryCount }}</p>
                    </div>
                    <div class="bg-purple-500 text-white p-4 rounded-lg shadow-lg lg:row-start-2 lg:col-start-2">
                        <h3 class="text-lg font-bold">Total Stores</h3>
                        <p class="text-2xl">{{ $storeCount }}</p>
                    </div>
                    <div class="bg-white dark:bg-gray-100 text-black p-4 rounded-lg shadow-lg lg:row-start-2 lg:col-start-3">
                        <h3 class="text-lg font-bold">Total Users</h3>
                        <p class="text-2xl">{{ $usersCount }}</p>
                    </div>
                    <div class="bg-red-600 text-white p-4 rounded-lg shadow-lg  lg:row-start-3  lg:col-start-2">
                        <h3 class="text-lg font-bold">Total Scraping Products</h3>
                        <p class="text-2xl">{{ $scrapingProductCount }}</p>
                    </div>
                    <div class="bg-red-600 text-white p-4 rounded-lg shadow-lg  lg:row-start-3  lg:col-start-3">
                        <h3 class="text-lg font-bold">Total Emails</h3>
                        <p class="text-2xl">{{ $contactFormCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
