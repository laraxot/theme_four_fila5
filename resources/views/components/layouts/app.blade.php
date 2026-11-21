{{--
  `<x-layouts.app>` delle pagine dei moduli (es. User pages/auth/password/*, verify): pagina intera del sito pubblico.
  Prima era solo un <div> senza <html>/<head>: niente CSS, niente menu, niente lang.
--}}
@props([
    'title' => null,
    'metaDescription' => null,
])
<x-pub_theme::layouts.main :title="$title" :description="$metaDescription">
    @isset($header)
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    @endisset

    {{ $slot }}
</x-pub_theme::layouts.main>
