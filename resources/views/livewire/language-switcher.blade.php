<div>
    <select wire:model="currentLocale" wire:change="changeLocale($event.target.value)"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-sm">
        <option value="en">English</option>
        <option value="es">Español</option>
        <option value="it">Italiano</option>
        <option value="la">Latina</option>
    </select>
</div>
