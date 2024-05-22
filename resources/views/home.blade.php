@extends('layouts.app')

@section('content')

<h1>Treni in Partenza Oggi</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{ $train->azienda }}: {{ $train->stazione_partenza }} - {{ $train->stazione_arrivo }} 
                ({{ $train->orario_partenza }} - {{ $train->orario_arrivo }}) 
                @if ($train->in_orario) 
                    In orario 
                @else 
                    In ritardo 
                @endif
                @if ($train->cancellato) 
                    - Cancellato 
                @endif
            </li>
        @endforeach
    </ul>