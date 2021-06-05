@extends('layouts.app')
@section('content')

<div class="container">



        <form id="frmpalestra" name="frmpalestra" action="{{ route('palestra.store') }}" method="POST">
            @csrf
            <div class="form-group col-6">
                <label for="tema">Tema</label>
                <input type="text" class="form-control {{ $errors->has('tema') ? 'is-invalid' : '' }}" id="tema" name="tema" placeholder="Informe o tema">
                @if ($errors->has('nome'))
                <div class="invalid-feedback">
                    {{$errors->first('tema', 'Atenção o campo tema é obrigatório!')}}
                </div>
                @endif
            </div>
        
            <div class="form-group col-6">
                <label for="palestrante">Palestrante</label>
                <input type="text" class="form-control {{ $errors->has('palestrante') ? 'is-invalid' : '' }}" id="palestrante"  name="palestrante" placeholder="Informe o palestrante">
            @if ($errors->has('palestrante'))
            <div class="invalid-feedback">
                {{$errors->first('palestrante', 'Atenção o campo sobrenome é obrigatório!')}}
            </div>
            @endif
            </div>

            <div class="form-group col-6">
            <label for="escola_id">Escola</label>
                <select class="form-control" id="escola_id" name="escola_id">
                    <option>Selecione</option>
                    @foreach ($escola as $escolas)
                        <option value="{{ $escolas->id }}">

                            Turma: {{ $escolas->nome_escola }}
                        
                        </option>
                    @endforeach
                </select>
            </div>
        
            <div class="form-group col-6">
                <label for="periodo">Periodo</label>
                <input type="text" class="form-control {{ $errors->has('periodo') ? 'is-invalid' : '' }} id="periodo"  name="periodo" placeholder="Informe o periodo ( 99/99/9999 )">
            @if ($errors->has('periodo'))
            <div class="invalid-feedback">
                {{$errors->first('periodo', 'Atenção o campo periodo é obrigatório!')}}
            </div>
            @endif
            </div>

            <div class="form-group col-6">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control {{ $errors->has('cidade') ? 'is-invalid' : '' }} id="cidade"  name="cidade" placeholder="Informe a cidade">
            @if ($errors->has('cidade'))
            <div class="invalid-feedback">
                {{$errors->first('cidade', 'Atenção o campo cidade é obrigatório!')}}
            </div>
            @endif
            </div>

            <div class="form-group col-6">
                <label for="horas">Horas</label>
                <input type="text" class="form-control {{ $errors->has('horas') ? 'is-invalid' : '' }} id="horas"  name="horas" placeholder="Informe as horas">
            @if ($errors->has('horas'))
            <div class="invalid-feedback">
                {{$errors->first('horas', 'Atenção o campo horas é obrigatório!')}}
            </div>
            @endif
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
</div>

@endsection