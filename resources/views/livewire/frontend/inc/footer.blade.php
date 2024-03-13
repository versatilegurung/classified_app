<div>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-24">
        <div class="container mx-auto flex flex-wrap items-top justify-between px-5">
            <!-- Website Description -->
            <div class="w-full md:w-5/12 px-4 mb-8">
                <h2 class="text-2xl font-bold mb-4">About Us</h2>
                <p class="text-sm font-thin leading-6 text-justify">Welcome to Chitwan Buy & Sell, your go-to
                    destination for hassle-free and cost-free classified ads! We take pride in providing a user-friendly
                    platform that connects buyers and sellers from all walks of life without any financial barriers. At
                    Chitwan Buy & Sell, we believe in fostering a community-driven marketplace where you can easily buy,
                    sell, or trade a diverse range of products and services.</p>
            </div>

            <!-- Navigation Menu -->
            <div class="w-full md:w-2/12 px-4 mb-8">
                <h2 class="text-2xl font-bold mb-4">Navigation</h2>
                <nav>
                    <ul class="text-md">
                        <li class="mb-3"><a href="{{ route('home') }}"
                                class="text-gray-400 hover:text-white">{{ __('home') }}</a>
                        </li>
                        <li class="mb-3"><a href="{{ route('categories') }}"
                                class="text-gray-400 hover:text-white">{{ __('categories') }}</a></li>
                        <li class="mb-3"><a href="{{ route('ads.by.location') }}"
                                class="text-gray-400 hover:text-white">{{ __('location') }}</a></li>
                        <li class="mb-3"><a href="{{ route('post.ad') }}"
                                class="text-gray-400 hover:text-white">{{ __('postad') }}</a></li>

                    </ul>
                </nav>
            </div>

            <!-- Account Links -->
            <div class="w-full md:w-2/12 px-4 mb-8">
                <h2 class="text-2xl font-bold mb-4">Our Links</h2>
                <nav>
                    <ul class="text-md">

                        <li class="mb-3"><a href="#"
                                class="text-gray-400 hover:text-white">{{ __('about-us') }}</a>
                        </li>
                        <li class="mb-3"><a href="#"
                                class="text-gray-400 hover:text-white">{{ __('our-services') }}</a>
                        </li>
                        <li class="mb-3"><a href="#"
                                class="text-gray-400 hover:text-white">{{ __('safety-tips') }}</a></li>
                        <li class="mb-3"><a href="{{ route('contact') }}"
                                class="text-gray-400 hover:text-white">{{ __('contact') }}</a></li>
                    </ul>
                </nav>
            </div>


            <!-- Social Share Links -->
            <div class="w-full md:w-2/12 px-4 mb-8">
                <h2 class="text-2xl font-bold mb-4">Follow us</h2>
                <nav>
                    <ul class="text-md">
                        <li class="mb-3">
                            <i class="fa-brands fa-square-facebook"></i>
                            <a href="#" class="text-gray-400 hover:text-white ml-2">Facebook</a>
                        </li>

                        <li class="mb-3">
                            <i class="fa-brands fa-square-instagram"></i>
                            <a href="#" class="text-gray-400 hover:text-white ml-2">Instagram</a>
                        </li>

                        <li class="mb-3">
                            <i class="fa-brands fa-youtube"></i>
                            <a href="#" class="text-gray-400 hover:text-white ml-2">YouTube</a>
                        </li>

                        <li class="mb-3">
                            <i class="fa-brands fa-tiktok"></i>
                            <a href="#" class="text-gray-400 hover:text-white ml-2">TikTok</a>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <div>
            <div class="container mx-auto flex flex-wrap items-center justify-between">
                <div class="w-full px-4">
                    <hr class="border-gray-500">
                </div>
                <div class="w-full px-4 py-5 text-center">
                    <p class="text-sm font-thin text-gray-400">© {{ date('Y') }}
                        Chitwan Buy & Sell. All rights
                        reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</div>
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
