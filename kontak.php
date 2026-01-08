<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak | ELIT Information Technology</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-gray-300 scroll-smooth">

<!-- NAVBAR -->
<nav class="fixed top-0 w-full bg-black border-b border-yellow-500 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <div class="flex items-center gap-4">
      <img src="logo.png.jpeg" class="h-10" alt="ELIT">
      <span class="text-yellow-500 font-bold"> Elion Information Technology ( ELIT )</span>
    </div>
    <ul class="hidden md:flex gap-6 text-sm">
      <li><a href="home.php" class="hover:text-yellow-500">Home</a></li>
      <li><a href="tentang.php" class="hover:text-yellow-500">Tentang Kami</a></li>
      <li><a href="layanan.php" class="hover:text-yellow-500">Layanan</a></li>
      <li><a href="kontak.php" class="text-yellow-500">Kontak</a></li>
      <li><a href="faq.php" class="hover:text-yellow-500">FAQ</a></li>
    </ul>
  </div>
</nav>

<!-- HEADER -->
<section class="pt-32 pb-20 bg-neutral-900">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h1 class="text-4xl font-bold text-yellow-500 mb-4">Hubungi Kami</h1>
    <p>
      Silakan hubungi ELIT Information Technology melalui informasi di bawah ini
      atau kirim pesan langsung melalui form kontak.
    </p>
  </div>
</section>

<!-- INFO KONTAK -->
<section class="py-20">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">

    <div class="border border-yellow-500 p-6 rounded-xl">
      <p class="text-4xl mb-3 text-yellow-500">📱</p>
      <h3 class="font-semibold mb-2">WhatsApp</h3>
      <a href="https://wa.me/6284321897399" target="_blank"
         class="text-yellow-500 hover:underline">
        +62 843-2189-7399
      </a>
    </div>

    <div class="border border-yellow-500 p-6 rounded-xl">
      <p class="text-4xl mb-3 text-yellow-500">✉️</p>
      <h3 class="font-semibold mb-2">Email</h3>
      <a href="mailto:elit.information@gmail.com"
         class="text-yellow-500 hover:underline">
        elit.information@gmail.com
      </a>
    </div>

    <div class="border border-yellow-500 p-6 rounded-xl">
      <p class="text-4xl mb-3 text-yellow-500">📍</p>
      <h3 class="font-semibold mb-2">Alamat</h3>
      <p class="text-sm">
        Sumedang, Jawa Barat<br>
        Indonesia
      </p>
    </div>

  </div>
</section>

<!-- TOMBOL KE FORM -->
<section class="bg-neutral-900 py-20">
  <div class="max-w-5xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-yellow-500 mb-6">
      Kirim Pesan ke Kami
    </h2>

    <p class="mb-10 text-gray-400">
      Klik tombol di bawah untuk mengirim pesan langsung ke tim kami.
    </p>

   <a href="https://wa.me/6284321897399?text=Halo%20ELIT%20Information%20Technology,%20saya%20ingin%20konsultasi."
   target="_blank"
   class="inline-block bg-yellow-500 text-black px-10 py-4 rounded-xl font-semibold
          hover:bg-yellow-400 transition">
  Kirim Pesan via WhatsApp
</a>
  </div>
</section>

<!-- FOOTER -->
<footer class="py-6 text-center text-sm text-gray-500 border-t border-yellow-500">
  © 2025 Elion Information Technology
</footer>

</body>
</html>