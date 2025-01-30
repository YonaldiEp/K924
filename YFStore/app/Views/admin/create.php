<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Tambah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background: linear-gradient(to right, #f9f9fa, #a1c4ec);
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-2xl font-bold mt-8 mb-4">Tambah Produk Baru</h1>
        <a href="<?= base_url('admin') ?>" class="bg-gray-500 text-white py-2 px-4 rounded">Kembali</a>
        <form action="<?= base_url('admin/store') ?>" method="post" enctype="multipart/form-data" class="mt-4">
            <div class="form-group">
                <label for="nama">Nama Produk:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar Produk:</label>
                <input type="file" id="gambar" name="gambar" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <select id="kategori" name="kategori" required>
                    <option value="Voli">Jersey Voli</option>
                    <option value="Basket">Jersey Basket</option>
                    <option value="Sepak Bola">Jersey Sepak Bola</option>
                </select>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" id="stok" name="stok" required>
            </div>
            <div class="form-group">
                <label for="ukuran">Ukuran:</label>
                <input type="text" id="ukuran" name="ukuran" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Tambah Produk</button>
        </form>
    </div>
</body>

</html>