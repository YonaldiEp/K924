<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KeranjangModel;
use CodeIgniter\Controller;

class ProdukController extends Controller
{
    public function view($id = null)
    {
        $model = new ProdukModel();
        $data['produk'] = $model->getAllProduk();

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

        $id = session()->get('id');
        if (!$id) {
            return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        if ($produk) {
            $ukuran = $this->request->getPost('ukuran');
            $kelas = $this->request->getPost('kelas'); // Retrieve the class from the form data

            $keranjangModel->save([
                'id' => $id,
                'produk_id' => $produk_id,
                'jumlah' => 1,
                'total_harga' => $produk['harga'],
                'ukuran' => $ukuran,
                'kelas' => $kelas
            ]);

            return redirect()->to('/keranjang');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
    }
}
