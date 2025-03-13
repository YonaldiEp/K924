<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'deskripsi', 'harga', 'gambar', 'kategori', 'stok', 'ukuran', 'kelas'];

    public function getAllProduk()
    {
        return $this->findAll();
    }
}
