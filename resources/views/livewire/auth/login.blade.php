<?php

use function Livewire\Volt\{state, layout, rules};

layout('layouts.auth');

state(['email' => '', 'password' => '', 'remember' => false]);

rules([
    'email' => 'required|email',
    'password' => 'required',
]);

$login = function () {
    $this->validate();

    if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
        session()->regenerate();
        if (auth()->user()->role == 'admin'){
            return redirect()->intended('/admin/dashboard');
        } else {
            return 'dashboard client';
        }
    }

    $this->addError('email', 'Kredensial yang Anda berikan tidak cocok dengan data kami.');
};

?>

<div class="bg-white lg:max-w-120 z-10 p-12 relative w-full h-full border-t-[3px] border-primary dark:bg-gray-800">
    <div class="flex flex-col h-full gap-4">
        <div class="flex items-center gap-2 mb-6">
            <div class="w-8 h-8 rounded-xl  flex items-center justify-center ">
                <!-- Mengganti ikon <i> dengan <img> -->
                <img src="{{ asset('favicon.ico') }}" alt="Logo" class="object-contain">
            </div>
            <span class="text-xl font-extrabold text-slate-900 tracking-tight dark:text-white">Web<span
                    class="text-brand-500">Elijabah.</span></span>
        </div>
        <div class="my-auto">
            <!-- title-->
            <h4 class="text-dark/70 text-lg font-semibold dark:text-light/80 mb-2">Sign In</h4>
            <p class="text-gray-400 mb-9">Enter your email address and password to access account.</p>

            <!-- form -->
            <form wire:submit.prevent="login">
                <x-form.input label="Email address" id="emailaddress" type="email" placeholder="Enter your email"
                    name="email" />
                <div class="mb-6 space-y-2" x-data="{ showPassword: false }">
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="font-semibold text-gray-500">Password</label>
                    </div>

                    <div class="flex items-center">
                        <input :type="showPassword ? 'text' : 'password'" id="password"
                            class="form-input rounded-e-none" placeholder="Enter your password" wire:model="password">
                        <span class="px-3 py-1 border rounded-e-md -ms-px dark:border-white/10">
                            <i :class="showPassword ? 'ri-eye-off-line' : 'ri-eye-line'" class="text-lg"
                                @click="showPassword = !showPassword"></i>
                        </span>
                        @error('password')
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                <i class="ri-error-warning-fill text-xl text-red-500"></i>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" class="form-checkbox rounded text-primary" id="checkbox-signin">
                        <label class="ms-2 text-sm font-medium" for="checkbox-signin">Remember me</label>
                    </div>
                </div>
                <div class=" text-center">
                    <button
                        type="submit"
                        wire:loading.attr="disabled"
                        wire:target="login"
                        class="relative flex items-center justify-center w-full px-5 py-3 text-sm font-bold tracking-wide text-white transition-all duration-200 rounded-xl bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary/40 focus:ring-offset-2 active:scale-[0.98] disabled:opacity-60 disabled:cursor-not-allowed shadow-lg shadow-primary/20"
                    >
                        <span wire:loading.remove wire:target="login" class="flex items-center justify-center gap-2">
        <i class="ri-login-box-line text-lg"></i>
        <span>Masuk ke Akun</span>
    </span>

                        <span wire:loading wire:target="login" class="flex items-center justify-center gap-2">
        <i class="ri-loader-4-line text-lg animate-spin"></i>
        <span>Memverifikasi...</span>
    </span>
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>
