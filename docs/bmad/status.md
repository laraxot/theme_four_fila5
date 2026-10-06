---
title: "BMAD Status — Theme Four"
type: bmad-status
status: active
---

# BMAD Status — Theme Four

## Scopo
Tema pubblico (`pub_theme`) — viste Blade, asset Mix, nessun dominio (no modelli, no migrazioni).

## Stato build
- `npm install --include=dev` completato: Vite 8.3.3, Vue plugin 6.0.9, Laravel Vite plugin 3.2
- `npm run build` OK: asset generati in `public_html/themes/Four` con manifest Laravel
- `npm audit --audit-level=high` OK: nessuna vulnerabilità rilevata
- Gli asset CSS usano `resources/css/app.css`; il vecchio bootstrap Mix non è più l'entrypoint

## Miglioramenti UX
- Header: `auth()->user()?->name ?? __('Welcome')` — fix null + miglioramento UX (nessun "Guest")
- Login/Register già presenti in `@else`, flusso chiaro
- Design: disciplina anti-slop (token, stati, elevazione, prefer-reduced-motion)

## Note
- Tema attualmente `unused` (`config/xra.php`: `pub_theme = BsItalia`)
- `docs/` migliorato con scopo chiaro (BMAD + second brain)
