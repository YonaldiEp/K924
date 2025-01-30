<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function signup()
    {
        return view('signup');
    }

    public function signupStore()
    {
        $model = new UserModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'user'
        ]);
        return redirect()->to('/signin');
    }

    public function signin()
    {
        return view('signin');
    }

    public function signinStore()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {

            session()->set([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
                'isLoggedIn' => true
            ]);


            if ($user['role'] === 'admin') {
                return redirect()->to('/admin');
            } else {
                return redirect()->to('/dashboard');
            }
        }


        return redirect()->back()->withInput()->with('error', 'Detail login tidak valid. Silakan coba lagi.');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }

    public function editAccount()
    {
        $model = new UserModel();
        $userId = session()->get('id');
        $data['user'] = $model->find($userId);
        return view('editaccount', $data);
    }

    public function updateAccount()
    {
        $model = new UserModel();
        $userId = session()->get('id');

        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email|max_length[255]',
            'password' => 'required|min_length[8]|max_length[255]',
            'confirm-password' => 'required|matches[password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        try {
            $model->update($userId, $data);

            return redirect()->to('/dashboard')->with('status', 'Account updated successfully');
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat mengupdate akun.');
        }
    }

    public function deleteAccount()
    {
        $model = new UserModel();
        $userId = session()->get('id');
        $model->delete($userId);

        session()->destroy();
        return redirect()->to('/');
    }
}
