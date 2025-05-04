<?php

use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Volt\Component;
use Mary\Traits\Toast;

new class extends Component {
    public function promo(): array
    {
        return [
            [
                'image' => 'https://picsum.photos/1920/1080?random=1',
            ],
            [
                'image' => 'https://picsum.photos/1920/1080?random=2',
            ],
            [
                'image' => 'https://picsum.photos/1920/1080?random=3',
            ],
            [
                'image' => 'https://picsum.photos/1920/1080?random=4',
            ],
        ];
    }

    public function with(): array
    {
        return [
            'promo' => $this->promo(),
        ];
    }
}; ?>

<div>
    <x-carousel :slides="$promo" class="!h-[500px]"/>

    <section class="py-20 bg-white mt-5 rounded-2xl">
        <div class="container max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold tracking-tight text-center">Our Service</h2>
            <p class="mt-2 text-lg text-center text-gray-600">Check out our list of awesome service below.</p>
            <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
    
                <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                    <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" /><circle cx="6" cy="14" r="3" /><path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" /></svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">Certifications</h4>
                    <p class="text-base text-center text-gray-500">Each of our plan will provide you and your team with certifications.</p>
                </div>
    
                <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                    <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M18 8a3 3 0 0 1 0 6" /><path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" /><path d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" /></svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">Notifications</h4>
                    <p class="text-base text-center text-gray-500">Send out notifications to all your customers to keep them engaged.</p>
                </div>
    
                <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                    <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">Bundles</h4>
                    <p class="text-base text-center text-gray-500">High-quality bundles of awesome tools to help you out.</p>
                </div>
    
            </div>
        </div>
    </section>

    <section class="bg-blue-200 relative py-20 overflow-hidden mt-5 rounded-2xl">
        <span class="absolute top-0 right-0 flex flex-col items-end mt-0 -mr-16 opacity-60">
            <span class="container hidden w-screen h-32 max-w-xs mt-20 transform rounded-full rounded-r-none md:block md:max-w-xs lg:max-w-lg 2xl:max-w-3xl bg-blue-50"></span>
        </span>
    
        <span class="absolute bottom-0 left-0"> </span>
    
        <div class="relative px-16 mx-auto max-w-7xl mt-5">
            <p class="font-medium tracking-wide text-blue-500 uppercase">Category</p>
            <h2 class="relative max-w-lg mt-5 mb-10 text-4xl font-semibold leading-tight lg:text-5xl">Your One-Stop Hub for<br>Smart IT Products</h2>
            <div class="grid w-full grid-cols-2 gap-10 sm:grid-cols-4 lg:grid-cols-6">
                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-blue-50"></div>
                        <img class="relative z-20 w-full rounded-full" src="{{ asset("images/category5.png") }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>ANALOG CAMERA</h3>
                            <p class="text-gray-600">10 items</p>
                        </div>
                    </div>
                </div>
    
                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50"></div>
                        <img class="relative z-20 w-full rounded-full" src="{{ asset("images/category6.png") }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>ANALOG CAMERA</h3>
                            <p class="text-gray-600">10 items</p>
                        </div>
                    </div>
                </div>
    
                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-pink-50"></div>
                        <img class="relative z-20 w-full rounded-full" src="{{ asset("images/category1.png") }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>ANALOG CAMERA</h3>
                            <p class="text-gray-600">10 items</p>
                        </div>
                    </div>
                </div>
    
                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50"></div>
                        <img class="relative z-20 w-full rounded-full" src="{{ asset("images/category2.png") }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>ANALOG CAMERA</h3>
                            <p class="text-gray-600">10 items</p>
                        </div>
                    </div>
                </div>
    
                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50"></div>
                        <img class="relative z-20 w-full rounded-full" src="{{ asset("images/category3.png") }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>ANALOG CAMERA</h3>
                            <p class="text-gray-600">10 items</p>
                        </div>
                    </div>
                </div>
    
                <div class="flex flex-col items-center justify-center col-span-1">
                    <div class="relative p-5">
                        <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-pink-50"></div>
                        <img class="relative z-20 w-full rounded-full" src="{{ asset("images/category4.png") }}" />
                    </div>
                    <div class="mt-3 space-y-2 text-center">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>ANALOG CAMERA</h3>
                            <p class="text-gray-600">10 items</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white relative py-20 overflow-hidden mt-5 rounded-2xl">
        <span class="absolute top-0 left-0 flex flex-col items-end mt-0 -mr-16 opacity-60">
            <span class="container hidden w-screen h-32 max-w-xs mt-20 transform rounded-full rounded-l-none md:block md:max-w-xs lg:max-w-lg 2xl:max-w-3xl bg-blue-200"></span>
        </span>
    
        <span class="absolute bottom-0 left-0"> </span>
    
        <div class="relative px-16 mx-auto max-w-7xl mt-5">
            <p class="font-medium tracking-wide text-blue-500 uppercase text-right">Most Popular Products</p>
            <h2 class="text-right mt-5 mb-10 text-4xl font-semibold leading-tight lg:text-5xl">Powerful, Reliable Solutions for<br>Every Security and IT Need</h2>
            <div class="grid w-full grid-cols-2 gap-10 lg:grid-cols-4">
                <a href="{{ route('products.detail') }}">
                <div class="card bg-base-100 shadow-lg hover:shadow-2xl transition-all ease-in-out cursor-pointer">
                    <figure>
                    <img
                        src="{{ asset('images/product1.png') }}"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body rounded-2xl rounded-t-none bg-blue-50">
                        <h2 class="card-title">
                            Card Title
                            <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <div class="card-actions">
                            <div class="badge badge-outline">Camera</div>
                            <div class="badge badge-outline">Brand</div>
                        </div>
                    </div>
                </div>
                </a>
                <div class="card bg-base-100 shadow-lg">
                    <figure>
                    <img
                        src="{{ asset('images/product2.png') }}"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body rounded-2xl rounded-t-none bg-blue-50">
                        <h2 class="card-title">
                            Card Title
                            <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <div class="card-actions">
                            <div class="badge badge-outline">Cable</div>
                            <div class="badge badge-outline">Brand</div>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-lg">
                    <figure>
                    <img
                        src="{{ asset('images/product3.jpg') }}"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body rounded-2xl rounded-t-none bg-blue-50">
                        <h2 class="card-title">
                            Card Title
                        </h2>
                        <div class="card-actions">
                            <div class="badge badge-outline">Monitor</div>
                            <div class="badge badge-outline">Brand</div>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-lg">
                    <figure>
                    <img
                        src="{{ asset('images/product2.png') }}"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body rounded-2xl rounded-t-none bg-blue-50">
                        <h2 class="card-title">
                            Card Title
                            <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <div class="card-actions">
                            <div class="badge badge-outline">PC Build UP</div>
                            <div class="badge badge-outline">Brand</div>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-lg">
                    <figure>
                    <img
                        src="{{ asset('images/product2.png') }}"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body rounded-2xl rounded-t-none bg-blue-50">
                        <h2 class="card-title">
                            Card Title
                            <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <div class="card-actions">
                            <div class="badge badge-outline">Category</div>
                            <div class="badge badge-outline">Brand</div>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-lg">
                    <figure>
                    <img
                        src="{{ asset('images/product2.png') }}"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body rounded-2xl rounded-t-none bg-blue-50">
                        <h2 class="card-title">
                            Card Title
                        </h2>
                        <div class="card-actions">
                            <div class="badge badge-outline">Category</div>
                            <div class="badge badge-outline">Brand</div>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-lg">
                    <figure>
                    <img
                        src="{{ asset('images/product2.png') }}"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body rounded-2xl rounded-t-none bg-blue-50">
                        <h2 class="card-title">
                            Card Title
                        </h2>
                        <div class="card-actions">
                            <div class="badge badge-outline">Category</div>
                            <div class="badge badge-outline">Brand</div>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-lg">
                    <figure>
                        <img
                            src="{{ asset('images/product2.png') }}"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body rounded-2xl rounded-t-none bg-blue-50">
                        <h2 class="card-title">
                            Card Title
                        </h2>
                        <div class="card-actions">
                            <div class="badge badge-outline">Category</div>
                            <div class="badge badge-outline">Brand</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-100 mt-5 pt-7 pb-14 rounded-2xl">
        <div class="container px-8 mx-auto sm:px-12 lg:px-20">
            <h1 class="text-sm font-bold tracking-wide text-center text-gray-800 uppercase mb-7">Featured Brand</h1>
            <div class="grid items-center justify-center md:grid-cols-4 lg:grid-cols-12 gap-y-8">
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/disney-plus.svg" alt="Disney Plus" class="block object-contain h-12" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/google.svg" alt="Google" class="block object-contain h-9" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/hubspot.svg" alt="Hubspot" class="block object-contain h-9" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/youtube.svg" alt="Youtube" class="block object-contain h-7 lg:h-8" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/slack.svg" alt="Slack" class="block object-contain h-9" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/shopify.svg" alt="Shopify" class="block object-contain h-9" />
                </div>
            </div>
        </div>
    </section>
</div>
