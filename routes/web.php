<?php

use Livewire\Volt\Volt;

Volt::route('/', 'home.index')->name('index');
Volt::route('/products', 'products.index')->name('products');
Volt::route('/products/detail', 'products.detail')->name('products.detail');
Volt::route('/about-us', 'about-us.index')->name('about-us');
