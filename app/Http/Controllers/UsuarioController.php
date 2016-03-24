<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Pessoa;
use App\Models\Perfil;
use App\Models\Endereco;


class UsuarioController extends AppBaseController
{
    /** @var  UsuarioRepository */
    private $usuarioRepository;

    private $pessoa;
    private $perfil;
    private $endereco;

    public function __construct(UsuarioRepository $usuarioRepo,Pessoa $pessoa,
    Perfil $perfil, Endereco $endereco)
    {
        $this->usuarioRepository = $usuarioRepo;
        $this->pessoa = $pessoa;        
        $this->perfil = $perfil;        
        $this->endereco = $endereco;        
    }

    /**
     * Display a listing of the Usuario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usuarioRepository->pushCriteria(new RequestCriteria($request));
        $usuarios = $this->usuarioRepository->all();

        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuario.
     *
     * @return Response
     */
    public function create()
    {
        //$pessoa= new Pessoa();
        return view('usuarios.create')->with('pessoa',$this->pessoa)->with('endereco',$this->endereco);
    }

    /**
     * Store a newly created Usuario in storage.
     *
     * @param CreateUsuarioRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuarioRequest $request, Endereco $endereco)
    { 
        
        $input = $request->all();
        

        $input['data_nascimento'] = date("Y-m-d",strtotime(str_replace('/','-',$input['data_nascimento'])));  
    

        //dd($input['data_nascimento']);
        //Salvva o Endereço     
        $this->endereco = $endereco->create($input);
        $input['endereco_id'] = $this->endereco->id;
       
        $this->pessoa = Pessoa::create($input);
        $input['pessoa_id'] = $this->pessoa->id;

        $usuario = $this->usuarioRepository->create($input);

        Flash::success('Usuario saved successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified Usuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        return view('usuarios.show')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified Usuario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);
         $perfil  = Perfil::lists('descricao', 'id');
        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }        
        return view('usuarios.edit')->with('usuario', $usuario)
        ->with('pessoa',$usuario->pessoa)
        ->with('perfil',$perfil)
        ->with('endereco',$usuario->pessoa->endereco);
    }

    /**
     * Update the specified Usuario in storage.
     *
     * @param  int              $id
     * @param UpdateUsuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuarioRequest $request)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        $usuario = $this->usuarioRepository->update($request->all(), $id);

        Flash::success('Usuario updated successfully.');

        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified Usuario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuario = $this->usuarioRepository->findWithoutFail($id);

        if (empty($usuario)) {
            Flash::error('Usuario not found');

            return redirect(route('usuarios.index'));
        }

        $this->usuarioRepository->delete($id);

        Flash::success('Usuario deleted successfully.');

        return redirect(route('usuarios.index'));
    }
}
