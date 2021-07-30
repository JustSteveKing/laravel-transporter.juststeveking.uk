@extends('_layouts.master')

@section('body')
    <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
        <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
            <div>
                <div class="mt-20">
                    <div>
                        <a href="#" class="inline-flex space-x-4">
                            <span class="inline-flex items-center text-md font-medium text-indigo-500 space-x-1">
                                <span>{{ $page->siteDescription }}</span>
                            </span>
                        </a>
                    </div>
                    <div class="mt-2 sm:max-w-xl">
                        <h1 class="text-4xl font-semibold text-indigo-800 dark:text-indigo-300 tracking-wide sm:text-5xl">
                            {{ $page->siteName }}
                        </h1>
                        <p class="mt-6 text-xl text-gray-800 dark:text-gray-400">
                            Make your API requests more futuristic, <br class="hidden sm:block">cut the boilerplate and use
                            Laravel Transporter.
                        </p>
                    </div>
                    <div class="mt-12 sm:max-w-lg sm:w-full sm:flex">
                        <div class="mt-4 sm:mt-0">
                            <a href="/docs/installation"
                                class="flex items-center justify-center bg-gradient-to-tr from-indigo-400 to-indigo-600 bg-origin-border px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:from-indigo-600 hover:to-indigo-400">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
            <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <div class="hidden sm:block">
                    <div
                        class="absolute inset-y-0 left-1/2 w-screen bg-gray-50 dark:bg-gray-700 rounded-l-3xl lg:left-80 lg:right-0 lg:w-full">
                    </div>
                    <svg class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0" width="404" height="392" fill="none"
                        viewBox="0 0 404 392">
                        <defs>
                            <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-indigo-800 dark:text-indigo-300" fill="currentColor"></rect>
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)"></rect>
                    </svg>
                </div>
                <div class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
                    <img class="w-full lg:h-full lg:w-auto lg:max-w-none" src="/assets/img/code-snippet.png" alt="Code Example">
                </div>
            </div>
        </div>
    </div>
@endsection
