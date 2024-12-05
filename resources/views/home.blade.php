@php
use Illuminate\Support\Facades\Storage;
@endphp

<x-app-layout>
    <x-slot name="header">
        <section class="relative flex w-full h-screen" style="opacity: 1;">
            <div class="relative w-full">
                <img src="img/gili.jpg" class="object-cover w-full h-screen brightness-50">
                <!-- Adjust brightness-50 to your desired darkness level (0-100) -->
                <div
                    class="absolute top-0 left-0 right-0 flex flex-col items-center justify-center px-8 mt-24 bottom-20 lg:px-32">
                    <div style="opacity: 1;">
                        <p class="text-3xl tracking-wider text-center text-white uppercase lg:text-5xl font-lora">A SWEET
                            ESCAPES IN GILI</p>
                    </div>
                    <div style="opacity: 1;">
                        <p
                            class="mt-4 text-xs font-normal leading-relaxed tracking-wider text-center text-white font-openSans md:text-xl lg:max-w-lg">
                            Lisa Homestay is all about Modern aesthetics and is the perfect sweet escape with a soul.
                        </p>
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
        </section>
    </x-slot>

    <main class="relative overflow-hidden">

        {{-- Lisa Homestay --}}
        <section class="bg-white">
            <div class="relative isolate">
                <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="flex flex-col p-8 main-container lg:pt-24 lg:px-32" data-aos="fade-up">
                    <text
                        class="text-2xl font-medium tracking-wider text-center lg:mx-16 md:text-3xl font-playfair text-primaryDark">Experience
                        The Lisa Homestay where our guests can enjoy service, privacy and our unique delivery of Lombok
                        hospitality</text>
                    <div class="flex flex-col mt-8 md:flex-row lg:mt-28">
                        <div class="relative mr-8 basis-2/5 md:mr-16">
                            <div class="w-full h-[22rem] md:h-[32rem] bg-gradient-to-r from-slate-900 to-slate-950">
                            </div>
                            <div class="absolute top-0" style="width: auto;"><img
                                    src="https://lh3.googleusercontent.com/p/AF1QipNhdwHmGTcycoBpJ726JILRclVYcYT-HlqB_ESf=s1360-w1360-h1020"
                                    alt=""
                                    class="my-4 ml-8 md:ml-16 w-full h-[20rem] md:h-[28rem] object-cover"></div>
                        </div>
                        <div class="flex flex-col pl-0 mt-8 md:pl-24 basis-3/5"><text
                                class="tracking-wider uppercase">your holiday begin here</text><text
                                class="mt-4 text-2xl tracking-wider font-playfair md:text-3xl text-textPrimary">Discover
                                a paradise of your own at The Lisa Homestay</text>
                            <div class="w-24 h-0.5 bg-black my-4 md:my-8 opacity-80"></div>
                            <text class="lg:text-xl">Relax in the comfort of The Lisa Homestay, Lisa Homestay Gili Trawangan is located within 5 minutes' walk of Tir na Nog and offers Wi-Fi for either business or leisure. The homestay is approximately 5 minutes' drive from Gili Divers and really close to Gili Beach.
                                The accommodation lies a stroll from Gili Islands. Guests will easily find Trawangan Night Market, which is a mere 9 minutes' walk from the homestay.
                                The property offers a terrace and a sitting area, as well as comforts like air conditioning. The bathrooms feature a separate toilet and a shower. Furthermore, guest toiletries and towels is available.
                                This homestay is also only a few metres from restaurant Laughing Buddha. A terrace is a great place to dine and enjoy a drink.</text>
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



        {{-- CARD ROOM --}}
        <section class="py-6 bg-white lg:px-32 lg:py-16">
            <div class="relative isolate">
                <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="flex flex-col p-5 main-container aos-init aos-animate lg:mb-16" data-aos="fade-up">
                    <text class="text-2xl tracking-wider text-center font-playfair md:text-3xl text-textPrimary">Stay
                        &amp; Accomodation</text>
                    <text class="mt-4 tracking-wider text-center lg:text-xl font-dmSans">Relax, Enjoy
                        and Work in one of the world's most stunning and luxurious locations. Immerse yourself in Gili Terawang Island views to experience the epitome of relaxed living.</text>
                </div>

                <div class="container flex flex-col items-center gap-10 p-5 mx-auto lg:flex-row">
                    @foreach ($rooms as $room)
                        <div class="relative flex-1">
                            <div style="opacity: 1;">
                                <img src="{{ Storage::url($room->images) }}"
                                    class="w-full aspect-[3/4] md:aspect-[4/3] brightness-50 object-cover">
                                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-8">
                                    <p class="text-2xl tracking-wider text-white md:text-3xl">{{ $room->type }}</p>
                                    <div class="flex flex-row flex-wrap mt-2 space-x-4 text-sm text-white md:mt-4">
                                        <div class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" class="iconify iconify--ph" width="1em" height="1em"
                                                viewBox="0 0 256 256">
                                                <path fill="currentColor"
                                                    d="m223.68 66.15l-88-48.15a15.88 15.88 0 0 0-15.36 0l-88 48.17a16 16 0 0 0-8.32 14v95.64a16 16 0 0 0 8.32 14l88 48.17a15.88 15.88 0 0 0 15.36 0l88-48.17a16 16 0 0 0 8.32-14V80.18a16 16 0 0 0-8.32-14.03M128 32l80.34 44L128 120L47.66 76ZM40 90l80 43.78v85.79l-80-43.75Zm96 129.57v-85.75L216 90v85.78Z">
                                                </path>
                                            </svg>
                                            <p>{{ $room->area }} m²</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" class="iconify iconify--ph" width="1em" height="1em"
                                                viewBox="0 0 256 256">
                                                <path fill="currentColor"
                                                    d="M117.25 157.92a60 60 0 1 0-66.5 0a95.83 95.83 0 0 0-47.22 37.71a8 8 0 1 0 13.4 8.74a80 80 0 0 1 134.14 0a8 8 0 0 0 13.4-8.74a95.83 95.83 0 0 0-47.22-37.71M40 108a44 44 0 1 1 44 44a44.05 44.05 0 0 1-44-44m210.14 98.7a8 8 0 0 1-11.07-2.33A79.83 79.83 0 0 0 172 168a8 8 0 0 1 0-16a44 44 0 1 0-16.34-84.87a8 8 0 1 1-5.94-14.85a60 60 0 0 1 55.53 105.64a95.83 95.83 0 0 1 47.22 37.71a8 8 0 0 1-2.33 11.07">
                                                </path>
                                            </svg>
                                            <p>{{ $room->capacity }}</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" class="iconify iconify--material-symbols" width="1em"
                                                height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21zm0-2h14V5H5zm1-2h12l-3.75-5l-3 4L9 13zm-1 2V5z">
                                                </path>
                                            </svg>
                                            <p>{{ $room->view }}</p>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-2xl tracking-wider text-white md:text-3xl">
                                        Rp. {{ number_format($room->price, 2, ',', '.') }}
                                    </p>
                                    <div class="flex pt-3">
                                        <a href="{{ route('rooms.show', $room->id) }}"
                                            class="px-4 py-2 text-white border border-white rounded-md button hover:bg-white hover:text-gray-900">Discover
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
