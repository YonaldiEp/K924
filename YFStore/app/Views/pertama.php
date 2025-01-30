<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Toko Jersey YF</title>
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
                        <a href="/" class="inline-block">
                            <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Toko Jersey YF</h1>
                        </a>
                        <p class="mt-1.5 text-xl text-gray-500">Toko Jersey Anda</p>
                    </div>
                </div>
                <div class="flex items-center gap-2 ml-auto">
                    <a href="/">
                        <button class="inline-block bg-white px-3 py-2 text-sm font-medium text-gray-900 transition hover:text-gray-700 focus:outline-none focus:ring">
                            Beranda
                        </button>
                    </a>
                    <a href="#about-us">
                        <button class="inline-block bg-white px-3 py-2 text-sm font-medium text-gray-900 transition hover:text-gray-700 focus:outline-none focus:ring">
                            Tentang Kami
                        </button>
                    </a>
                    <div class="relative inline-block text-left dropdown">
                        <button class="inline-block bg-white px-3 py-2 text-sm font-medium text-gray-900 transition hover:text-gray-700 focus:outline-none focus:ring">
                            Produk
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline-block ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a 1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-content">
                            <a href="voli.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="return checkLogin()">Jersey Voli</a>
                            <a href="basket.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="return checkLogin()">Jersey Basket</a>
                            <a href="sepakbola.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="return checkLogin()">Jersey Sepak Bola</a>
                        </div>
                    </div>
                    <a href="#contact">
                        <button class="inline-block bg-white px-3 py-2 text-sm font-medium text-gray-900 transition hover:text-gray-700 focus:outline-none focus:ring">
                            Kontak
                        </button>
                    </a>
                    <a href="/signup">
                        <button class="inline-block rounded bg-green-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-green-700 focus:outline-none focus:ring">
                            Daftar
                        </button>
                    </a>
                    <a href="/signin">
                        <button class="inline-block rounded bg-blue-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-blue-700 focus:outline-none focus:ring">
                            Masuk
                        </button>
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
                        href="#" onclick="return checkLogin()">
                        Belanja Sekarang
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
            <div class="max-w-3xl mx-auto text-center"> <!-- Tambahkan text-center di sini -->
                <p class="text-lg text-gray-700 leading-relaxed">
                    Selamat datang di Toko Jersey YF, destinasi utama untuk para pecinta olahraga yang mencari jersey
                    berkualitas tinggi. Kami bangga menghadirkan berbagai pilihan jersey, mulai dari jersey voli,
                    basket, hingga sepak bola, yang dirancang untuk memenuhi kebutuhan atletik Anda. Di Toko Jersey YF,
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
                    Pilih Cabang olahraga yang sesuai
                </p>
            </header>
            <div class="flex justify-center">
                <ul class="mt-8 grid gap-4 sm:grid-cols-3 lg:grid-cols-3">
                    <li class="fade-in">
                        <a href="voli.html" class="group block overflow-hidden scale-up" onclick="return checkLogin()">
                            <img src="<?= base_url('images/voli.jpg') ?>" alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                            <div class="relative bg-white pt-3">
                                <h3 class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">Jersey Voli</h3>
                                <p class="mt-2"><span class="sr-only">Regular Price</span><span class="tracking-wider text-gray-900"></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="fade-in">
                        <a href="basket.html" class="group block overflow-hidden scale-up" onclick="return checkLogin()">
                            <img src="<?= base_url('images/basket.jpg') ?>" alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                            <div class="relative bg-white pt-3">
                                <h3 class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">Jersey Basket</h3>
                                <p class="mt-2"><span class="sr-only">Regular Price</span><span class="tracking-wider text-gray-900"></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="fade-in">
                        <a href="sepakbola.html" class="group block overflow-hidden scale-up" onclick="return checkLogin()">
                            <img src="<?= base_url('images/bola.jpg') ?>" alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                            <div class="relative bg-white pt-3">
                                <h3 class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">Jersey Sepak Bola</h3>
                                <p class="mt-2"><span class="sr-only">Regular Price</span><span class="tracking-wider text-gray-900"></span></p>
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

    <script>
        function checkLogin() {
            <?php if (!session()->get('isLoggedIn')): ?>
                alert('Anda harus Daftar atau Masuk ke Akun Anda terlebih dahulu untuk melihat produk.');
                return false;
            <?php else: ?>
                return true;
            <?php endif; ?>
        }
    </script>
</body>

</html>