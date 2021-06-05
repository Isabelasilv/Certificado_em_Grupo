@extends('layouts.app')
@section('content')

<div class="container">



        <form id="frmescola" name="frmescola" action="{{ route('escola.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome da escola:</label>
                <input type="text" class="form-control {{ $errors->has('nome_escola') ? 'is-invalid' : '' }}" id="nome_escola" name="nome_escola" placeholder="Informe o nome da escola">
                @if ($errors->has('nome'))
                <div class="invalid-feedback">
                    {{$errors->first('nome_escola', 'Atenção o campo nomes é obrigatório!')}}
                </div>
                @endif
            </div>
        
            <div class="form-group">
                <label for="responsavel">Responsavel:</label>
                <input type="text" class="form-control {{ $errors->has('responsavel') ? 'is-invalid' : '' }}" id="responsavel"  name="responsavel" placeholder="Informe o responsavel">
            @if ($errors->has('responsavel'))
            <div class="invalid-feedback">
                {{$errors->first('responsavel', 'Atenção o campo responsavel é obrigatório!')}}
            </div>
            @endif
            </div>

            <div class="form-group">
                <label for="funcao_resp">Função do responsavel:</label>
                <input type="text" class="form-control {{ $errors->has('funcao_resp') ? 'is-invalid' : '' }}" id="funcao_resp"  name="funcao_resp" placeholder="Informe a função do responsavel">
            @if ($errors->has('funcao_resp'))
            <div class="invalid-feedback">
                {{$errors->first('funcao_resp', 'Atenção o campo função do responsavel é obrigatório!')}}
            </div>
            @endif
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
</div>

@endsection 