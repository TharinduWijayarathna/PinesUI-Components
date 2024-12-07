<div x-data="{
    bannerVisible: false,
    bannerVisibleAfter: {{ $delay }},
}"
x-show="bannerVisible"
x-transition:enter="transition ease-out duration-500"
x-transition:enter-start="translate-y-full"
x-transition:enter-end="translate-y-0"
x-transition:leave="transition ease-in duration-300"
x-transition:leave-start="translate-y-0"
x-transition:leave-end="translate-y-full"
x-init="
    setTimeout(() => { bannerVisible = true }, bannerVisibleAfter);
"
class="fixed bottom-0 right-0 w-full h-auto duration-300 ease-out sm:px-5 sm:pb-5 sm:w-[26rem] lg:w-full" x-cloak>
<div class="flex flex-col items-center justify-between w-full h-full max-w-4xl p-6 mx-auto bg-white border-t shadow-lg lg:p-8 lg:flex-row sm:border-0 sm:rounded-xl">
    <div class="flex flex-col items-start h-full pb-6 text-xs lg:items-center lg:flex-row lg:pb-0 lg:pr-6 lg:space-x-5 text-neutral-600">
        <img src="{{ $icon }}" class="w-8 h-8 sm:w-12 sm:h-12 lg:w-16 lg:h-16">
        <div class="pt-6 lg:pt-0">
            <h4 class="w-full mb-1 text-xl font-bold leading-none -translate-y-1 text-neutral-900">{{ $title }}</h4>
            <p>{{ $message }}</p>
        </div>
    </div>
    <div class="flex items-end justify-end w-full pl-3 space-x-3 lg:flex-shrink-0 lg:w-auto">
        <button @click="bannerVisible=false;" class="inline-flex items-center justify-center flex-shrink-0 w-1/2 px-4 py-2 text-sm font-medium tracking-wide transition-colors duration-200 bg-white border-2 rounded-md lg:w-auto text-neutral-600 hover:text-neutral-700 border-neutral-950 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
            {{ $denyText }}
        </button>
        <button @click="bannerVisible=false;" class="inline-flex items-center justify-center flex-shrink-0 w-1/2 px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 border-2 rounded-md lg:w-auto bg-neutral-950 border-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
            {{ $acceptText }}
        </button>
    </div>
</div>
</div>
