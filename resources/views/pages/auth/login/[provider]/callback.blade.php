<?php

declare(strict_types=1);

use Livewire\Volt\Component;
use Modules\User\Actions\Socialite\ProcessCallbackAction;

use function Laravel\Folio\name;

/*
 * Ritorno da Google/Microsoft/GitHub (DCP-360): una pagina Folio+Volt, non un controller. Tutta la logica sta in
 * ProcessCallbackAction (modulo User); qui si legge lingua e provider dall'indirizzo e si fa il redirect che l'Action
 * decide (login riuscito, oppure di nuovo il login con il motivo). L'indirizzo e' /{lingua}/auth/login/{provider}/callback.
 */
name('oauth.callback');

new class extends Component
{
    public function mount(): void
    {
        $lang = (string) request()->segment(1);
        $provider = (string) request()->segment(4);
        // Stessi provider della rotta d'ingresso (routes/socialite.php del modulo User): un nome inventato e' un 404.
        abort_unless(in_array($provider, ['google', 'microsoft', 'github'], true), 404);

        $this->redirect(app(ProcessCallbackAction::class)->execute($lang, $provider)->getTargetUrl());
    }
};
?>
<x-pub_theme::layouts.main>
    @volt('auth.login.oauth-callback')
        <div></div>
    @endvolt
</x-pub_theme::layouts.main>
