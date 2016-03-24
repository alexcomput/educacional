<table class="table table-responsive">
    <thead>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Rg</th>
        <th>Updated At</th>
        <th>Created At</th>
        <th>Sexo</th>
        <th>Raca</th>
        <th>Data Nascimento</th>
        <th>Estado Civil</th>
        <th>Naturalidade</th>
        <th>Nacionalidade</th>
        <th>Pai Nome</th>
        <th>Pai Cpf</th>
        <th>Mae Nome</th>
        <th>Mae Cpf</th>
        <th>Email</th>
        <th>Telefone Celular</th>
        <th>Telefone Residencial</th>
        <th>Telefone Comercial</th>
        <th>Ramal</th>
        <th>Fax</th>
        <th>Ativo</th>
        <th>Data Emissao Rf</th>
        <th>Endereco Id</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pessoas as $pessoa)
        <tr>
            <td>{!! $pessoa->nome !!}</td>
            <td>{!! $pessoa->cpf !!}</td>
            <td>{!! $pessoa->rg !!}</td>
            <td>{!! $pessoa->updated_at !!}</td>
            <td>{!! $pessoa->created_at !!}</td>
            <td>{!! $pessoa->sexo !!}</td>
            <td>{!! $pessoa->raca !!}</td>
            <td>{!! $pessoa->data_nascimento !!}</td>
            <td>{!! $pessoa->estado_civil !!}</td>
            <td>{!! $pessoa->naturalidade !!}</td>
            <td>{!! $pessoa->nacionalidade !!}</td>
            <td>{!! $pessoa->pai_nome !!}</td>
            <td>{!! $pessoa->pai_cpf !!}</td>
            <td>{!! $pessoa->mae_nome !!}</td>
            <td>{!! $pessoa->mae_cpf !!}</td>
            <td>{!! $pessoa->email !!}</td>
            <td>{!! $pessoa->telefone_celular !!}</td>
            <td>{!! $pessoa->telefone_residencial !!}</td>
            <td>{!! $pessoa->telefone_comercial !!}</td>
            <td>{!! $pessoa->ramal !!}</td>
            <td>{!! $pessoa->fax !!}</td>
            <td>{!! $pessoa->ativo !!}</td>
            <td>{!! $pessoa->data_emissao_rf !!}</td>
            <td>{!! $pessoa->endereco_id !!}</td>
            <td>{!! $pessoa->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['pessoas.destroy', $pessoa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pessoas.show', [$pessoa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pessoas.edit', [$pessoa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>