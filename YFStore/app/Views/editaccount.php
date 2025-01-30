<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Akun</title>
</head>

<body>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-blue-600 sm:text-3xl">Edit Akun Anda</h1>
            <p class="mx-auto mt-4 max-w-md text-center text-gray-500">Perbarui informasi akun Anda.</p>
            <form id="edit-account-form" action="/editaccount" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                <p class="text-center text-lg font-medium">Edit Informasi Akun</p>
                <?php if (session()->getFlashdata('errors')) : ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                        <strong class="font-bold">Ada yang salah!</strong>
                        <span class="block sm:inline">
                            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </span>
                    </div>
                <?php endif ?>
                <div>
                    <label for="name" class="sr-only">Nama</label>
                    <input type="text" id="name" name="name"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Nama"
                        value="<?= $user['name'] ?>" required>
                </div>
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Email"
                        value="<?= $user['email'] ?>" required>
                </div>
                <div>
                    <label for="password" class="sr-only">Password Baru</label>
                    <input type="password" id="password" name="password"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Password Baru" required>
                </div>
                <div>
                    <label for="confirm-password" class="sr-only">Konfirmasi Password Baru</label>
                    <input type="password" id="confirm-password" name="confirm-password"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Konfirmasi Password Baru" required>
                </div>
                <button type="submit" class="block w-full rounded-lg bg-blue-600 px-5 py-3 text-sm font-medium text-white">
                    Simpan Perubahan
                </button>
                <p class="text-center text-sm text-gray-500">
                    <a href="/deleteaccount" class="text-red-600 underline">Hapus Akun</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>