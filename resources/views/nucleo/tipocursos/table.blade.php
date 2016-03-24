<table class="table table-responsive">
    <thead>
        <th>Descricao</th>
        <th>Obs</th> 
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoCursos as $tipoCurso)
        <tr>
            <td>{!! $tipoCurso->descricao !!}</td>
            <td>{!! $tipoCurso->obs !!}</td> 
            <td>
                {!! Form::open(['route' => ['tipo-cursos.destroy', $tipoCurso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipo-cursos.show', [$tipoCurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipo-cursos.edit', [$tipoCurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>