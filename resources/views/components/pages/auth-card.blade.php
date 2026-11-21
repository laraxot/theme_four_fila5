{{-- Guscio comune delle pagine di accesso: card centrata, titolo, intro opzionale. `dark` per i widget pensati su fondo scuro (RegisterWidget di Gdpr). --}}
@props(['title' => '', 'intro' => null, 'dark' => false])
<section class="flex justify-center px-4 py-12 sm:py-16">
    <div @class([
        'w-full max-w-md rounded-2xl border p-6 shadow-sm sm:p-8',
        'border-gray-200 bg-white' => ! $dark,
        'border-slate-700 bg-slate-900' => $dark,
    ])>
        @if ($title !== '')
            <h1 @class(['text-2xl font-semibold', 'text-gray-900' => ! $dark, 'text-white' => $dark])>{{ $title }}</h1>
        @endif
        @if ($intro)
            <p @class(['mt-2 text-sm', 'text-gray-600' => ! $dark, 'text-slate-300' => $dark])>{{ $intro }}</p>
        @endif
        <div class="mt-6">
            {{ $slot }}
        </div>
    </div>
</section>
