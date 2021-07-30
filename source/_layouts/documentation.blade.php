@extends('_layouts.master')


@section('body')
<section class="container mx-auto px-6 md:px-8 py-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
        <nav id="docs-nav" class="space-y-4 col-span-1" aria-label="Sidebar">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>
        
        <div class="col-span-3 content px-4 text-gray-800 dark:text-gray-50 text-lg leading-7 whitespace-normal" v-pre>
            @yield('content')
        </div>
    </div>

</section>
@endsection
