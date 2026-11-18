{{-- Dentro il blocco @volt di User pages/auth/password/confirm: $password e confirm() sono del componente Volt. --}}
<x-pub_theme::pages.auth-card :title="__('user::auth_pages.sections.password_confirm.title')" :intro="__('user::auth_pages.sections.password_confirm.description')">
    <form wire:submit="confirm" class="space-y-4">
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('user::login.fields.password.label') }}</label>
            <input id="password" type="password" wire:model="password" autocomplete="current-password" required
                class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600/30">
            @error('password')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="w-full rounded-lg bg-blue-600 px-4 py-2 font-medium text-white hover:bg-blue-700">
            {{ __('user::auth_pages.password_confirm.submit.label') }}
        </button>
    </form>
</x-pub_theme::pages.auth-card>
