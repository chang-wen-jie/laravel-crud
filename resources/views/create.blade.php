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
            nieuwe film toevoegen
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
            <form method="post" action="{{ route('films.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="titel">Titel</label>
                    <input type="text" class="form-control" name="titel"/>
                </div>
                <div class="form-group">
                    <label for="jaar">Jaar</label>
                    <input type="number" class="form-control" name="jaar"/>
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" name="genre"/>
                </div>
                <div class="form-group">
                    <label for="tijdsduur">Tijdsduur</label>
                    <input type="number" class="form-control" name="tijdsduur"/>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Toevoegen</button>
                <a href="{{ route('films.index') }}" class="btn btn-block btn-danger">
                    Annuleren
                </a>
            </form>
        </div>
    </div>
@endsection
