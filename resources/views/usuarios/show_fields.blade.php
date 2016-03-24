<!-- Senha Field -->
<div class="form-group">
    {!! Form::label('senha', 'Senha:') !!}
    <p>{!! $usuario->senha !!}</p>
</div>

<!-- Login Field -->
<div class="form-group">
    {!! Form::label('login', 'Login:') !!}
    <p>{!! $usuario->login !!}</p>
</div>

<!-- Pessoa Id Field -->
<div class="form-group">
    {!! Form::label('pessoa_id', 'Pessoa Id:') !!}
    <p>{!! $usuario->pessoa_id !!}</p>
</div>
