<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register | Geoportal</title>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/images/favicon/site.webmanifest">
  <meta name="theme-color" content="#ffffff">

  <!-- Tailwind & Fonts -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

  <!-- Style -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    @keyframes logo-bounce-rotate {
      0%, 100% {
        transform: scale(1) rotate(0deg);
      }

      50% {
        transform: scale(1.05) rotate(10deg);
      }
    }

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
      <img src="images/logo/logo-geoportal.png" alt="Logo Geoportal" class="w-[500px] h-auto" style="animation: logo-bounce-rotate 4s ease-in-out infinite;" />
    </div>

    <!-- Form Register -->
    <div class="w-full md:w-1/2 p-10">
      <h1 class="text-3xl font-semibold text-[#358666] mb-8 text-center">Daftar</h1>

      <form class="space-y-6" action="/register" method="POST">

        <!-- Pilih Peran -->
        <div>
          <label for="role" class="block mb-2 font-medium text-[#358666]">Peran</label>
          <div class="relative">
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
              <i class="fa-solid fa-user"></i>
            </span>
            <select id="role" name="role" required
              class="w-full bg-[#B0E1C6] rounded-full pl-12 pr-10 py-3 text-black border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] appearance-none">
              <option value="" disabled selected>Pilih Peran</option>
              <option value="Pengguna" {{ old('role') == 'Pengguna' ? 'selected' : '' }}>Pengguna</option>
              <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
              <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
              </svg>
            </div>
          </div>
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block mb-2 font-medium text-[#358666]">Email</label>
          <div class="relative">
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
              <i class="fa-solid fa-envelope"></i>
            </span>
            <input id="email" type="email" name="email" placeholder="Email" required
              class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
          </div>
        </div>

        <!-- Nama Lengkap -->
        <div>
          <label for="nama" class="block mb-2 font-medium text-[#358666]">Nama Lengkap</label>
          <div class="relative">
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
              <i class="fa-solid fa-id-card"></i>
            </span>
            <input id="nama" type="text" name="nama" placeholder="Nama Lengkap" required
              class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
          </div>
        </div>

        <!-- Alamat -->
        <div>
          <label for="alamat" class="block mb-2 font-medium text-[#358666]">Alamat</label>
          <div class="relative">
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
              <i class="fa-solid fa-location-dot"></i>
            </span>
            <input id="alamat" type="text" name="alamat" placeholder="Alamat" required
              class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
          </div>
        </div>

        <!-- Kata Sandi -->
        <div>
          <label for="password" class="block mb-2 font-medium text-[#358666]">Kata Sandi</label>
          <div class="relative">
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
              <i class="fa-solid fa-lock"></i>
            </span>
            <input id="password" type="password" name="password" placeholder="Kata Sandi" required
              class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
          </div>
        </div>

        <!-- Konfirmasi Kata Sandi -->
        <div>
          <label for="password_confirmation" class="block mb-2 font-medium text-[#358666]">Konfirmasi Kata Sandi</label>
          <div class="relative">
            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
              <i class="fa-solid fa-lock"></i>
            </span>
            <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required"
              class="w-full rounded-3xl bg-[#B0E1C6] px-12 py-3 shadow-md border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666] transition" />
          </div>
        </div>

        <!-- Tombol Daftar -->
        <div class="flex justify-center">
          <button type="submit"
            class="font-normal px-12 py-3 text-[#358666] border border-[#358666] rounded-full shadow-sm hover:bg-[#358666] hover:text-white hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
            Daftar
          </button>
        </div>
      </form>

      <!-- Link ke Login -->
      <div class="mt-6 text-center text-sm">
        Sudah punya akun?
        <a href="/login" class="text-[#358666] font-medium hover:underline">Login di sini</a>
      </div>
    </div>
  </div>

</body>

</html>
