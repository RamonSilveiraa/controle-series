<x-layout title="Editar Série '{!!$serie->nome!!}'">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" :update="true" />
</x-layout>

<?php   // Sintax {!! !!} insegura, não faz encode nos caracteres especiais como & ou aspas.?>
