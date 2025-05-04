<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div class="breadcrumbs text-sm px-10 py-5 bg-white rounded-2xl">
        <ul>
          <li><a>Home</a></li>
          <li><a>Product</a></li>
          <li>Category 1</li>
        </ul>
    </div>
    <div class="md:flex gap-5 mt-5">
        <aside >
            <x-menu class="bg-white rounded-2xl w-full md:w-64">
                <x-menu-sub title="PRODUCT CATEGORIES" open>
                    <x-menu-item title="Camera"  />
                    <x-menu-item title="Monitor"  />
                    <x-menu-item title="Keyboard"  />
                    <x-menu-item title="Build Up"  />
                    <x-menu-item title="Cable"  />
                    <x-menu-item title="Printer"  />
                </x-menu-sub>
                <x-menu-sub title="BRANDS"  open>
                    <x-menu-item >
                        Brand 1
                        <x-badge value="10" class="bg-gray-100" />
                    </x-menu-item>
                    <x-menu-item >
                        Brand 2
                        <x-badge value="2" class="bg-gray-100" />
                    </x-menu-item>
                    <x-menu-item >
                        Brand 3
                        <x-badge value="3" class="bg-gray-100" />
                    </x-menu-item>
                    <x-menu-item >
                        Brand 4
                        <x-badge value="2" class="bg-gray-100" />
                    </x-menu-item>

                </x-menu-sub>
            </x-menu>
        </aside>
        <div class="flex-grow">
            <div class="mt-5 md:mt-0">
                <x-input icon="o-magnifying-glass">
                    <x-slot:append>
                        {{-- Add `rounded-s-none` class (RTL support) --}}
                        <x-button label="Search" class="btn btn-soft btn-primary rounded-s-none" />
                    </x-slot:append>
                </x-input>
            </div>
            <div class="grid w-full grid-cols-2 gap-10 lg:grid-cols-4 mt-5">
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
        
    </div>
</div>
