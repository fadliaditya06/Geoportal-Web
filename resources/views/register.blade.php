<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - Geoportal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    /* Logo animation */
    @keyframes logo-bounce-rotate {
      0%, 100% { transform: scale(1) rotate(0deg); }
      50% { transform: scale(1.05) rotate(10deg); }
    }

    /* Animasi fade-in */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeIn 0.8s ease forwards;
    }
  </style>
</head>
<body class="bg-gradient-to-b from-[#64C38F] via-[#B0E1C6] to-[#FBFFFC] min-h-screen flex items-center justify-center p-6">
  <div class="max-w-5xl w-full bg-white rounded-3xl shadow-lg overflow-hidden flex flex-col md:flex-row fade-in">

    <!-- Logo Kiri -->
    <div class="hidden md:flex md:w-1/2 flex-col items-center justify-center bg-gradient-to-b from-[#64C38F] via-[#B0E1C6] to-[#FBFFFC] px-10 py-16">
      <img src="images/logo-geoportal.png" alt="Logo Geoportal"
        class="w-[500px] h-auto"
        style="animation: logo-bounce-rotate 4s ease-in-out infinite;" />
    </div>

    <!-- Form Register -->
    <div class="w-full md:w-1/2 p-10">
      <h1 class="text-3xl font-semibold text-[#358666] mb-8 text-center">Daftar</h1>

      <form class="space-y-6" action="/register" method="POST">
        <!-- Pilih Peran -->
        <div class="relative">
          <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
            <i class="fa-solid fa-user"></i>
          </span>
          <select name="role" required
            class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition">
            <option value="" disabled selected>Pilih Peran</option>
            <option value="Pengguna">Pengguna</option>
            <option value="Admin">Admin</option>
          </select>
        </div>

        <!-- Email -->
        <div class="relative">
          <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
            <i class="fa-solid fa-envelope"></i>
          </span>
          <input type="email" name="email" placeholder="Email" required
            class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
        </div>

        <!-- Nama Lengkap -->
        <div class="relative">
          <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
            <i class="fa-solid fa-id-card"></i>
          </span>
          <input type="text" name="nama" placeholder="Nama Lengkap" required
            class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
        </div>

        <!-- Alamat -->
        <div class="relative">
          <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
            <i class="fa-solid fa-location-dot"></i>
          </span>
          <input type="text" name="alamat" placeholder="Alamat" required
            class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
        </div>

        <!-- Kata Sandi -->
        <div class="relative">
          <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
            <i class="fa-solid fa-lock"></i>
          </span>
          <input type="password" name="password" placeholder="Kata Sandi" required minlength="6"
            class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
        </div>

        <!-- Konfirmasi Kata Sandi -->
        <div class="relative">
          <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
            <i class="fa-solid fa-lock"></i>
          </span>
          <input type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required minlength="6"
            class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
        </div>

        <!-- Tombol Daftar -->
        <div class="flex justify-center">
          <button type="submit"
            class="font-normal px-12 py-3 text-[#358666] border border-[#358666] rounded-full shadow-sm
                   hover:bg-[#358666] hover:text-white hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
            Daftar
          </button>
        </div>
      </form>

      <!-- Link ke login -->
      <div class="mt-6 text-center text-sm">
        Sudah punya akun?
        <a href="/login" class="text-[#358666] font-semibold hover:underline">Login di sini</a>
      </div>
    </div>
  </div>
</body>
</html>
