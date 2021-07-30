<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->siteName ?? $page->title }}">
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}">
        <meta property="og:image" content="{{ $page->baseUrl . $page->social_image }}">
        <meta property="og:image:alt" content="{{ $page->social_image_alt }}">
        <meta property="og:locale" content="en_GB">
        <meta property="og:type" content="{{ $page->type ?? 'website' }}">
        <meta proporty="og:url" content="{{ $page->getUrl() }}">

        <meta name="twitter:widgets:new-embed-design" content="on">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page->siteName ?? $page->title }}">
        <meta name="twitter:description" content="{{ $page->description ?? $page->siteDescription }}">
        <meta name="twitter:site" content="{{ $page->twitter }}">
        <meta name="twitter:creator" content="{{ $page->twitter }}">
        <meta name="twitter:image" content="{{ $page->baseUrl . $page->social_image }}">
        <meta name="twitter:image:alt" content="{{ $page->social_image_alt }}">

        <link rel="icon" href="/assets/favicon.ico">
        <link rel="icon" href="/assets/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/assets/favicon.png">
        <link rel="manifest" href="/assets/site.webmanifest">
        <meta name="theme-color" content="#ffffff">


        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://unpkg.com/">
        
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        
        <script type="application/ld+json">
        {
            "@content": "https://schema.org/",
            "@type": "Person",
            "name": "Steve McDougall",
            "url": "https://www.juststeveking.uk/",
            "image": "https://www.juststeveking.uk/images/avatar.webp",
            "sameAs": [
                "https://github.com/JustSteveKing",
                "https://twitter.com/JustSteveKing",
                "https://www.linkedin.com/in/steve-mcdougall/"
            ],
            "jobTitle": "Technical Lead",
            "worksFor": {
                "@type": "Organization",
                "name": "Squarefoot Capital Limited",
                "url": "https://sqft.capital",
                "foundingDate": "2019-10-10",
                "sameAs": [
                    "https://www.linkedin.com/company/squarefootcapital/"
                ],
                "description": "sqft.capital is a platform solely for UK property developers to model deals and raise funding, quickly and consistently." 
            }
        }
        </script>

        @if ($page->production)
            <!-- Fathom - beautiful, simple website analytics -->
            <script
                src="https://cdn.usefathom.com/script.js"
                data-site="UDOCBCUB"
                defer
            ></script>
            <!-- / Fathom -->
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-100 leading-normal font-sans">
        
        <header class="fixed w-screen" x-data="{ open: false }" @keydown.escape="open = false">

            <div class="container mx-auto flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a
                        title="Go back to home page"
                        href="/"
                        class="text-indigo-800 dark:text-indigo-300"
                    >
                        <span class="sr-only">Laravel Transporter</span>
                        <svg class="h-8 w-auto sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button" class="bg-gray-100 dark:bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-indigo-800 dark:text-indigo-300 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="open = ! open" @mousedown="if (open) $event.preventDefault()" aria-expanded="true" :aria-expanded="open.toString()">
                        <span class="sr-only">Open menu</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">

                    <a
                        target="__blank"
                        rel="noopener nofollow"
                        title="View Laravel Transporter on GitHub"
                        href="https://github.com/JustSteveKing/laravel-transporter"
                        class="text-lg font-medium text-indigo-800 dark:text-indigo-300 hover:text-indigo-500"
                    >
                        GitHub
                    </a>
                    <a
                        title="Read the Documentation"
                        href="/docs/installation"
                        class="text-lg font-medium text-indigo-800 dark:text-indigo-300 hover:text-indigo-500"
                    >
                        Docs
                    </a>

                </nav>
            </div>

            <div x-show="open" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-description="Mobile menu, show/hide based on mobile menu state." class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-ref="panel" @click.away="open = false">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-gray-200 dark:bg-gray-700 divide-y-2 divide-gray-500">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <svg class="h-8 w-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div class="-mr-2">
                                <button type="button" class="bg-gray-100 dark:bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-indigo-800 dark:text-indigo-300 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="open = !open">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid grid-cols-1 gap-7">

                                <a
                                    target="__blank"
                                    rel="noopener nofollow"
                                    title="View Laravel Transporter on GitHub"
                                    href="https://github.com/JustSteveKing/laravel-transporter"
                                    class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50"
                                >
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white">
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                    </div>
                                    <div class="ml-4 text-lg font-medium text-indigo-800 dark:text-indigo-300">
                                        GitHub
                                    </div>
                                </a>

                                <a href="/docs/installation" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800">
                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-indigo-500 text-white">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    </div>
                                    <div class="ml-4 text-lg font-medium text-indigo-800 dark:text-indigo-300">
                                        Docs
                                    </div>
                                </a>

                            </nav>
                        </div>
                    </div>

                </div>
            </div>

        </header>

        <main role="main" class="w-full flex-auto pt-24">
            @yield('body')
        </main>

        <footer class="bg-gray-100 dark:bg-gray-800 text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center">
                <li class="md:mr-2">
                    &copy; <a
                        target="__blank"
                        rel="noopener nofollow"
                        href="https://www.juststeveking.uk/"
                        title="JustSteveKing website"
                    >
                        JustSteveKing
                    </a> {{ date('Y') }}.
                </li>

                <li>
                    Built with <a
                        target="__blank"
                        rel="noopener nofollow"
                        href="http://jigsaw.tighten.co"
                        title="Jigsaw by Tighten"
                    >
                        Jigsaw
                    </a> and <a
                        target="__blank"
                        rel="noopener nofollow"
                        href="https://tailwindcss.com"
                        title="Tailwind CSS, a utility-first CSS framework"
                    >
                        Tailwind CSS
                    </a>.
                </li>
            </ul>
        </footer>
    </body>
</html>
