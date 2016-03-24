<?php

namespace App\Http\Controllers\nucleo;

use App\Http\Requests;
use App\Http\Requests\nucleo\CreateColigadaRequest;
use App\Http\Requests\nucleo\UpdateColigadaRequest;
use App\Repositories\nucleo\ColigadaRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ColigadaController extends AppBaseController
{
    /** @var  ColigadaRepository */
    private $coligadaRepository;

    public function __construct(ColigadaRepository $coligadaRepo)
    {
        $this->coligadaRepository = $coligadaRepo;
    }

    /**
     * Display a listing of the Coligada.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->coligadaRepository->pushCriteria(new RequestCriteria($request));
        $coligadas = $this->coligadaRepository->all();

        return view('nucleo\coligadas.index')
            ->with('coligadas', $coligadas);
    }

    /**
     * Show the form for creating a new Coligada.
     *
     * @return Response
     */
    public function create()
    {
        return view('nucleo\coligadas.create');
    }

    /**
     * Store a newly created Coligada in storage.
     *
     * @param CreateColigadaRequest $request
     *
     * @return Response
     */
    public function store(CreateColigadaRequest $request)
    {
        $input = $request->all();
       // dd($input);
        $coligada = $this->coligadaRepository->create($input);

        Flash::success('Coligada saved successfully.');

        return redirect(route('coligadas.index'));
    }

    /**
     * Display the specified Coligada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coligada = $this->coligadaRepository->findWithoutFail($id);

        if (empty($coligada)) {
            Flash::error('Coligada not found');

            return redirect(route('nucleo\coligadas.index'));
        }

        return view('nucleo\coligadas.show')->with('coligada', $coligada);
    }

    /**
     * Show the form for editing the specified Coligada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coligada = $this->coligadaRepository->findWithoutFail($id);

        if (empty($coligada)) {
            Flash::error('Coligada not found');

            return redirect(route('nucleo\coligadas.index'));
        }

        return view('nucleo\coligadas.edit')->with('coligada', $coligada);
    }

    /**
     * Update the specified Coligada in storage.
     *
     * @param  int              $id
     * @param UpdateColigadaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateColigadaRequest $request)
    {
        $coligada = $this->coligadaRepository->findWithoutFail($id);

        if (empty($coligada)) {
            Flash::error('Coligada not found');

            return redirect(route('nucleo\coligadas.index'));
        }

        $coligada = $this->coligadaRepository->update($request->all(), $id);

        Flash::success('Coligada updated successfully.');

        return redirect(route('coligadas.index'));
    }

    /**
     * Remove the specified Coligada from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coligada = $this->coligadaRepository->findWithoutFail($id);

        if (empty($coligada)) {
            Flash::error('Coligada not found');

            return redirect(route('coligadas.index'));
        }

        $this->coligadaRepository->delete($id);

        Flash::success('Coligada deleted successfully.');

        return redirect(route('coligadas.index'));
    }
}
