<table class="table table-responsive table-bordered table-striped table-hover">
    <thead>
        <th>Nome</th>  
        <th>CPF</th>
        <th>Login</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{!! $usuario->pessoa->nome !!}</td> 
            <td>{!! $usuario->pessoa->cpf !!}</td>  
            <td>{!! $usuario->login !!}</td>
            <td>
                {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuarios.show', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usuarios.edit', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash "></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>