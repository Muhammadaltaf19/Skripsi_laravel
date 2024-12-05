@php
use Illuminate\Support\Facades\Storage;
@endphp

<x-app-layout>
    <x-slot name="header">
        <section class="relative flex w-full h-screen bg-blue-800">
            <div class="relative w-full">
                <img src="https://1.bp.blogspot.com/-dPi8TAkoh1w/XmDFE_seyJI/AAAAAAAAG7M/aXUtLAkSYLk5sM13dEvJcvLoNcmG_W6EACLcBGAsYHQ/s1600/Gili%2BTrawangan%2B3.jpg"
                    class="object-cover w-full h-screen filter brightness-50">
                <div
                    class="absolute top-0 left-0 right-0 flex flex-col items-center justify-center px-8 mt-24 bottom-20 lg:px-32">
                    <div>
                        <p class="text-3xl text-center text-white uppercase lg:text-5xl font-lora">Lisa's Rental</p>
                    </div>
                    <div>
                        <p
                            class="mt-4 text-xs font-normal leading-relaxed text-center text-white font-openSans md:text-xl lg:max-w-lg">
                            Not only a ordinary homestay, we provide you the best things to do in Gili.</p>
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



    <section class="p-8 bg-white lg:p-32">
        <div class="relative isolate">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="flex flex-col main-container">
                <text class="text-2xl font-medium text-center md:text-3xl text-primaryDark">Unique stays and beyond.
                    <br>Welcome to the perfect destination to make your holiday.</text>



                @foreach ($rentals as $rental)
                    <div class="flex flex-col mt-8 md:flex-row md:mt-32">
                        <div class="relative mr-8 basis-2/5 md:mr-16">
                            <div class="w-full h-[22rem] md:h-[32rem] bg-gradient-to-r from-slate-900 to-slate-950">
                            </div>
                            <div class="absolute top-0" style="width: 100%;">
                                <img src="{{ Storage::url($rental->image) }}" alt=""
                                    class="my-4 ml-8 md:ml-16 w-full h-[20rem] md:h-[28rem] object-cover">
                            </div>

                        </div>
                        <div class="flex flex-col pl-0 mt-8 md:pl-24 basis-3/5">
                            <text class="text-xs uppercase">accommodation</text>
                            <text class="py-3 text-2xl md:text-3xl text-textPrimary">{{ $rental->name }}</text>
                            <div class="w-24 h-0.5 bg-black lg:mt-3"></div>
                            <p class="py-3 text-2xl font-semibold tracking-wider text-black lg:py-5 md:text-3xl">
                                Rp. {{ number_format($rental->price, 2, ',', '.') }}
                            </p>

                            <div
                                class="hidden py-3 tracking-wide lg:py-1 description text-textSecondary text-md md:block">
                                {{ $rental->description }}</div>
                            <div class="flex flex-row justify-between lg:mt-8">
                                <button
                                    class="underline toggle-description underline-offset-4 text-secondary md:hidden">SEE
                                    DETAILS</button>
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


    <script>
        document.querySelectorAll('.toggle-description').forEach(button => {
            button.addEventListener('click', () => {
                const description = button.closest('.flex.flex-col').querySelector('.description');
                if (description.classList.contains('hidden')) {
                    description.classList.remove('hidden');
                    button.textContent = 'HIDE DETAILS';
                } else {
                    description.classList.add('hidden');
                    button.textContent = 'SEE DETAILS';
                }
            });
        });
    </script>

    <style>
        @media (min-width: 768px) {
            .description {
                display: block !important;
            }

            .toggle-description {
                display: none !important;
            }
        }
    </style>


</x-app-layout>
