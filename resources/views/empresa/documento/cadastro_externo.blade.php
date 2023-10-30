@extends('template.app')

@section('title', 'Cadastrar - Documento')

@section('conteudo')
    <div class="container mt-5">
        <h1>Cadastrar certidões</h1>
        <form action="{{route('finish-creation')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="empresa" class="form-label">CNPJ (Sem pontuação)</label>
            <input class="form-control" required  name="cnpj" placeholder="Ex.: 00111222333000455" type="text" id="empresa">
            <br>

            <label for="federal" class="form-label">CERTIDÃO NEGATIVA - FEDERAL</label>
            <input class="form-control" required  name="certidoes[federal]" type="file" id="federal"><br>

            <label for="estadual" class="form-label">CERTIDÃO NEGATIVA - ESTADUAL</label>
            <input class="form-control" required  name="certidoes[estadual]" type="file" id="estadual"><br>

            <label for="municipal" class="form-label">CERTIDÃO NEGATIVA - MUNICIPAL</label>
            <input class="form-control" required name="certidoes[municipal]" type="file" id="municipal"><br>

            <label for="falencia" class="form-label">CERTIDÃO NEGATIVA - FALÊNCIA/CONCORDATA</label>
            <input class="form-control" required name="certidoes[falencia]" type="file" id="falencia"><br>

            <label for="fgts" class="form-label">CERTIDÃO NEGATIVA - FGTS</label>
            <input class="form-control" required name="certidoes[fgts]" type="file" id="fgts"><br>

            <label for="trabalhista" class="form-label">CERTIDÃO NEGATIVA - TRABALHISTA</label>
            <input class="form-control" required name="certidoes[trabalhista]" type="file" id="trabalhista"><br>

            <button type="submit" class="btn btn-success ">Cadastrar</button>
        </form>
    </div><br>
@endsection

