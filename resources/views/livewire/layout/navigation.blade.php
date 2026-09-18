<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav class="bg-white border-b border-gray-100 py-3">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-between items-center gap-6">

            <!-- Area Kiri: Logo & Menu Utama -->
            <div class="flex flex-wrap items-center gap-x-6 gap-y-4">

                <!-- Logo -->
                <div class="shrink-0 flex items-center mr-4">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Dashboard') }}
                </x-nav-link>

                <!-- Menu Khusus Admin (Berdasarkan aplikasi) -->
                <x-nav-link href="#" :active="false" wire:navigate>{{ __('Daftar Admin') }}</x-nav-link>
                <x-nav-link href="#" :active="false" wire:navigate>{{ __('Daftar Anggota') }}</x-nav-link>
                <x-nav-link href="#" :active="false" wire:navigate>{{ __('Daftar Data Non Anggota') }}</x-nav-link>
                <x-nav-link href="#" :active="false" wire:navigate>{{ __('Daftar Episcopi') }}</x-nav-link>
                <x-nav-link href="#" :active="false" wire:navigate>{{ __('Kelola Pejabat Pusat') }}</x-nav-link>
                <x-nav-link href="#" :active="false" wire:navigate>{{ __('Kelola Komisi') }}</x-nav-link>
                <x-nav-link href="#" :active="false" wire:navigate>{{ __('Kelola CITOC') }}</x-nav-link>

            </div>

            <!-- Area Kanan: Profil & Logout -->
            <div class="flex flex-wrap items-center gap-4 border-l border-gray-200 pl-4 py-2">
                <x-nav-link :href="route('profile')" :active="request()->routeIs('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-nav-link>

                <button wire:click="logout" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    {{ __('Log Out') }}
                </button>
            </div>

        </div>
    </div>
</nav>
