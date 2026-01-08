<?php
session_start();

if (!isset($_SESSION['pesan'])) {
  $_SESSION['pesan'] = [];
}

if (isset($_POST['kirim'])) {
  $_SESSION['pesan'][] = [
    'nama' => $_POST['nama'],
    'email' => $_POST['email'],
    'subjek' => $_POST['subjek'],
    'isi' => $_POST['pesan'],
    'balasan' => ''
  ];

  $sukses = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak | ELIT</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-gray-300">

<section class="py-16 bg-neutral-900 text-center">
  <h1 class="text-4xl font-bold text-yellow-500">Kirim Pesan</h1>
  <p class="text-gray-400 mt-2">Silakan hubungi kami melalui form di bawah</p>
</section>

<section class="py-12 max-w-3xl mx-auto px-6">
  <?php if (!empty($sukses)): ?>
    <div class="mb-6 bg-green-600 text-black p-3 rounded">
      Pesan berhasil dikirim ✅
    </div>
  <?php endif; ?>

  <form method="POST" class="grid gap-4">
    <input name="nama" required placeholder="Nama Lengkap"
      class="bg-black border border-yellow-500 p-3 rounded">

    <input name="email" type="email" required placeholder="Email"
      class="bg-black border border-yellow-500 p-3 rounded">

    <input name="subjek" required placeholder="Subjek"
      class="bg-black border border-yellow-500 p-3 rounded">

    <textarea name="pesan" required rows="5" placeholder="Pesan"
      class="bg-black border border-yellow-500 p-3 rounded"></textarea>

    <button name="kirim"
      class="bg-yellow-500 text-black py-3 rounded font-semibold hover:bg-yellow-400">
      Kirim Pesan
    </button>
  </form>
</section>

<footer class="py-6 text-center text-sm text-gray-500">
  © 2025 ELIT Information Technology
</footer>

</body>
</html>