@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bonjour {{ $username }}</h1>
        <a href=" {{ url('/') }} "><h3>Retourner à la liste des cartes</h3></a>
        <a href=" {{ url('admin/vignettes') }} "><h3>Administrer la liste</h3></a>
    </div>
@endsection
