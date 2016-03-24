<table class="table table-responsive">
    <thead>
        <th>Nome</th>
        <th>Cnpj</th>
        <th>Razao Social</th>
        <th>Telefone</th>
        <th>Obs</th> 
        <th>Endereco Id</th> 
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($coligadas as $coligada)
        <tr>
            <td>{!! $coligada->nome !!}</td>
            <td>{!! $coligada->cnpj !!}</td>
            <td>{!! $coligada->razao_social !!}</td>
            <td>{!! $coligada->telefone !!}</td>
            <td>{!! $coligada->obs !!}</td> 
            <td>{!! $coligada->endereco_id !!}</td> 
            <td>
                {!! Form::open(['route' => ['coligadas.destroy', $coligada->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('coligadas.show', [$coligada->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('coligadas.edit', [$coligada->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>