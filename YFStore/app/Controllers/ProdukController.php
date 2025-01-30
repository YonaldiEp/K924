<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KeranjangModel; // Pastikan ini diimpor dengan benar
use CodeIgniter\Controller;

class ProdukController extends Controller
{
    public function view($id = null)
    {
        $model = new ProdukModel();
        $data['produk'] = $model->find($id);

        if ($data['produk']) {
            $viewFile = 'produk/' . $id;
            return view($viewFile, $data);
        } else {
            return redirect()->to('/')->with('error', 'Produk tidak ditemukan.');
        }
    }

    public function addToCart($produk_id)
    {
        $keranjangModel = new KeranjangModel();
        $produkModel = new ProdukModel();
        $produk = $produkModel->find($produk_id);

        $user_id = session()->get('id');
        if (!$user_id) {
            return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        if ($produk) {
            $ukuran = $this->request->getPost('ukuran');
            $keranjangModel->save([
                'user_id' => $user_id,
                'produk_id' => $produk_id,
                'jumlah' => 1,
                'total_harga' => $produk['harga'],
                'ukuran' => $ukuran
            ]);

            return redirect()->to('/keranjang');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
    }
}
