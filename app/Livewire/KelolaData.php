<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout; // Tambahkan import ini

#[Layout('layouts.app')] // Definisikan layout di sini menggunakan attribute
class KelolaData extends Component
{
    // Kategori default yang terbuka pertama kali
    public $kategori = 'curia_generalis';

    // Daftar menu yang diambil dari aplikasi mobile
    public function getDaftarMenuProperty()
    {
        return [
            'curia_generalis' => 'Curia Generalis',
            'jurisdictione_prioris' => 'Jurisdictione Prioris Generalis',
            'episcopi' => 'Episcopi',
            'pejabat_pusat' => 'Pejabat Pusat',
            'komisi' => 'Komisi',
            'monasteria_ordinis' => 'Monasteria Ordinis',
            'moniales' => 'Moniales',
            'instituta' => 'Instituta',
            'heremitae' => 'Heremitae / Heremiti',
            'fratres' => 'Fratres',
            'ministries' => 'Ministries',
            'statistica' => 'Statistica',
            'citoc' => 'CITOC',
        ];
    }

    public function setKategori($kategoriBaru)
    {
        $this->kategori = $kategoriBaru;
    }

    public function render()
    {
        // Cukup return view saja, tanpa ->layout()
        return view('livewire.kelola-data');
    }
}
