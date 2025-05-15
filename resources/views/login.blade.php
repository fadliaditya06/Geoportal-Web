<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Geoportal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeSlide {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeSlide 0.8s ease-out both;
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-[#64C38F] via-[#B0E1C6] to-[#FBFFFC] flex items-center justify-center">

  <div
    class="bg-white rounded-3xl shadow-2xl max-w-5xl w-full flex flex-col md:flex-row overflow-hidden
           fade-in
           hover:shadow-4xl hover:scale-[1.02]
           transition-transform duration-500 ease-in-out"
  >

    <!-- Gambar kiri -->
    <div class="hidden md:flex md:w-1/2 bg-[#B0E1C6] items-center justify-center p-10">
      <img src="{{ asset('images/login.png') }}" alt="Login Illustration" class="w-3/4" />
    </div>

    <!-- Form kanan -->
    <div class="w-full md:w-1/2 p-8">
      <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-[#358666]">Selamat Datang Kembali!</h1>
        <p class="text-gray-700 mt-2">Login ke Akun Anda!</p>
      </div>

      <!-- Form Login -->
      <form action="{{ route('login') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Dropdown peran -->
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 0115 0" />
            </svg>
          </div>
          <select name="role" required
            class="w-full bg-[#B0E1C6] rounded-full pl-12 pr-4 py-3 text-black border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666]">
            <option value="" disabled selected>Pilih Peran</option>
            <option value="Pengguna">Pengguna</option>
            <option value="Admin">Admin</option>
          </select>
          @error('role')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Email -->
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25H4.5a2.25 2.25 0 01-2.25-2.25V6.75M3.75 6.75L12 12.75l8.25-6M3.75 6.75h16.5" />
            </svg>
          </div>
          <input type="email" name="email" required placeholder="Email" value="{{ old('email') }}"
            class="w-full bg-[#B0E1C6] rounded-full pl-12 pr-4 py-3 text-black border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666]" />
          @error('email')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Password -->
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 00-9 0v3.75m-2.25 0H18.75a.75.75 0 01.75.75v9a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75v-9a.75.75 0 01.75-.75z" />
            </svg>
          </div>
          <input type="password" name="password" required placeholder="Kata Sandi"
            class="w-full bg-[#B0E1C6] rounded-full pl-12 pr-4 py-3 text-black border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666]" />
          @error('password')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Ingat Saya -->
        <div class="flex items-center">
          <input id="remember" name="remember" type="checkbox"
            class="w-4 h-4 text-[#358666] border-gray-300 rounded focus:ring-[#358666]" />
          <label for="remember" class="ml-2 text-sm text-[#358666]">Ingat Saya</label>
        </div>

        <div class="flex justify-center">
          <button type="submit"
            class="inline-flex items-center justify-center px-12 py-3 text-[#358666] border border-[#358666] rounded-full shadow-sm
                   hover:bg-[#358666] hover:text-white hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
            Login
          </button>
        </div>

        <!-- Link Daftar -->
        <p class="text-center text-sm text-gray-600 mt-4">
          Belum memiliki akun?
          <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-medium">Daftar</a>
        </p>
      </form>
    </div>
  </div>

</body>
</html>
