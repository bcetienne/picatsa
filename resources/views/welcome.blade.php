@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($vignettes))
            @foreach ($vignettes as $item)
                <div class="card sticky-action" style="margin-left: 30%; margin-right: 30%;">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ $item->url }}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Carte numéro {{ $item->id }}<i class="material-icons right">+</i></span>
                        {{-- <p><a href="#">This is a link</a></p> --}}
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Carte numéro {{ $item->id }}<i class="material-icons right">X</i></span>
                        <h6>Légende</h6>
                        <p>{{ $item->legend }}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ url('show/' . $item->id) }}">Voir en détail</a>
                        @auth
                            <a href="{{ url('admin/update/' . $item->id) }}">Modifier</a>
                            <a href="{{ url('admin/delete/' . $item->id) }}">Supprimer</a>
                        @endauth
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection