<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = 'keranjang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'produk_id', 'jumlah', 'total_harga', 'ukuran'];
}
