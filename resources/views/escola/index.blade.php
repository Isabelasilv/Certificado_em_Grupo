@extends('layouts.app')
@section('content')

<div class="container">
<h2>Certificados</h2>
<hr/>
<a href="{{ url('escola/create') }}" class="btn btn-success">Nova Escola</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome da escola</th>
                <th scope="col">Responsavel</th>
                <th scope="col">Função do responsavel</th>
                <th scope="col">Opcões</th>
            </tr>
        </thead>
        @foreach($escola as $escolas)
        <tbody>
            <tr>
                <th>{{ $escolas->id }}</th>
                <td>{{ $escolas->nome_escola }}</td>
                <td>{{ $escolas->responsavel }}</td>
                <td>{{ $escolas->funcao_resp }}</td>
                <td>
                    <a href=" {{ route('escola.edit',$escolas->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href=" {{ route('escola.show',$escolas->id)}}" class="btn btn-dark btn-sm">Vizualizar</a>
                    <a href="{{ url('escola/delete',['id'=>$escolas->id]) }}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
 </div>

@endsection