<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign In</title>
</head>

<body>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-blue-600 sm:text-3xl">Selamat Datang Kembali!</h1>
            <p class="mx-auto mt-4 max-w-md text-center text-gray-500">Masuk ke akun Anda untuk membeli produk kami.</p>
            <form id="sign-in-form" action="/signin" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                <p class="text-center text-lg font-medium">Sign In Ke Akun Anda</p>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                        <strong class="font-bold">Ada yang salah!</strong>
                        <span class="block sm:inline">
                            <?= session()->getFlashdata('error') ?>
                        </span>
                    </div>
                <?php endif ?>
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Enter email" required>
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Enter password" required>
                </div>
                <button type="submit" class="block w-full rounded-lg bg-blue-600 px-5 py-3 text-sm font-medium text-white">Sign In</button>
            </form>
        </div>
    </div>
</body>

</html>