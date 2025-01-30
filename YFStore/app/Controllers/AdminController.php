<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $model = new ProdukModel();
        $data['produks'] = $model->getAllProduk();
        return view('admin/index', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $model = new ProdukModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $this->uploadImage(),
            'kategori' => ucwords(strtolower($this->request->getPost('kategori'))), // Konsistensi kategori
            'stok' => $this->request->getPost('stok'),
            'ukuran' => $this->request->getPost('ukuran')
        ];
        $model->save($data);
        return redirect()->to('/admin')->with('success', 'Produk berhasil ditambahkan');
    }

    public function delete($id)
    {
        $model = new ProdukModel();
        $model->delete($id);
        return redirect()->to('/admin')->with('success', 'Produk berhasil dihapus');
    }

    private function uploadImage()
    {
        $imageFile = $this->request->getFile('gambar');
        if ($imageFile->isValid() && !$imageFile->hasMoved()) {
            $originalName = $imageFile->getName();
            $imageFile->move(ROOTPATH . 'public/uploads', $originalName);
            return $originalName;
        }
        return null;
    }
}
