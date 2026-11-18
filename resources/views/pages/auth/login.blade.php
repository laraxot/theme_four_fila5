<?php

declare(strict_types=1);

use function Laravel\Folio\middleware;

middleware(['guest']);

?>
{{--
  Pagina di accesso del sito pubblico. Senza questa cartella `pages/auth` la pagina catch-all del tema
  ([container0]/[slug0]) rispondeva a /it/auth/login con una pagina vuota. Il form e' LoginWidget (modulo User).
--}}
<x-pub_theme::layouts.main>
    <x-pub_theme::pages.auth-card :title="__('user::login.title')">
        @livewire(\Modules\User\Filament\Widgets\Auth\LoginWidget::class)
    </x-pub_theme::pages.auth-card>
</x-pub_theme::layouts.main>
