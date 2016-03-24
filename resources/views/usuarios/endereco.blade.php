<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    {!! Form::text('logradouro', $endereco->logradouro, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', $endereco->cep, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', $endereco->bairro, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', $endereco->cidade, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uf', 'UF:') !!}
    {!! Form::text('uf', $endereco->uf, ['class' => 'form-control']) !!}
</div> 

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-12">
    {!! Form::label('complemento', 'Complemento:') !!}
    {!! Form::text('complemento', $endereco->complemento, ['class' => 'form-control']) !!}
</div>
