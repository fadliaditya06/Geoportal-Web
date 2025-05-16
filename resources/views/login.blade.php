<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | Geoportal</title>

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

        select {
            color: #6b7280;
        }

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

<body
    class="min-h-screen bg-gradient-to-b from-[#64C38F] via-[#B0E1C6] to-[#FBFFFC] flex items-center justify-center p-6">

    <div
        class="bg-white rounded-3xl shadow-2xl max-w-5xl w-full flex flex-col md:flex-row overflow-hidden
        fade-in hover:shadow-4xl hover:scale-[1.02] transition-transform duration-500 ease-in-out">

        <!-- Gambar Kiri -->
        <div class="hidden md:flex md:w-1/2 bg-[#B0E1C6] items-center justify-center p-10">
            <img src="{{ asset('images/icon/login.png') }}" alt="Login Illustration" class="w-3/4" />
        </div>

        <!-- Form Kanan -->
        <div class="w-full md:w-1/2 p-8">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-[#358666]">Selamat Datang Kembali!</h1>
                <p class="text-gray-700 mt-2">Login ke Akun Anda!</p>
            </div>

            <!-- Form Login -->
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Pilih Peran -->
                <div>
                    <label for="role" class="block mb-2 font-medium text-[#358666]">Peran</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
                                <i class="fa-solid fa-user"></i>
                            </span>
                        </div>
                        <select id="role" name="role" required
                            class="w-full bg-[#B0E1C6] rounded-full pl-12 pr-10 py-3 text-black border border-[#358666] 
                            focus:outline-none focus:ring-2 focus:ring-[#358666] appearance-none">
                            <option value="" disabled selected>Pilih Peran</option>
                            <option value="Pengguna" {{ old('role') == 'Pengguna' ? 'selected' : '' }}>Pengguna</option>
                            <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                            </svg>
                        </div>
                    </div>
                    @error('role')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block mb-2 font-medium text-[#358666]">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" required placeholder="Email"
                            value="{{ old('email') }}"
                            class="w-full bg-[#B0E1C6] rounded-full pl-12 pr-4 py-3 text-black border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666]" />
                    </div>
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block mb-2 font-medium text-[#358666]">Kata Sandi</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#358666]">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" required placeholder="Kata Sandi"
                            class="w-full bg-[#B0E1C6] rounded-full pl-12 pr-4 py-3 text-black border border-[#358666] focus:outline-none focus:ring-2 focus:ring-[#358666]" />
                    </div>
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

                <!-- Tombol Login -->
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
