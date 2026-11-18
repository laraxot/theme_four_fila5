{{-- Dentro il blocco @volt di User pages/auth/verify: resend() e' del componente Volt. --}}
<x-pub_theme::pages.auth-card :title="__('user::auth_pages.sections.verify.title')" :intro="__('user::auth_pages.verify.check_email.description')">
    @if (session('resent'))
        <p class="mb-4 rounded-lg bg-green-50 px-3 py-2 text-sm text-green-800">{{ __('user::auth_pages.verify.resent.message') }}</p>
    @endif
    <button type="button" wire:click="resend" class="w-full rounded-lg bg-blue-600 px-4 py-2 font-medium text-white hover:bg-blue-700">
        {{ __('user::auth_pages.verify.request_another.label') }}
    </button>
</x-pub_theme::pages.auth-card>
