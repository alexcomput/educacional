<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $endereco->id !!}</p>
</div>

<!-- Logradouro Field -->
<div class="form-group">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    <p>{!! $endereco->logradouro !!}</p>
</div>

<!-- Numero Field -->
<div class="form-group">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{!! $endereco->numero !!}</p>
</div>

<!-- Cep Field -->
<div class="form-group">
    {!! Form::label('cep', 'Cep:') !!}
    <p>{!! $endereco->cep !!}</p>
</div>

<!-- Bairro Field -->
<div class="form-group">
    {!! Form::label('bairro', 'Bairro:') !!}
    <p>{!! $endereco->bairro !!}</p>
</div>

<!-- Cidade Field -->
<div class="form-group">
    {!! Form::label('cidade', 'Cidade:') !!}
    <p>{!! $endereco->cidade !!}</p>
</div>

<!-- Uf Field -->
<div class="form-group">
    {!! Form::label('uf', 'Uf:') !!}
    <p>{!! $endereco->uf !!}</p>
</div>

<!-- Complemento Field -->
<div class="form-group">
    {!! Form::label('complemento', 'Complemento:') !!}
    <p>{!! $endereco->complemento !!}</p>
</div>