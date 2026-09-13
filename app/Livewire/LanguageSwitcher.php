<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher extends Component
{
    public $currentLocale;

    public function mount()
    {
        $this->currentLocale = Session::get('locale', App::getLocale());
    }

    public function changeLocale($locale)
    {
        if (in_array($locale, ['en', 'es', 'it', 'la'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
            $this->currentLocale = $locale;

            // Reload halaman agar bahasa berubah
            return redirect(request()->header('Referer'));
        }
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
