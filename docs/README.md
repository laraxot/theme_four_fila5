---
title: "Tema Four"
type: theme-readme
status: unused
---

# Tema Four

## Scopo

Tema pubblico (`"type": "pub"` in `theme.json`) con viste Blade e asset frontend.
Gli asset sono compilati con Vite da `resources/css/app.css` e `resources/js/app.js`
in `public_html/themes/Four/`.

## Chi lo usa

Nessuno. `laravel/config/xra.php` imposta `pub_theme = BsItalia` e `adm_theme = AdminLTE`;
nessun altro file di `laravel/config`, `laravel/Modules` o `.env.example` cita `Four`.

## Stato

- Repository: `laraxot/theme_four_fila5` (branch `dev`).
- Nessuna classe PHP, nessun test: PHPStan e Pest non applicabili.
- Testi delle viste in inglese e non tradotti (nessun `lang/` nel tema).
- `screenshot.jpg` e' in realta' un PNG (da rinominare se il tema viene riattivato).
- Dipendenze npm datate (Bootstrap 4, Vue 2, Laravel Mix 6): non aggiornare senza un consumatore.

## Confine modello/dominio

Four contiene solo viste e asset. Non definisce modelli né migrazioni. Le viste
che consumano Trade rispettano la base del modulo (`Modules\Trade\Models\BaseModel`)
e non introducono dipendenze dirette da `Illuminate\Database\Eloquent\Model`.
