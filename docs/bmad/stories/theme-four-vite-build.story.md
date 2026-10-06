---
title: "Story: Theme Four Vite build"
type: bmad-story
status: done
---

# Story: Theme Four Vite build

## Obiettivo

Rendere ripetibile il build frontend del tema Four con la toolchain moderna
Vite, Vue 3 e Tailwind CSS 4.

## Decisioni

- `resources/css/app.css` è l'entrypoint CSS coerente con le view Blade.
- Vite produce manifest e asset in `public_html/themes/Four`.
- Il plugin Vue è allineato a Vite 8 (`@vitejs/plugin-vue` 6).
- Non si usa l'API font non esportata da `laravel-vite-plugin` 3.x.

## Verifica

- `npm install --include=dev`
- `npm run build`
- `npm audit --audit-level=high`
- `git diff --check`

Risultato: build e audit completati senza errori.
