<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rg', 'Rg:') !!}
    {!! Form::text('rg', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Raca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raca', 'Raca:') !!}
    {!! Form::text('raca', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Nascimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_nascimento', 'Data Nascimento:') !!}
    {!! Form::date('data_nascimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Civil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_civil', 'Estado Civil:') !!}
    {!! Form::text('estado_civil', null, ['class' => 'form-control']) !!}
</div>

<!-- Naturalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naturalidade', 'Naturalidade:') !!}
    {!! Form::text('naturalidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Nacionalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacionalidade', 'Nacionalidade:') !!}
    {!! Form::text('nacionalidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Pai Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pai_nome', 'Pai Nome:') !!}
    {!! Form::text('pai_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Pai Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pai_cpf', 'Pai Cpf:') !!}
    {!! Form::text('pai_cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Mae Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mae_nome', 'Mae Nome:') !!}
    {!! Form::text('mae_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Mae Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mae_cpf', 'Mae Cpf:') !!}
    {!! Form::text('mae_cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_celular', 'Telefone Celular:') !!}
    {!! Form::text('telefone_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Residencial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_residencial', 'Telefone Residencial:') !!}
    {!! Form::text('telefone_residencial', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Comercial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_comercial', 'Telefone Comercial:') !!}
    {!! Form::text('telefone_comercial', null, ['class' => 'form-control']) !!}
</div>

<!-- Ramal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ramal', 'Ramal:') !!}
    {!! Form::text('ramal', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Ativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ativo', 'Ativo:') !!}
    {!! Form::text('ativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Emissao Rf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_emissao_rf', 'Data Emissao Rf:') !!}
    {!! Form::date('data_emissao_rf', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_id', 'Endereco Id:') !!}
    {!! Form::number('endereco_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Deleted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! Form::text('deleted_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pessoas.index') !!}" class="btn btn-default">Cancel</a>
</div>
