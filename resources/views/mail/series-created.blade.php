@component('mail::message')

# {{ $nomeSerie }} Criada

A Série {{ $nomeSerie }} com {{ $qtdTemporadas }} temporadas e {{ $episodiosPorTemporada }} episódios por temporadas foi criada!

Acesse aqui:
@component('mail::button', ['url'=>route('seasons.index', $idSerie)])
    Ver série    
@endcomponent

@endcomponent
