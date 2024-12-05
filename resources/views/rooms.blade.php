@php
use Illuminate\Support\Facades\Storage;
@endphp

<x-app-layout>
    <x-slot name="header">
        <section class="relative flex w-full h-screen">
            <div class="relative flex w-full h-screen" style="opacity: 1;">
                <div class="relative w-full">
                    <img src="{{ Storage::url($room->images) }}" class="object-cover w-full h-screen brightness-50">
                    <!-- Adjust brightness-50 to your desired darkness level (0-100) -->
                    <div
                        class="absolute top-0 left-0 right-0 flex flex-col items-center justify-center px-8 mt-24 bottom-20 lg:px-32">
                        <div style="opacity: 1;">
                            <p class="text-3xl tracking-wider text-center text-white uppercase lg:text-5xl font-lora">
                                {{ $room->type }}</p>
                        </div>
                        <div style="opacity: 1;">
                            @php
                                $description = $room->description;
                                $sentences = preg_split('/(?<=[.?!])\s+(?=[A-Z])/i', $description);
                                $firstSentence = $sentences[0] ?? '';
                            @endphp
                            <h1
                                class="mt-4 text-sm leading-relaxed tracking-wider text-center text-white font-openSans md:text-xl lg:max-w-lg">
                                {{ $firstSentence }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 z-30">
                    <div class="flex flex-col items-center justify-center">
                        <p class="text-sm tracking-widest text-white font-lora">SCROLL TO DISCOVER</p>
                        <div class="w-0.5 h-16 lg:h-24 mt-4">
                            <div style="height: 100%;">
                                <div class="w-0.5 bg-white h-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>

    {{-- Section Description --}}
    <section class="flex flex-col bg-white section-p md:py-16 lg:py-20">
        <div class="relative isolate">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full" style="font-family: 'Lora', serif;">
                <div class="flex flex-col lg:w-2/4">
                    <div class="flex flex-col">
                        <div style="opacity: 1;">
                            <h3 class="p-5 leading-relaxed text-center md:text-3xl text-slate-950">
                                {{ $room->description }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </section>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>


    {{-- ROOM FEATURES --}}
    <section class="flex flex-col px-6 py-10 text-white section-p bg-gradient-to-r from-slate-900 to-slate-950">
        <div class="relative isolate">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="z-20 flex flex-col items-center justify-center w-full my-4" style="font-family: 'Lora', serif;">
                <div class="flex flex-col lg:w-2/4">
                    <div style="opacity: 1;">
                        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                            <div class="flex flex-col space-y-2 ">
                                <h1 class="mb-4 text-4xl tracking-tight font-reguler md:text-4xl">ROOM FEATURES</h1>
                                <div style="opacity: 1;">
                                    <div class="flex items-center pt-4 space-x-2"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                            role="img" class="iconify iconify--ph" width="1em" height="1em"
                                            viewBox="0 0 256 256">
                                            <path fill="currentColor"
                                                d="m223.68 66.15l-88-48.15a15.88 15.88 0 0 0-15.36 0l-88 48.17a16 16 0 0 0-8.32 14v95.64a16 16 0 0 0 8.32 14l88 48.17a15.88 15.88 0 0 0 15.36 0l88-48.17a16 16 0 0 0 8.32-14V80.18a16 16 0 0 0-8.32-14.03M128 32l80.34 44L128 120L47.66 76ZM40 90l80 43.78v85.79l-80-43.75Zm96 129.57v-85.75L216 90v85.78Z">
                                            </path>
                                        </svg>
                                        <p class="font-openSans text-neutral90">{{ $room->area }} m&sup2;</p>
                                    </div>
                                </div>
                                <div style="opacity: 1;">
                                    <div class="flex items-center py-3 space-x-2"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                            role="img" class="iconify iconify--ph" width="1em" height="1em"
                                            viewBox="0 0 256 256">
                                            <path fill="currentColor"
                                                d="M117.25 157.92a60 60 0 1 0-66.5 0a95.83 95.83 0 0 0-47.22 37.71a8 8 0 1 0 13.4 8.74a80 80 0 0 1 134.14 0a8 8 0 0 0 13.4-8.74a95.83 95.83 0 0 0-47.22-37.71M40 108a44 44 0 1 1 44 44a44.05 44.05 0 0 1-44-44m210.14 98.7a8 8 0 0 1-11.07-2.33A79.83 79.83 0 0 0 172 168a8 8 0 0 1 0-16a44 44 0 1 0-16.34-84.87a8 8 0 1 1-5.94-14.85a60 60 0 0 1 55.53 105.64a95.83 95.83 0 0 1 47.22 37.71a8 8 0 0 1-2.33 11.07">
                                            </path>
                                        </svg>
                                        <p class="font-openSans">{{ $room->capacity }} Adults</p>
                                    </div>
                                </div>
                                <div style="opacity: 1;">
                                    <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                            role="img" class="iconify iconify--material-symbols" width="1em"
                                            height="1em" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21zm0-2h14V5H5zm1-2h12l-3.75-5l-3 4L9 13zm-1 2V5z">
                                            </path>
                                        </svg>
                                        <p class="font-openSans">{{ $room->view }}</p>
                                    </div>
                                </div>
                                <div style="opacity: 1;">
                                    <div class="flex items-center space-x-2">
                                        <p class="mt-2 text-2xl tracking-wider text-white md:text-3xl">
                                            Rp. {{ number_format($room->price, 2, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <ul class="px-4 list-disc lg:space-y-4 font-openSans">
                                    @foreach (explode("\n", $room->features) as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
