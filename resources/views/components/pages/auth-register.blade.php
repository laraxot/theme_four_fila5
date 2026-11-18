{{--
  Pagina di registrazione: testi dal modulo Gdpr (`gdpr::register.*`), form RegisterWidget con i consensi.
  I testi di marketing sono del progetto: si cambiano in laravel/lang/vendor/gdpr/<lingua>/register.php,
  non qui e non nel modulo (che e' condiviso da tutti i progetti).
--}}
@php
    $lang = app()->getLocale();
    $benefits = trans('gdpr::register.benefits');
    $benefits = is_array($benefits) ? $benefits : [];
@endphp
<section class="mx-auto grid max-w-6xl gap-10 px-4 py-12 lg:grid-cols-2 lg:items-start lg:py-16">
    <div>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __('gdpr::register.title') }}</h1>
        <p class="mt-4 text-lg text-gray-600">{{ __('gdpr::register.subtitle') }}</p>

        @if ($benefits !== [])
            <ul class="mt-8 space-y-5" aria-label="{{ __('gdpr::register.sections.benefits') }}">
                @foreach ($benefits as $benefit)
                    @if (is_array($benefit))
                        <li class="flex gap-3">
                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-blue-600" aria-hidden="true"></span>
                            <div>
                                <p class="font-semibold text-gray-900">{{ $benefit['title'] ?? '' }}</p>
                                <p class="text-sm text-gray-600">{{ $benefit['description'] ?? '' }}</p>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        @endif
    </div>

    <div class="rounded-2xl border border-slate-700 bg-slate-900 p-6 shadow-sm sm:p-8">
        <h2 class="text-2xl font-semibold text-white">{{ __('gdpr::register.form.cta_title') }}</h2>
        <p class="mt-1 text-sm text-slate-300">{{ __('gdpr::register.form.cta_subtitle') }}</p>

        <div class="mt-6">
            @livewire(\Modules\Gdpr\Filament\Widgets\Auth\RegisterWidget::class)
        </div>

        <p class="mt-6 text-xs text-slate-400">{{ __('gdpr::register.form.terms_notice') }}</p>
        <p class="mt-4 text-sm text-slate-300">
            {{ __('gdpr::register.already_registered') }}
            <a href="{{ url('/'.$lang.'/auth/login') }}" class="font-semibold text-blue-400 hover:text-blue-300">{{ __('gdpr::register.login') }}</a>
        </p>
    </div>
</section>
