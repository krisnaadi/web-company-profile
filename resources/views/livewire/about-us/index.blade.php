<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <section class="h-auto bg-white rounded-2xl rounded-b-none">
        <div class="px-10 py-24 mx-auto max-w-7xl">
            <div class="w-full mx-auto text-left md:text-center">
                <h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-900 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight"> Your <span class="w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 lg:inline">Go-To Solution</span> for<br class="lg:block hidden"> Your IT Problem. </h1>
                <p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24"> Providing expert CCTV installation, reliable PC maintenance, and high-quality hardware to meet all your tech needs. We’re here to keep your systems secure and running smoothly. </p>
            </div>
        </div>
    </section>

    <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
        <div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">
    
            <!-- Image -->
            <div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                <img src="https://cdn.devdojo.com/images/december2020/productivity.png" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 " />
            </div>
    
            <!-- Content -->
            <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    About Us
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet pellentesque ligula, id suscipit quam. Maecenas id ligula lectus. Fusce venenatis, sem quis gravida commodo, velit purus maximus massa, vitae placerat metus metus in enim. Praesent at hendrerit arcu. Nullam imperdiet id purus et convallis. Suspendisse suscipit tristique magna, vitae dapibus eros aliquet quis. Nullam sodales aliquam orci sed consequat.</p>
            </div>
            <!-- End  Content -->
        </div>
        <div class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">
    
            <!-- Content -->
            <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    Vision
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                    Menjadi perusahaan IT Service & Solutions dalam hal
                    pelayanan teknologi di Bali, dengan mengutamakan
                    kualitas produk, efisiensi layanan, layanan purna jual dan
                    kepuasan pelanggan.</p>
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    Mission
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                    Menyediakan IT Solutions yang innovatif, efektif, efisien dan harga yang kompetitif.</p>
            </div>
            <!-- End  Content -->
    
            <!-- Image -->
            <div class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                <img src="https://cdn.devdojo.com/images/december2020/settings.png" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32" />
            </div>
        </div>
    </section>
    
    <section  class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24 rounded-2xl rounded-t-none px-8 lg:px-16 text-center">
        @php
            $images = [
                'https://picsum.photos/200/300?random=1',
                'https://picsum.photos/200/300?random=2',
                'https://picsum.photos/200/300?random=3',
                'https://picsum.photos/200/300?random=4',
                'https://picsum.photos/200/300?random=5',
            ]
        @endphp
        
        <x-image-gallery :images="$images" class="h-[300px] rounded-box" />
    </section>
</div>
