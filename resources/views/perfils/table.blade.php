<table class="table table-responsive">
    <thead>
        <th>Descricao</th>
        <th>Obs</th>
        <th>Deleted At</th>
        <th>Updated At</th>
        <th>Created At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($perfils as $perfil)
        <tr>
            <td>{!! $perfil->descricao !!}</td>
            <td>{!! $perfil->obs !!}</td>
            <td>{!! $perfil->deleted_at !!}</td>
            <td>{!! $perfil->updated_at !!}</td>
            <td>{!! $perfil->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['perfils.destroy', $perfil->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('perfils.show', [$perfil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('perfils.edit', [$perfil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>