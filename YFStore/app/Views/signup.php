<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up</title>
</head>

<body>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-blue-600 sm:text-3xl">Selamat Datang!</h1>
            <p class="mx-auto mt-4 max-w-md text-center text-gray-500">Buat akun untuk membeli Produk Kami.</p>
            <form id="sign-up-form" action="/signup" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                <p class="text-center text-lg font-medium">Silahkan Buat Akun</p>
                <div>
                    <label for="name" class="sr-only">Nama</label>
                    <input type="text" id="name" name="name" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Nama" required>
                </div>
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Email" required>
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Password" required>
                </div>
                <button type="submit" class="block w-full rounded-lg bg-blue-600 px-5 py-3 text-sm font-medium text-white">Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>