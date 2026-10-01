---
title: "Tema Four"
type: theme-readme
status: unused
---

# Tema Four

## Scopo

Tema pubblico (`"type": "pub"` in `theme.json`) con viste Blade Bootstrap 4 per un'app
domande e risposte: `questions/`, `answers/`, `auth/`, `home/`, `layouts/`, `shared/`,
paginazione in `vendor/pagination/`. Asset: `resources/{js,sass}` compilati con Laravel Mix
(`webpack.mix.js`) in `dist/`.

## Chi lo usa

Nessuno. `laravel/config/xra.php` imposta `pub_theme = BsItalia` e `adm_theme = AdminLTE`;
nessun altro file di `laravel/config`, `laravel/Modules` o `.env.example` cita `Four`.

## Stato

- Repository: `laraxot/theme_four_fila5` (branch `dev`).
- Nessuna classe PHP, nessun test: PHPStan e Pest non applicabili.
- Testi delle viste in inglese e non tradotti (nessun `lang/` nel tema).
- `screenshot.jpg` e' in realta' un PNG (da rinominare se il tema viene riattivato).
- Dipendenze npm datate (Bootstrap 4, Vue 2, Laravel Mix 6): non aggiornare senza un consumatore.
