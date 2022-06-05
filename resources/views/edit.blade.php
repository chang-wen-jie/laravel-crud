@extends('layout')
@section('content')
    <style>
        .container {
            max-width: 450px;
        }
        .card-header {
            background-color: #e50914;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
    <div class="card">
        <div class="card-header">
            filmgegevens aanpassen
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('films.update', $film->id) }}" style="text-transform: capitalize;">
                <div class="form-group">
                    <label><b>ID</b></label>
                    <input class="form-control" value="{{$film->id}}" style="font-weight: bold" readonly />
                </div>
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label>titel</label>
                    <input type="text" class="form-control" name="titel" value="{{$film->titel}}" />
                </div>
                <div class="form-group">
                    <label>jaar</label>
                    <input type="number" class="form-control" name="jaar" value="{{$film->jaar}}" />
                </div>
                <div class="form-group">
                    <label>genre</label>
                    <input type="text" class="form-control" name="genre" value="{{$film->genre}} "/>
                </div>
                <div class="form-group">
                    <label>tijdsduur</label>
                    <input type="number" class="form-control" name="tijdsduur" value="{{$film->tijdsduur}}" />
                </div>
                <button type="submit" class="btn btn-block btn-primary">Aanpassen</button>
                <a href="{{ route('films.index') }}" class="btn btn-block btn-danger">
                    Annuleren
                </a>
            </form>
        </div>
    </div>
@endsection
