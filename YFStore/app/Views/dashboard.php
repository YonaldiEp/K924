<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        .scale-up {
            transition: transform 0.5s ease-in-out;
        }

        .scale-up:hover {
            transform: scale(1.05);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <header class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-start gap-2 md:flex-row md:items-center md:justify-between">
                <div class="flex items-center gap-4">
                    <img src="<?= base_url('images/Logo.png') ?>" alt="Logo" class="w-24 h-24">
                    <div>
                        <a href="/dashboard" class="inline-block">
                            <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Toko Jersey YF</h1>
                        </a>
                        <p class="mt-1.5 text-xl text-gray-500">Beranda</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 ml-auto">
                    <a href="/dashboard">
                        <button class="inline-block bg-white px-3 py-2 text-sm font-medium text-gray-900 transition hover:text-gray-700 focus:outline-none focus:ring">Beranda</button>
                    </a>
                    <a href="#about-us">
                        <button class="inline-block bg-white px-3 py-2 text-sm font-medium text-gray-900 transition hover:text-gray-700 focus:outline-none focus:ring">Tentang Kami</button>
                    </a>
                    <div class="relative inline-block text-left dropdown">
                        <button class="inline-block bg-white px-3 py-2 text-sm font-medium text-gray-900 transition hover:text-gray-700 focus:outline-none focus:ring">Produk
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-content">
                            <a href="<?= base_url('produk/1') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jersey Voli</a>
                            <a href="<?= base_url('produk/2') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jersey Basket</a>
                            <a href="<?= base_url('produk/3') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Jersey Sepak Bola</a>
                        </div>
                    </div>
                    <a href="#contact">
                        <button class="inline-block bg-white px-3 py-2 text-sm font-medium text-gray-900 transition hover:text-gray-700 focus:outline-none focus:ring">Kontak</button>
                    </a>
                    <div class="relative inline-block text-left dropdown">
                        <div class="flex items-center">
                            <img src="<?= base_url('images/Profil.jpg'); ?>" alt="Profil" class="w-6 h-6">
                            <button class="inline-block bg-white px-3 py-2 text-sm font-medium text-gray-900 transition hover:text-gray-700 focus:outline-none focus:ring">Profil
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a 1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="dropdown-content">
                            <a href="/editaccount" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit Akun</a>
                            <a href="/logout" class="block px-4 py-2 text-sm text-white hover:bg-red-700 bg-red-600">Keluar</a>
                        </div>
                    </div>
                    <a href="<?= base_url('keranjang') ?>" class="ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-4-8h16m0 0l-3 6h-9l4 8M5.4 5H20M9 21h6m-6 0h-.01M9 21a1 1 0 11-2 0m2 0a1 1 0 002 0m-2 0h6m0 0a1 1 0 102 0m-2 0a1 1 0 01-2 0" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- END NAVBAR -->

    <!-- CONTENT -->
    <section class="bg-white mt-0 mb-20" style="min-height: 25vh; padding-top: 5vh;">
        <div class="mx-auto max-w-screen-xl px-2 py-8 lg:py-12 lg:flex lg:items-start">
            <div class="mx-auto max-w-md text-center">
                <h1 class="text-3xl font-extrabold sm:text-5xl text-blue-700">
                    Temukan Jersey Sempurna Anda.
                    <strong class="font-extrabold text-blue-900 sm:block"> Tingkatkan Permainan Anda. </strong>
                </h1>
                <p class="mt-4 sm:text-xl sm:leading-relaxed text-blue-700">
                    Temukan berbagai macam jersey berkualitas tinggi untuk setiap olahraga dan tim. Tingkatkan performa
                    Anda dengan koleksi premium kami.
                </p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
                        href="#">
                        Jelajahi Produk
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT -->

    <!-- ABOUT -->
    <section id="about-us" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Tentang Kami</h2>
            </div>
            <div class="max-w-3xl mx-auto">
                <p class="text-lg text-gray-700 leading-relaxed">
                    Selamat datang di Toko Jersey YF, destinasi utama untuk para pecinta olahraga yang mencari jersey
                    berkualitas tinggi. Kami bangga menghadirkan berbagai pilihan jersey, mulai dari jersey voli,
                    basket, hingga sepak bola,ang dirancang untuk memenuhi kebutuhan atletik Anda. Di Toko Jersey YF,
                    kami tidak hanya menjual produk, tetapi juga semangat dan dedikasi dalam setiap lembar kain yang
                    kami tawarkan. Dengan komitmen kami terhadap kualitas dan pelayanan terbaik, kami siap membantu Anda
                    tampil optimal di lapangan. Bergabunglah dengan komunitas pelanggan setia kami dan rasakan
                    pengalaman berbelanja jersey yang berbeda hanya di Toko Jersey YF.

                </p>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->


    <!-- PRODUK -->
    <section id="produk" class="py-12 bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center fade-in">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Produk</h2>
                <p class="mx-auto mt-4 max-w-md text-gray-500">
                    Pilih cabang olahraga yang sesuai
                </p>
            </header>
            <div class="flex justify-center">
                <ul class="mt-8 grid gap-4 sm:grid-cols-3 lg:grid-cols-3">
                    <li class="fade-in">
                        <a href="<?= base_url('produk/1') ?>" class="group block overflow-hidden scale-up">
                            <img src="<?= base_url('images/voli.jpg') ?>" alt="Jersey Voli" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                            <div class="relative bg-white pt-3">
                                <h3 class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">Jersey Voli</h3>
                            </div>
                        </a>
                    </li>
                    <li class="fade-in">
                        <a href="<?= base_url('produk/2') ?>" class="group block overflow-hidden scale-up">
                            <img src="<?= base_url('images/basket.jpg') ?>" alt="Jersey Basket" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                            <div class="relative bg-white pt-3">
                                <h3 class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">Jersey Basket</h3>
                            </div>
                        </a>
                    </li>
                    <li class="fade-in">
                        <a href="<?= base_url('produk/3') ?>" class="group block overflow-hidden scale-up">
                            <img src="<?= base_url('images/bola.jpg') ?>" alt="Jersey Sepak Bola" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                            <div class="relative bg-white pt-3">
                                <h3 class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">Jersey Sepak Bola</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END PRODUK -->

    <!-- FOOTER -->
    <footer id="contact" class="bg-white-50 mt-16">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-center">
                <div class="flex justify-center text-teal-600 sm:justify-start">
                    <!-- Kontak Section -->
                    <div class="flex items-center">
                        <p class="text-center text-lg text-gray-500 lg:mt-0 lg:text-center">Kontak</p>
                        <img src="<?= base_url('images/WA.png') ?>" alt="WhatsApp or Phone" class="ml-4 w-6 h-6">
                        <span class="ml-2 text-lg text-gray-500">+62 813-1384-4675</span>
                    </div>
                </div>
            </div>
            <p class="mt-4 text-center text-lg text-gray-500 lg:mt-0 lg:text-center">Hak Cipta &copy; 2025 Toko Jersey YF. Semua hak dilindungi undang-undang.</p>
        </div>
    </footer>
    <!-- END FOOTER -->
</body>

</html>