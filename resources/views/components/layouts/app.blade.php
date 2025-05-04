<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- PhotoSwipe --}}
    <script src="https://cdn.jsdelivr.net/npm/photoswipe@5.4.3/dist/umd/photoswipe.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/photoswipe@5.4.3/dist/umd/photoswipe-lightbox.umd.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/photoswipe@5.4.3/dist/photoswipe.min.css" rel="stylesheet">
</head>
<body class="min-h-screen font-sans antialiased bg-base-200/50 dark:bg-base-200">

    <x-nav sticky class="!z-50">
 
        <x-slot:brand>
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>
 
            <a href="{{ route('index') }}" class="font-black text-3xl ">DEMO</a>
        </x-slot:brand>
 
        <x-slot:actions>
            <x-button label="Home"  link="{{ route('index') }}" class="btn-ghost btn-sm" responsive />
            <x-button label="Product" link="{{ route('products') }}" class="btn-ghost btn-sm" responsive />
            <x-button label="About Us" link="###" class="btn-ghost btn-sm" responsive />
        </x-slot:actions>
    </x-nav>

    {{-- MAIN --}}
    <x-main with-nav>
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    <footer class="bg-blue-950 text-neutral-content py-10">
        <div class="w-full mx-auto max-w-screen-2xl footer sm:footer-horizontal px-6">
            <nav>
                <h6 class="footer-title">Brand</h6>
                <a class="link link-hover">Brand 1</a>
                <a class="link link-hover">Brand 2</a>
                <a class="link link-hover">Brand 3</a>
                <a class="link link-hover">Brand 4</a>
            </nav>
            <nav>
                <h6 class="footer-title">Category</h6>
                <a class="link link-hover">Category 1</a>
                <a class="link link-hover">Category 2</a>
                <a class="link link-hover">Category 3</a>
                <a class="link link-hover">Category 4</a>
            </nav>
            <nav>
                <h6 class="footer-title">Quick Links</h6>
                <a class="link link-hover">Products</a>
                <a class="link link-hover">About us</a>
                <a class="link link-hover">Terms and Condition</a>
            </nav>
            <nav>
                <h6 class="footer-title">Contact Us</h6>
                <p>PT demo</p>
                <p>Jalan Lorem Ipsum</p>
                <p>demo@demo.com</p>
                <p>081000000</p>
            </nav>
            <nav>
                <h6 class="footer-title">Social</h6>
                <div class="grid grid-flow-col gap-4">
                  <a>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg>
                  </a>
                  <a>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg>
                  </a>
                  <a>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      class="fill-current">
                      <path
                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg>
                  </a>
                </div>
              </nav>
            <nav class="w-full">
                <div style="text-decoration:none; overflow:hidden;max-width:100%;width:100%;height:250px;">
                    <div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;">
                        <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=pasar+beringki&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                </div>
            </nav>
        </div>
    </footer>

    {{--  TOAST area --}}
    <x-toast />
</body>
</html>
