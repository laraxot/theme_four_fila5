<?php

declare(strict_types=1);

use function Laravel\Folio\middleware;

middleware(['guest']);

?>
{{-- Registrazione del sito pubblico: il form con i consensi privacy e' RegisterWidget del modulo Gdpr. --}}
<x-pub_theme::layouts.main>
    @include('pub_theme::components.pages.auth-register')
</x-pub_theme::layouts.main>
