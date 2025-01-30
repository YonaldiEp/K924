<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($produk['nama']) ?> - Deskripsi Jersey Voli</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background: linear-gradient(to right, #f9f9fa, #a1c4ec);
            color: #333;
        }

        .jersey-container {
            display: grid;
            grid-template-columns: auto 1fr;
            align-items: center;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .jersey-container:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .jersey-image {
            width: 150px;
            height: auto;
            margin-right: 20px;
            border-radius: 10px;
            border: 2px solid #ddd;
        }

        .jersey-details {
            padding-left: 20px;
        }

        .jersey-title {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #444;
        }

        .jersey-description {
            font-size: 18px;
            margin-bottom: 15px;
            color: #666;
        }

        .jersey-size {
            margin-bottom: 20px;
        }

        .buttons {
            display: flex;
            gap: 15px;
        }

        .button {
            padding: 12px 24px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button.dashboard {
            background-color: #6c757d;
        }

        .button.dashboard:hover {
            background-color: #5a6268;
        }
    </style>
</head>

<body>
    <a href="<?= base_url('/dashboard') ?>" class="button dashboard">Kembali</a>
    <div class="jersey-container">
        <img src="<?= base_url('uploads/' . $produk['gambar']) ?>" alt="<?= esc($produk['nama']) ?>" class="jersey-image">
        <div class="jersey-details">
            <div class="jersey-title"><?= esc($produk['nama']) ?></div>
            <div class="jersey-description"><?= esc($produk['deskripsi']) ?></div>
            <div class="jersey-size">
                <label for="size">Ukuran:</label>
                <select id="size" name="size">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
            <div class="buttons">
                <form action="<?= base_url('produk/addToCart/' . $produk['id']) ?>" method="post">
                    <input type="hidden" name="ukuran" id="hidden_size" value="">
                    <button type="submit" class="button cart">Tambah Ke Keranjang</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.button.cart').addEventListener('click', function() {
            var ukuran = document.getElementById('size').value;
            document.querySelector('#hidden_size').value = ukuran;
        });
    </script>
</body>

</html>