<nav class="flex justify-between">
    <ol class="inline-flex items-center mb-3 space-x-1 text-xs text-neutral-500
        [&_.active-breadcrumb]:text-neutral-600 [&_.active-breadcrumb]:font-medium sm:mb-0">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$loop->last)
                <li class="flex items-center h-full">
                    <a href="{{ $breadcrumb['url'] }}" class="inline-flex items-center px-2 py-1.5 space-x-1.5 rounded-md hover:text-neutral-900 hover:bg-neutral-100">
                        @if (!empty($breadcrumb['icon']))
                            <svg class="w-3.5 h-3.5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                {!! $breadcrumb['icon'] !!}
                            </svg>
                        @endif
                        <span>{{ $breadcrumb['label'] }}</span>
                    </a>
                </li>
                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g fill="none" stroke="none">
                        <path d="M10 8.013l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            @else
                <li>
                    <a class="inline-flex items-center px-2 py-1.5 font-normal rounded cursor-default active-breadcrumb focus:outline-none">
                        {{ $breadcrumb['label'] }}
                    </a>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
