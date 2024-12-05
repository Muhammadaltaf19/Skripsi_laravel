@php
use Illuminate\Support\Facades\Storage;
@endphp

<x-app-layout>
    <x-slot name="header">
        <section class="relative flex w-full h-screen bg-blue-800">
            <div class="relative w-full">
                <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/490034741.jpg?k=72ce7b7128768d884922d208c9bedcf764a6eefe079e369990b46b352cec8052&o=&hp=1"
                    class="object-cover w-full h-screen filter brightness-50">
                <div class="absolute top-0 left-0 right-0 flex flex-col items-center justify-center px-8 mt-24 bottom-20 lg:px-32">
                    <div>
                        <p class="text-3xl tracking-wider text-center text-white uppercase lg:text-5xl font-lora">
                            Location & Contact
                        </p>
                    </div>
                    <div>
                        <p class="mt-4 text-xs font-normal leading-relaxed tracking-wider text-center text-white font-openSans md:text-xl lg:max-w-lg">
                            Our place located on strategic place in Gili, Lombok
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

    <section class="p-8 px-6 bg-white lg:p-16 lg:px-32">
        <div class="relative isolate">
            <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="flex flex-col items-center text-slate-900 md:flex-row">
                <div class="flex flex-col flex-1 tracking-wider">
                    <text class="font-sm">GET IN TOUCH</text>
                    <text class="mt-4 text-3xl">Contact Us</text>
                    <div class="mt-4 w-16 h-0.5 bg-slate-900 opacity-80"></div>
                    <text class="mt-8 text-sm capitalize text-textPrimary">
                        Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Barat. (83352)
                    </text>
                    <text class="mt-4 text-sm">
                        Mobile (WhatsApp) : <text class="font-semibold cursor-pointer">08998211377</text>
                    </text>
                    <text class="mt-2 text-sm">
                        Phone : <text class="font-semibold">(0361) 9347288</text>
                    </text>
                    <text class="mt-2 text-sm">
                        Email : <text class="font-semibold">lisahomestay@gmail.com</text>
                    </text>
                    <text class="mt-2 text-sm">
                        Instagram : <a class="font-semibold" href="https://www.instagram.com/lisahomestay.bali/" target="_blank" rel="noreferrer">@lisahomestay.gili</a>
                    </text>
                    <div class="mt-8">
                        <a href="https://wa.me/628998211377" target="_blank" type="button"
                            class="px-4 py-2 transition ease-in-out delay-150 bg-white border rounded-md border-slate-900 text-slate-900 hover:bg-slate-900 hover:text-white">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="flex flex-col flex-1 mt-8 tracking-wider md:mt-0">
                    <iframe class="w-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.4683005834127!2d116.03826787477233!3d-8.355506491681382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcde755fda85a49%3A0x95d9ab145e8c7369!2sLisa%20Homestay!5e0!3m2!1sid!2sid!4v1707221661860!5m2!1sid!2sid"
                        height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
