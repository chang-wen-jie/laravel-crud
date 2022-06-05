@extends('layout')
@section('content')
    <style>
        .action-icon {
            width: 15px;
        }
        .paginator-wrapper {
            margin: 0 auto;
            width: 50%;
        }
        .create-button {
            text-align: center;
        }
    </style>
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table" style="background-color: white">
            <thead style="background-color: white">
                <tr class="table-warning" style="text-transform: uppercase">
                    <td style="background-color: #e50914"><b>id</b></td>
                    <td style="background-color: #e50914"><b>titel</b></td>
                    <td style="background-color: #e50914"><b>jaar</b></td>
                    <td style="background-color: #e50914"><b>genre</b></td>
                    <td style="background-color: #e50914"><b>tijdsduur</b></td>
                    <td class="text-center" style="background-color: #e50914"><b>acties</b></td>
                </tr>
            </thead>
            <tbody>
                @foreach($films as $film)
                    <tr>
                        <td><b>{{$film->id}}.</b></td>
                        <td>{{$film->titel}}</td>
                        <td>{{$film->jaar}}</td>
                        <td>{{$film->genre}}</td>
                        <td>{{$film->tijdsduur}} minuten</td>
                        <td class="text-center">
                            <a href="{{ route('films.show', $film->id)}}" class="btn btn-primary btn-sm">
                                <img class="action-icon" src="{{ url('storage/img/eye_icon.png') }}" alt="Weerzien" />
                            </a>
                            <a href="{{ route('films.edit', $film->id)}}" class="btn btn-primary btn-sm">
                                <img class="action-icon" src="{{ url('storage/img/edit_icon.png') }}" alt="Aanpassen" />
                            </a>
                            <form action="{{ route('films.destroy', $film->id)}}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <img class="action-icon" src="{{ url('storage/img/delete_icon.png') }}" alt="Verwijderen" />
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="paginator-wrapper">
            {!! $films->links() !!}
            <div class="create-button">
                <a href="{{ route('films.create')}}" class="btn btn-primary btn-sm" style="font-size: 25px">+</a>
            </div>
        </div>
@endsection
