<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    public function login(): void
    {
        $this->validate();
        $this->form->authenticate();
        Session::regenerate();
        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <!-- Header / Logo Panel -->
    <div class="text-center mb-8">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#4A3728] mb-4 shadow-md">
            <!-- Ikon gembok/admin -->
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-[#4A3728]">Admin Ordo Karmel</h2>
        <p class="text-sm text-gray-500 mt-1">Silakan masuk ke panel manajemen</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login" class="space-y-5">
        <!-- Input Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-[#4A3728]">Email</label>
            <input wire:model="form.email" id="email" type="email" required autofocus autocomplete="username"
                class="mt-1 block w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-[#4A3728] focus:border-[#4A3728] transition-colors" placeholder="admin@email.com">
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Input Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-[#4A3728]">Password</label>
            <input wire:model="form.password" id="password" type="password" required autocomplete="current-password"
                class="mt-1 block w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-[#4A3728] focus:border-[#4A3728] transition-colors" placeholder="••••••••">
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-4">
            <label for="remember" class="flex items-center cursor-pointer">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-[#4A3728] focus:ring-[#4A3728]">
                <span class="ms-2 text-sm text-gray-600">Ingat saya</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-[#4A3728] hover:underline" href="{{ route('password.request') }}" wire:navigate>
                    Lupa password?
                </a>
            @endif
        </div>

        <!-- Tombol Submit Dinamis -->
        <button type="submit" class="w-full flex justify-center py-2.5 px-4 mt-6 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[#4A3728] hover:bg-[#31241a] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4A3728] transition-colors duration-200">
            <span wire:loading.remove wire:target="login">Masuk</span>
            <span wire:loading wire:target="login">Memproses...</span>
        </button>
    </form>
</div>
