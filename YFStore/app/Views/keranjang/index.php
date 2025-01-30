<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Keranjang Belanja</title>
    <style>
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center fade-in">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Keranjang Belanja</h2>
                <p class="mx-auto mt-4 max-w-md text-gray-500">
                    Berikut adalah daftar produk yang ada di keranjang belanja Anda.
                </p>
            </header>

            <!-- Daftar Produk di Keranjang -->
            <div class="flex justify-center">
                <ul class="mt-8 grid gap-4 sm:grid-cols-1 lg:grid-cols-1">
                    <?php foreach ($keranjang as $item): ?>
                        <li class="bg-white p-4 shadow-lg rounded-lg fade-in">
                            <div class="flex items-center">
                                <img src="<?= base_url('images/' . $item['gambar']) ?>" alt="<?= $item['nama_produk'] ?>" class="h-24 w-24 object-cover" />
                                <div class="ml-4">
                                    <h3 class="text-xl text-gray-700"><?= $item['nama_produk'] ?></h3>
                                    <p class="text-gray-500">Harga: Rp <span id="harga_<?= $item['id'] ?>"><?= number_format($item['harga'], 2) ?></span></p>
                                    <p class="text-gray-500">Ukuran: <?= $item['ukuran'] ?></p>
                                    <div class="flex items-center mt-2">
                                        <label for="quantity_<?= $item['id'] ?>" class="mr-2">Kuantitas:</label>
                                        <input type="number" id="quantity_<?= $item['id'] ?>" name="quantity_<?= $item['id'] ?>" class="w-16 text-center border-gray-200 rounded-lg p-2" value="<?= $item['jumlah'] ?>" min="1" onchange="updateTotal(<?= $item['id'] ?>)" />
                                    </div>
                                    <a href="<?= base_url('keranjang/delete/' . $item['id']) ?>" class="mt-2 bg-red-600 text-white font-medium rounded-lg px-4 py-2" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- END Daftar Produk di Keranjang -->

            <!-- Total Harga dan Tombol Kembali -->
            <div class="mt-8 flex justify-between items-center">
                <a href="<?= base_url('/dashboard') ?>" class="bg-gray-600 text-white font-medium rounded-lg px-4 py-2">Kembali ke Beranda</a>
                <div class="w-full max-w-xs text-right">
                    <p class="text-gray-700 text-xl">Total Harga: Rp <span id="total_harga"><?= number_format($total_harga, 2) ?></span></p>
                    <!-- views/keranjang.php -->
                    <button onclick="location.href='<?= base_url('metodepembayaran') ?>'" class="block w-full mt-4 bg-blue-600 text-white font-medium rounded-lg p-3">Lanjutkan ke Pembayaran</button>
                </div>
            </div>
            <!-- END Total Harga dan Tombol Kembali -->
        </div>
    </section>

    <script>
        function updateTotal(id) {
            var quantityElement = document.getElementById('quantity_' + id);
            var jumlah = parseInt(quantityElement.value);
            var totalHargaElement = document.getElementById('total_harga');

            var currentTotal = 0;
            document.querySelectorAll('input[type=number]').forEach(function(el) {
                var qty = parseInt(el.value);
                var priceElement = document.getElementById('harga_' + el.id.split('_')[1]);
                var price = parseFloat(priceElement.innerText.replace(/[^0-9.-]+/g, ""));
                currentTotal += qty * price;
            });

            totalHargaElement.innerText = currentTotal.toLocaleString('id-ID', {
                style: 'decimal',
                minimumFractionDigits: 2
            });
        }
    </script>
</body>

</html>