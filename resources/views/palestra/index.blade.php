@extends('layouts.app')
@section('content')

<div class="container">
<h2>Agenda</h2>
<hr/>
<a href="{{ url('palestra/create') }}" class="btn btn-success">Nova Palestra</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tema</th>
                <th scope="col">Palestrante</th>
                <th scope="col">Periodo</th>
                <th scope="col">Cidade</th>
                <th scope="col">Horas</th>
            </tr>
        </thead>
        @foreach($palestra as $palestras)
        <tbody>
            <tr>
                <th>{{ $palestras->id }}</th>
                <td>{{ $palestras->tema }}</td>
                <td>{{ $palestras->palestrante }}</td>
                <td>{{ $palestras->periodo }}</td>
                <td>{{ $palestras->cidade }}</td>
                <td>{{ $palestras->horas }}</td>
                <td>
                    <a href=" {{ route('palestra.edit',$palestra->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href=" {{ route('palestra.show',$palestra->id)}}" class="btn btn-dark btn-sm">Vizualizar</a>
                    <a href="{{ url('palestra/delete',['id'=>$palestra->id]) }}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
 </div>

@endsection