<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background: linear-gradient(to right, #f9f9fa, #a1c4ec);
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
        }

        .btn-hapus {
            background-color: #ff4d4d;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-hapus:hover {
            background-color: #ff1a1a;
        }

        .btn-logout {
            background-color: #ff4d4d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .btn-logout:hover {
            background-color: #ff1a1a;
        }

        .btn-tambah {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-tambah:hover {
            background-color: #0056b3;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>
        <div class="button-container">
            <div>
                <button class="btn-logout" onclick="window.location.href='<?= base_url('logout') ?>'">Keluar</button>
                <a href="<?= base_url('admin/create') ?>" class="btn-tambah">Tambah Produk</a>
            </div>
        </div>

        <div class="table-container mt-2">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produks as $produk): ?>
                        <tr>
                            <td><?= $produk['nama'] ?></td>
                            <td><?= $produk['deskripsi'] ?></td>
                            <td>Rp <?= number_format($produk['harga'], 2, ',', '.') ?></td>
                            <td><img src="<?= base_url('uploads/' . $produk['gambar']) ?>" alt="<?= $produk['nama'] ?>" width="100"></td>
                            <td><?= $produk['kategori'] ?></td>
                            <td><?= $produk['kelas'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/delete/' . $produk['id']) ?>" class="btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>