---
title: Tema Four — indice documentazione
type: theme-wiki
status: active
---

# Tema Four — documentazione

- [README del tema](README.md)
- Il tema è attualmente `unused`: il tema pubblico configurato è BsItalia.
- Non aggiungere logica di dominio qui; mantenerlo limitato a viste e asset.
- I modelli e le migrazioni appartengono ai moduli Laravel, non al tema. Se una
  vista Four usa dati Trade, il modello deve seguire la convenzione del modulo:
  `Modules\Trade\Models\BaseModel`, mai `Illuminate\Database\Eloquent\Model`.
