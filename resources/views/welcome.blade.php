@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($vignettes))
            <h1>Vignettes</h1>
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

        @if(isset($listAdmin))
            <h1>Administration des vignettes</h1>
            <a href=" {{ url('admin/vignettes/create') }}">
                <h6>Créer un nouvel élément</h6>
            </a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Légende</th>
                        <th>Déscription</th>
                        <th>URL</th>
                        <th>Actions</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($listAdmin as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->legend }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->url }}</td>
                            <td><a href="{{ url('admin/vignettes/' . $item->id) }}">Modifier</a>&nbsp;<a href="{{ url('admin/vignettes/delete' . $item->id) }}">Supprimer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if($new == true)
            <h1>Création d'un nouvel élément</h1>
                <div class="container">
                    <div class="row">
                      <div class="col s12 m6">
                        <div class="card">
                          <div class="card-content" style="text-align:center;">
                              {{ Form::open(array('url' => 'admin/vignettes/update/' . $vignetteUpdateAdmin->id, 'method' => 'put')) }}
                                <div class="input-field">
                                  <input id="legend" name="legend" type="text" class="validate" value="{{ $vignetteUpdateAdmin->legend }}">
                                  <label for="legend">Légende</label>
                                </div>
                                <div class="input-field">
                                <textarea id="description" name="description" class="materialize-textarea validate">{{ $vignetteUpdateAdmin->description }}</textarea>
                                  <label for="description">Description</label>
                                </div>
                                <div class="input-field">
                                  <input id="url" name="url" type="text" class="validate" value="{{ $vignetteUpdateAdmin->url }}">
                                  <label for="url">URL</label>
                                </div>
                                <div class="btn">
                                  <input type="submit" value="Modifier" style="border:0; background: transparent; color: white;">
                                </div>
                              {{ Form::close() }}
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
        @endif

        @if(isset($vignetteUpdateAdmin))
            <h1>Modification de l'élément {{ $vignetteUpdateAdmin->id }}</h1>
            <div class="container">
                    <div class="row">
                      <div class="col s12 m6">
                        <div class="card">
                          <div class="card-content" style="text-align:center;">
                              {{ Form::open(array('url' => 'admin/vignettes/update/' . $vignetteUpdateAdmin->id, 'method' => 'put')) }}
                                <div class="input-field">
                                  <input id="legend" name="legend" type="text" class="validate" value="{{ $vignetteUpdateAdmin->legend }}">
                                  <label for="legend">Légende</label>
                                </div>
                                <div class="input-field">
                                <textarea id="description" name="description" class="materialize-textarea validate">{{ $vignetteUpdateAdmin->description }}</textarea>
                                  <label for="description">Description</label>
                                </div>
                                <div class="input-field">
                                  <input id="url" name="url" type="text" class="validate" value="{{ $vignetteUpdateAdmin->url }}">
                                  <label for="url">URL</label>
                                </div>
                                <div class="btn">
                                  <input type="submit" value="Modifier" style="border:0; background: transparent; color: white;">
                                </div>
                              {{ Form::close() }}
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
        @endif
    </div>
@endsection