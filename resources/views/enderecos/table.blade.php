<table class="table table-responsive">
    <thead>
        <th>Logradouro</th>
        <th>Numero</th>
        <th>Cep</th>
        <th>Bairro</th> 
        <th>Cidade</th>
        <th>Uf</th>
        <th>Complemento</th> 
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($enderecos as $endereco)
        <tr>
            <td>{!! $endereco->logradouro !!}</td>
            <td>{!! $endereco->numero !!}</td>
            <td>{!! $endereco->cep !!}</td>
            <td>{!! $endereco->bairro !!}</td> 
            <td>{!! $endereco->cidade !!}</td>
            <td>{!! $endereco->uf !!}</td>
            <td>{!! $endereco->complemento !!}</td> 
            <td>
                {!! Form::open(['route' => ['enderecos.destroy', $endereco->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('enderecos.show', [$endereco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('enderecos.edit', [$endereco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>