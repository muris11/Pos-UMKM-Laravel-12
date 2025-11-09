@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden animate-gradient" style="background-size: 400% 400%;">
        
        <!-- Decorative Elements -->
        <div class="decorative absolute top-20 left-20 w-72 h-72 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float"></div>
        <div class="decorative absolute top-40 right-20 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float" style="animation-delay: 2s;"></div>
        <div class="decorative absolute -bottom-8 left-40 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float" style="animation-delay: 4s;"></div>

        <!-- WhatsApp Floating Button -->
        <div class="decorative fixed bottom-8 right-8 z-50 group animate-fade-in-up" style="animation-delay: 1s;">
            <a href="https://wa.me/6285773818846?text=Halo,%20saya%20tertarik%20dengan%20source%20code%20POS%20UMKM" 
               target="_blank"
               class="relative flex items-center gap-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white px-6 py-4 rounded-full shadow-2xl shadow-green-500/50 hover:shadow-green-500/70 hover:scale-110 active:scale-95 transition-all duration-300 animate-bounce-slow touch-manipulation">
                <!-- Ping Effect -->
                <span class="absolute -top-1 -right-1 flex h-4 w-4">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-4 w-4 bg-green-500"></span>
                </span>
                
                <!-- WhatsApp Icon -->
                <svg class="w-7 h-7 animate-wiggle" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                
                <!-- Text - Hidden on small screens, shown on hover -->
                <span class="hidden lg:block text-sm font-bold whitespace-nowrap">
                    Hubungi Kami
                </span>
            </a>
            
            <!-- Tooltip -->
            <div class="absolute bottom-full right-0 mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                <div class="relative bg-white/90 backdrop-blur-xl text-slate-700 text-sm font-semibold px-6 py-3 rounded-2xl shadow-2xl border border-white/20 whitespace-nowrap">
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-green-600 text-lg animate-pulse-slow">code</span>
                        <span>Tertarik dengan Source Code?</span>
                    </div>
                    <div class="absolute -bottom-2 right-8 w-4 h-4 bg-white/90 backdrop-blur-xl transform rotate-45 border-r border-b border-white/20"></div>
                </div>
            </div>
        </div>

        <!-- Login Card -->
        <div class="max-w-md w-full space-y-8 relative z-10" x-data="loginForm()">
            <!-- Card Container -->
            <div class="bg-white/80 backdrop-blur-2xl rounded-3xl shadow-2xl shadow-indigo-500/20 p-10 border border-white/20 animate-scale-in">
                
                <!-- Logo & Title -->
                <div class="text-center mb-8">
                    <div class="relative inline-block mb-6">
                        <!-- Glow Effect -->
                        <div class="decorative absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-3xl blur-2xl opacity-50 animate-pulse-slow"></div>
                        
                        <!-- Logo -->
                        <div class="relative bg-gradient-to-br from-indigo-500 via-purple-600 to-pink-500 p-6 rounded-3xl shadow-2xl transform hover:scale-110 hover:rotate-6 transition-all duration-500">
                            <img src="{{ asset('images/lg.png') }}" alt="{{ config('app.name') }} Logo" class="w-16 h-16 mx-auto" loading="lazy" decoding="async">
                        </div>
                    </div>
                    
                    <h2 class="text-4xl font-black bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent mb-3 animate-gradient" style="background-size: 200% auto;">
                        POS UMKM
                    </h2>
                    <p class="text-slate-600 font-semibold text-lg">
                        Selamat Datang
                    </p>
                    <p class="text-slate-500 text-sm mt-2">
                        Masuk untuk mengakses sistem
                    </p>
                </div>

                <!-- Login Form -->
                <form class="space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="hidden" name="remember" value="true">
                    
                    <!-- Email Field -->
                    <div class="group">
                        <label for="email" class="block text-sm font-bold text-slate-700 mb-2 flex items-center gap-2">
                            <span class="material-icons text-indigo-600 text-lg">email</span>
                            Email Address
                        </label>
                        <div class="relative">
                            <input id="email" 
                                   name="email" 
                                   type="email" 
                                   autocomplete="email" 
                                   required
                                   x-model="email"
                                   class="appearance-none relative block w-full px-5 py-4 border-2 border-slate-200 placeholder-slate-400 text-slate-900 rounded-2xl focus:outline-none focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-300 font-medium hover:border-indigo-300"
                                   placeholder="nama@email.com" 
                                   value="{{ old('email') }}">
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                <span class="material-icons text-slate-400 group-focus-within:text-indigo-600 transition-colors">
                                    alternate_email
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="group" x-data="{ showPassword: false }">
                        <label for="password" class="block text-sm font-bold text-slate-700 mb-2 flex items-center gap-2">
                            <span class="material-icons text-indigo-600 text-lg">lock</span>
                            Password
                        </label>
                        <div class="relative">
                            <input id="password" 
                                   name="password" 
                                   :type="showPassword ? 'text' : 'password'" 
                                   autocomplete="current-password" 
                                   required
                                   x-model="password"
                                   class="appearance-none relative block w-full px-5 py-4 border-2 border-slate-200 placeholder-slate-400 text-slate-900 rounded-2xl focus:outline-none focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-300 font-medium hover:border-indigo-300"
                                   placeholder="••••••••">
                            <button type="button" 
                                    @click="showPassword = !showPassword"
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center hover:scale-110 transition-transform touch-manipulation">
                                <span class="material-icons text-slate-400 group-focus-within:text-indigo-600 transition-colors" 
                                      x-text="showPassword ? 'visibility_off' : 'visibility'">
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Error Message -->
                    @if ($errors->any())
                        <div class="bg-gradient-to-r from-red-50 to-pink-50 border-2 border-red-200 text-red-700 px-5 py-4 rounded-2xl relative animate-wiggle" role="alert">
                            <div class="flex items-center gap-3">
                                <span class="material-icons text-red-500 animate-pulse">error_outline</span>
                                <span class="block font-semibold">{{ $errors->first() }}</span>
                            </div>
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                                class="group relative w-full flex justify-center items-center gap-3 py-4 px-6 border-0 text-base font-bold rounded-2xl text-white bg-gradient-to-r from-indigo-500 via-purple-600 to-pink-500 hover:from-indigo-600 hover:via-purple-700 hover:to-pink-600 shadow-xl shadow-indigo-500/50 hover:shadow-2xl hover:shadow-indigo-500/60 focus:outline-none focus:ring-4 focus:ring-indigo-500/50 active:scale-95 transition-all duration-300 overflow-hidden touch-manipulation">
                            <!-- Shine Effect -->
                            <div class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/30 to-white/0 translate-x-[-200%] group-hover:translate-x-[200%] transition-transform duration-700"></div>
                            
                            <span class="material-icons text-2xl animate-pulse-slow">login</span>
                            <span class="relative z-10">Masuk Sekarang</span>
                        </button>
                    </div>

                    <!-- Demo Users Info -->
                    <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl p-6 border-2 border-indigo-100 animate-fade-in-up" style="animation-delay: 0.5s;">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="material-icons text-indigo-600 animate-pulse-slow">info</span>
                            <p class="text-sm font-bold text-indigo-900">Demo Users - Klik untuk Auto Fill</p>
                        </div>
                        <div class="space-y-3">
                            <!-- Owner Demo User -->
                            <button type="button"
                                    @click.prevent="fillForm('owner@demo', 'demo123')"
                                    @touchstart.prevent="fillForm('owner@demo', 'demo123')"
                                    class="w-full bg-white/80 backdrop-blur-xl rounded-xl p-3 border border-indigo-100 hover:border-indigo-300 hover:scale-105 active:scale-95 transition-all duration-300 group touch-manipulation">
                                <div class="flex items-center justify-between">
                                    <div class="text-left">
                                        <p class="font-bold text-slate-800 text-sm flex items-center gap-2">
                                            <span class="material-icons text-purple-600 text-base">verified_user</span>
                                            Owner
                                        </p>
                                        <p class="text-slate-600 text-xs mt-1">owner@demo / demo123</p>
                                    </div>
                                    <span class="material-icons text-slate-400 group-hover:text-indigo-600 group-hover:translate-x-1 transition-all">arrow_forward</span>
                                </div>
                            </button>

                            <!-- Manager Demo User -->
                            <button type="button"
                                    @click.prevent="fillForm('manager@demo', 'demo123')"
                                    @touchstart.prevent="fillForm('manager@demo', 'demo123')"
                                    class="w-full bg-white/80 backdrop-blur-xl rounded-xl p-3 border border-indigo-100 hover:border-indigo-300 hover:scale-105 active:scale-95 transition-all duration-300 group touch-manipulation">
                                <div class="flex items-center justify-between">
                                    <div class="text-left">
                                        <p class="font-bold text-slate-800 text-sm flex items-center gap-2">
                                            <span class="material-icons text-blue-600 text-base">manage_accounts</span>
                                            Manager
                                        </p>
                                        <p class="text-slate-600 text-xs mt-1">manager@demo / demo123</p>
                                    </div>
                                    <span class="material-icons text-slate-400 group-hover:text-indigo-600 group-hover:translate-x-1 transition-all">arrow_forward</span>
                                </div>
                            </button>

                            <!-- Cashier Demo User -->
                            <button type="button"
                                    @click.prevent="fillForm('cashier@demo', 'demo123')"
                                    @touchstart.prevent="fillForm('cashier@demo', 'demo123')"
                                    class="w-full bg-white/80 backdrop-blur-xl rounded-xl p-3 border border-indigo-100 hover:border-indigo-300 hover:scale-105 active:scale-95 transition-all duration-300 group touch-manipulation">
                                <div class="flex items-center justify-between">
                                    <div class="text-left">
                                        <p class="font-bold text-slate-800 text-sm flex items-center gap-2">
                                            <span class="material-icons text-green-600 text-base">point_of_sale</span>
                                            Cashier
                                        </p>
                                        <p class="text-slate-600 text-xs mt-1">cashier@demo / demo123</p>
                                    </div>
                                    <span class="material-icons text-slate-400 group-hover:text-indigo-600 group-hover:translate-x-1 transition-all">arrow_forward</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Footer -->
                <div class="mt-8 text-center">
                    <p class="text-xs text-slate-500 font-medium">
                        © {{ date('Y') }} POS UMKM. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function loginForm() {
            return {
                email: '{{ old('email') }}',
                password: '',
                fillForm(emailValue, passwordValue) {
                    this.email = emailValue;
                    this.password = passwordValue;
                    
                    // Visual feedback
                    const emailInput = document.getElementById('email');
                    const passwordInput = document.getElementById('password');
                    
                    if (emailInput) {
                        emailInput.classList.add('ring-4', 'ring-green-500/30', 'border-green-500');
                        setTimeout(() => {
                            emailInput.classList.remove('ring-4', 'ring-green-500/30', 'border-green-500');
                        }, 1000);
                    }
                    
                    if (passwordInput) {
                        passwordInput.classList.add('ring-4', 'ring-green-500/30', 'border-green-500');
                        setTimeout(() => {
                            passwordInput.classList.remove('ring-4', 'ring-green-500/30', 'border-green-500');
                        }, 1000);
                    }
                    
                    // Show success notification
                    console.log('✅ Demo user berhasil di-load:', emailValue);
                }
            }
        }
    </script>
@endsection
