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
        .form-control {
            font-weight: bold;
        }
    </style>
    <div class="card">
        <div class="card-header">
            filmgegevens
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
            <form method="post" style="font-weight: bold; text-transform: capitalize;">
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control" value="{{$film->id}}" readonly />
                </div>
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label>titel</label>
                    <input type="text" class="form-control" name="titel" value="{{$film->titel}}" readonly />
                </div>
                <div class="form-group">
                    <label>jaar</label>
                    <input type="number" class="form-control" name="jaar" value="{{$film->jaar}}" readonly />
                </div>
                <div class="form-group">
                    <label>genre</label>
                    <input type="text" class="form-control" name="genre" value="{{$film->genre}} " readonly />
                </div>
                <div class="form-group">
                    <label>tijdsduur</label>
                    <input type="number" class="form-control" name="tijdsduur" value="{{$film->tijdsduur}}" readonly />
                </div>
                <a href="{{ route('films.index') }}" class="btn btn-block btn-danger">
                    Terug
                </a>
            </form>
        </div>
    </div>
@endsection
