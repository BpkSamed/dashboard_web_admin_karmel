<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col md:flex-row min-h-[600px]">

                <!-- Sidebar Navigasi (Kiri) -->
                <div class="w-full md:w-1/4 bg-gray-50 border-r border-gray-200 p-4">
                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4 px-4">
                        {{ __('Categories') }}
                    </h3>
                    <ul class="space-y-1">
                        @foreach($this->daftarMenu as $key => $label)
                            <li>
                                <button wire:click="setKategori('{{ $key }}')"
                                    class="w-full text-left px-4 py-3 rounded-md transition duration-150 ease-in-out text-sm {{ $kategori === $key ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                                    {{ __($label) }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Area Konten Dinamis (Kanan) -->
                <div class="w-full md:w-3/4 p-6 md:p-8">
                    <div class="flex justify-between items-center mb-6 border-b pb-4">
                        <h3 class="text-2xl font-bold text-gray-800">
                            {{ __($this->daftarMenu[$kategori]) }}
                        </h3>
                    </div>

                    <!-- Placeholder untuk form nanti -->
                    <div class="bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg p-12 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">{{ __('Form Settings') }}</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            {{ __('Form isian untuk menu') }} <span class="font-bold">{{ __($this->daftarMenu[$kategori]) }}</span> {{ __('akan ditambahkan di sini nanti.') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
