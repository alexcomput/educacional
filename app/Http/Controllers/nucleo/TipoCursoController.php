<?php

namespace App\Http\Controllers\nucleo;

use App\Http\Requests;
use App\Http\Requests\nucleo\CreateTipoCursoRequest;
use App\Http\Requests\nucleo\UpdateTipoCursoRequest;
use App\Repositories\nucleo\TipoCursoRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoCursoController extends AppBaseController
{
    /** @var  TipoCursoRepository */
    private $tipoCursoRepository;

    public function __construct(TipoCursoRepository $tipoCursoRepo)
    {
        $this->tipoCursoRepository = $tipoCursoRepo;
    }

    /**
     * Display a listing of the TipoCurso.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoCursoRepository->pushCriteria(new RequestCriteria($request));
        $tipoCursos = $this->tipoCursoRepository->all();

        return view('nucleo\tipoCursos.index')
            ->with('tipoCursos', $tipoCursos);
    }

    /**
     * Show the form for creating a new TipoCurso.
     *
     * @return Response
     */
    public function create()
    {
        return view('nucleo\tipoCursos.create');
    }

    /**
     * Store a newly created TipoCurso in storage.
     *
     * @param CreateTipoCursoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoCursoRequest $request)
    {
       
        $input = $request->all();

        $tipoCurso = $this->tipoCursoRepository->create($input);

        Flash::success('Tipo Cursos salvo com Sucesso.');

        return redirect(route('tipo-cursos.index'));
    }

    /**
     * Display the specified TipoCurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoCurso = $this->tipoCursoRepository->findWithoutFail($id);

        if (empty($tipoCurso)) {
            Flash::error('TipoCurso not found');

            return redirect(route('tipo-cursos.index'));
        }

        return view('nucleo\tipoCursos.show')->with('tipoCurso', $tipoCurso);
    }

    /**
     * Show the form for editing the specified TipoCurso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoCurso = $this->tipoCursoRepository->findWithoutFail($id);

        if (empty($tipoCurso)) {
            Flash::error('Tipo Cursos não encontrado');

            return redirect(route('tipo-cursos.index'));
        }

        return view('nucleo\tipoCursos.edit')->with('tipoCurso', $tipoCurso);
    }

    /**
     * Update the specified TipoCurso in storage.
     *
     * @param  int              $id
     * @param UpdateTipoCursoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoCursoRequest $request)
    {
        $tipoCurso = $this->tipoCursoRepository->findWithoutFail($id);

        if (empty($tipoCurso)) {
            Flash::error('TipoCurso not found');

            return redirect(route('tipo-cursos.index'));
        }

        $tipoCurso = $this->tipoCursoRepository->update($request->all(), $id);

        Flash::success('TipoCurso updated successfully.');

        return redirect(route('tipo-cursos.index'));
    }

    /**
     * Remove the specified TipoCurso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoCurso = $this->tipoCursoRepository->findWithoutFail($id);

        if (empty($tipoCurso)) {
            Flash::error('TipoCurso not found');

            return redirect(route('tipo-cursos.index'));
        }

        $this->tipoCursoRepository->delete($id);

        Flash::success('TipoCurso deleted successfully.');

        return redirect(route('tipo-cursos.index'));
    }
}
