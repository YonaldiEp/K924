<?php

namespace App\Controllers;

use App\Models\PaymentModel;
use CodeIgniter\Controller;

class PaymentController extends Controller
{
    public function paymentPage()
    {
        $id_pembeli = 1; // Ganti dengan data aktual
        $total_amount = 100000; // Ganti dengan data aktual

        $data = [
            'id_pembeli' => $id_pembeli,
            'total_amount' => $total_amount
        ];

        return view('pembayaran', $data); // Mengarah ke file view pembayaran.php
    }

    public function paymentMethodPage()
    {
        $id_pembeli = 1; // Ganti dengan data aktual
        $total_amount = 100000; // Ganti dengan data aktual

        $data = [
            'id_pembeli' => $id_pembeli,
            'total_amount' => $total_amount
        ];

        return view('metodepembayaran', $data); // Mengarah ke file view metodepembayaran.php
    }

    public function paymentBriPage()
    {
        $id_pembeli = 1; // Ganti dengan data aktual
        $total_amount = 100000; // Ganti dengan data aktual

        $data = [
            'id_pembeli' => $id_pembeli,
            'total_amount' => $total_amount
        ];

        return view('bri', $data); // Mengarah ke file view bri.php
    }

    public function paymentDanaPage()
    {
        $id_pembeli = 1; // Ganti dengan data aktual
        $total_amount = 100000; // Ganti dengan data aktual

        $data = [
            'id_pembeli' => $id_pembeli,
            'total_amount' => $total_amount
        ];

        return view('dana', $data); // Mengarah ke file view dana.php
    }

    public function store()
    {
        $paymentModel = new PaymentModel();
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'total_amount' => $this->request->getPost('total_amount'),
            'payment_method' => $this->request->getPost('payment_method'),
            'payment_status' => $this->request->getPost('payment_status')
        ];
        $paymentModel->save($data);

        return redirect()->to('/payments');
    }
}
