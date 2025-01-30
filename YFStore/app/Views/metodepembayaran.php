<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto p-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Pilih Metode Pembayaran</h2>
            <p class="text-gray-600 mb-6">Silakan pilih metode pembayaran yang Anda inginkan untuk melanjutkan transaksi.</p>

            <!-- Dropdown Form -->
            <form action="#" method="post" id="payment-form">
                <input type="hidden" name="user_id" value="<?= $id_pembeli; ?>">
                <input type="hidden" name="total_amount" value="<?= $total_amount; ?>">
                <input type="hidden" name="payment_status" value="Pending">

                <div>
                    <label for="payment_method" class="block text-gray-700 font-medium mb-2">Metode Pembayaran</label>
                    <select id="payment_method" name="payment_method" class="w-full p-2 border rounded-md" required>
                        <option value="" disabled selected>Pilih metode pembayaran</option>
                        <option value="Transfer Bank - BRI">Transfer Bank - BRI</option>
                        <option value="DANA">DANA</option>
                    </select>
                </div>

                <!-- Disclaimer -->
                <p class="text-gray-500 text-sm mt-6">Harap periksa kembali metode pembayaran sebelum melanjutkan untuk memastikan kenyamanan Anda.</p>

                <!-- Buttons -->
                <div class="flex justify-end items-end">
                    <a href="<?= base_url('keranjang') ?>" class="mr-3 mt-6 py-2 px-4 bg-red-600 text-white font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">Cancel</a>

                    <button type="button" onclick="redirectToPayment()" class="mt-6 py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Lanjutkan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function redirectToPayment() {
            const paymentMethod = document.getElementById('payment_method').value;
            let url = '';

            if (paymentMethod === 'Transfer Bank - BRI') {
                url = 'bri';
            } else if (paymentMethod === 'DANA') {
                url = 'dana';
            }

            if (url) {
                window.location.href = url;
            } else {
                alert('Silakan pilih metode pembayaran.');
            }
        }
    </script>
</body>

</html>