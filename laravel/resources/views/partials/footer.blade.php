@php
    $links = [
        [
            'title' => 'Footer1',
            'links' => [
                'Footer1' => '/footer1',
                'Notes' => '/docs/' . DEFAULT_VERSION . '/notes',
            ],
        ],
    ];

    $is_docs_page = request()->is('docs/*');
@endphp

<footer class="relative pt-12 {{ $is_docs_page ? 'dark:bg-dark-700' : '' }}">
    <div class="max-w-screen-2xl mx-auto w-full {{ $is_docs_page ? 'px-8' : 'px-5' }}">
        <div>
            <a href="/" class="inline-flex">
                <img class="w-16 h-16" src="" alt="Estudo" loading="lazy">
            </a>
        </div>

        <div class="mt-6 grid grid-cols-12 md:gap-x-8 gap-y-12 sm:mt-12">
            <div class="col-span-12 lg:col-span-4">
                <p class="max-w-sm text-xs text-gray-700 sm:text-sm {{ $is_docs_page ? 'dark:text-gray-500' : '' }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto autem consectetur delectus dolorum est fugiat id illo optio perferendis qui, rerum vitae! Architecto asperiores laudantium natus nobis quidem, quisquam!</p>
            </div>
            @foreach ($links as $column)
                <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2">
                    <span class="uppercase {{ $is_docs_page ? 'dark:text-gray-200' : '' }}">{{ $column['title'] }}</span>
                    <div class="mt-5">
                        <ul class="space-y-3 text-gray-700 {{ $is_docs_page ? 'dark:text-gray-500' : '' }}">
                            @foreach ($column['links'] as $title => $href)
                                <li>
                                    <a href="{{ $href }}" class="transition-colors hover:text-gray-600 {{ $is_docs_page ? 'dark:hover:text-gray-400' : '' }}">{{ $title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</footer>
