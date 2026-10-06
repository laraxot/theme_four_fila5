<?php

use function Laravel\Folio\name;

name('home');

?>

<x-layouts.guest>
    @volt('home')
    <div>

        <x-page side="content" slug="home" />

    </div>
    @endvolt
</x-layouts.guest>
