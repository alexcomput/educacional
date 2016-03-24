
<!-- Pessoa nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', $pessoa->nome, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', $pessoa->cpf, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rg', 'Rg:') !!}
    {!! Form::text('rg', $pessoa->rg, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', $pessoa->email, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', $pessoa->sexo, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_nascimento', 'Data de Nascimento:') !!}
    {!! Form::text('data_nascimento', $pessoa->data_nascimento, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_civil', 'Estado civil:') !!}
    {!! Form::text('estado_civil', $pessoa->estado_civil, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naturalidade', 'Naturalidade:') !!}
    {!! Form::text('naturalidade', $pessoa->naturalidade, ['class' => 'form-control']) !!}
</div>

<!-- Pessoa Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raca', 'Raça:') !!}
    {!! Form::text('raca', $pessoa->raca, ['class' => 'form-control']) !!}
</div> 
<!-- Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('login', 'Login:') !!}
    {!! Form::text('login', null, ['class' => 'form-control']) !!}
</div> 

<!-- Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('senha', 'Senha:') !!}
    {!! Form::password('senha', ['placeholder'=>'Password','class' => 'form-control']) !!}
</div>  
 
@include('usuarios.endereco')

<div class="form-group col-sm-12 ">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Perfil(s) do Usuário</div>
          <!-- Login Field -->
        
        <div class="form-group col-sm-6">
            {!! Form::label('perfil', 'Perfil:') !!}
            {!! Form::select('perfil',$perfil,null,['class' => 'form-control']); !!}  
        </div>
        <table class="table"> 
            <thead>
                <th>Código</th>
                <th>Descrição</th>
                <th>#</th>
            </thead>
            <tbody>  
                @foreach($usuario->perfils as $p) 
                    <tr>
                        <td class="row" headers="Descrição">
                             {{ $p->id }}
                        </td>
                        <td class="row" headers="Descrição">
                             {{ $p->descricao }}
                        </td>
                        <td class="row" headers="Descrição">
                             {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente Deletar?')"]) !!}
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>  
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Cancel</a>
</div>

