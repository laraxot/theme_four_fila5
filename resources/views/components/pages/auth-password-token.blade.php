<x-pub_theme::pages.auth-card :title="__('user::password_recovery.reset_title')" :intro="__('user::password_recovery.reset_intro')">
    @livewire(\Modules\User\Filament\Widgets\Auth\ResetPasswordWidget::class, ['token' => $token ?? null, 'email' => $email ?? null])
</x-pub_theme::pages.auth-card>
