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
          <li><a>Category 1</a></li>
          <li>CCTV ABCD</li>
        </ul>
    </div>
    <div class="card lg:card-side bg-base-100 shadow-xl mt-5">
        <figure>
            <img
                src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                alt="Album" />
        </figure>
        <div class="card-body">
            <h2 class="card-title text-3xl">CCTV Schnell SCH SX-2121FB (3.6mm)</h2>
            <p>Category: ANALOG CAMERA <br>
                Tags: CCTV Schnell SCH SX-2121FB (3.6mm), JASA PEMASANGAN CCTV DI BALI, Jual CCTV di Bali, Jual Paket Cctv di Denpasar, Pasang CCTV Bergaransi di Bali, Pasang CCTV Denpasar, Toko CCTV di Bali
            </p>
            <div class="card-actions justify-end">
                <x-button icon="fab.whatsapp" label="Ask Price" class="btn-success text-white" />
            </div>
        </div>
    </div>
    <div class="card bg-base-100 shadow-xl mt-5">
        <div class="card-body">
            <x-tabs selected="detail-tab">
                <x-tab name="detail-tab" label="DETAIL">
                    <p>Spark Mini White<br>
                        GameMax Spark Mini, U-ATX(245*185mm), FLEX-ATX(229*191mm)、ITX(170*170mm)、 Case, With featured portable, carry everywhere, blends in the home.<br>
                        Vertical airflow channel, small size, high compatibility, basically suitable for installation of all mainstream accessories on the market<br>
                        The bottom fan position blows directly to the graphics card to optimize cooling performance at maximum<br>
                        Good vertical airflow design, cooling internally anywhere and anyplace.<br>
                        The interchangeable design of the glass side panels and hollow side panels provides, additional heat dissipation airflow channels<br>
                        Mini and simple design, saving your maximum desk space<br>
                        1xUSB3.0 and 1x Type-C on the front panel for easy use for data transfer.<br>
                    </p>
                </x-tab>
                <x-tab name="spec-tab" label="SPECIFICATION">
                    <h3 class="font-bold">Info Produk</h3>
                    <p>Merek	:	Motorola<br>
                    Status Sinyal	:	Sinyal Aktif<br>
                    Tahun Rilis	:	2025<br>
                    Tipe Garansi	:	Garansi Merek (Resmi)</p>
                </x-tab>
            </x-tabs>
        </div>
    </div>
    <div class="card bg-base-100 mt-5">
        <div class="card-body">
            <h2 class="mt-5 mb-10 text-2xl font-semibold leading-tight lg:text-3xl">Related Products</h2>
            <div class="relative px-16 mx-auto max-w-7xl mt-5">
                <div class="grid w-full grid-cols-2 gap-10 lg:grid-cols-4">
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
                            </h2>
                            <div class="card-actions">
                                <div class="badge badge-outline">PC Build UP</div>
                                <div class="badge badge-outline">Brand</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
