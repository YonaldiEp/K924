<?php

namespace App\Controllers;

use App\Models\KeranjangModel;
use App\Models\ProdukModel;
use CodeIgniter\Controller;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjangModel = new KeranjangModel();
        $produkModel = new ProdukModel();
        $keranjang = $keranjangModel->where('user_id', session()->get('id'))->findAll();

        $keranjangItems = [];

        foreach ($keranjang as $item) {
            $produk = $produkModel->find($item['produk_id']);
            if ($produk) {
                $item['nama_produk'] = $produk['nama'];
                $item['gambar'] = $produk['gambar'];
                $item['harga'] = $produk['harga'];
                $item['total_harga'] = $item['jumlah'] * $produk['harga'];
                $item['ukuran'] = $item['ukuran'];
                $keranjangItems[] = $item;
            }
        }

        $total_harga = array_sum(array_column($keranjangItems, 'total_harga'));

        $data = [
            'keranjang' => $keranjangItems,
            'total_harga' => $total_harga
        ];

        echo view('keranjang/index', $data);
    }

    public function delete($id)
    {
        $model = new KeranjangModel();
        $model->delete($id);
        return redirect()->to('/keranjang');
    }
}
