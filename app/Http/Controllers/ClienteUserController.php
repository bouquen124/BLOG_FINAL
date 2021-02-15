<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Repositories\ClienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Routing\Route;
use App\Models\Ilustrable;

use App\Models\Estado;
class ClienteUserController extends Controller
{
    
    /** @var  ClienteRepository */
    private $clienteRepository;

    public function __construct(ClienteRepository $clienteRepo)
    {
        $this->clienteRepository = $clienteRepo;
    }

    /**
     * Display a listing of the Cliente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clientes = $this->clienteRepository->all();

        return view('ux.cliente.index')
            ->with('clientes', $clientes);
    }

  /**
     * Show the form for creating a new Cliente.
     *
     * @return Response
     */
    public function create()
    {
        $estados =Estado::pluck('nombre','id');
        return view('ux.cliente.create',compact('estados'));
    }

    /**
     * Store a newly created Cliente in storage.
     *
     * @param CreateClienteRequest $request
     *
     * @return Response
     */
    public function store(CreateClienteRequest $request)
    {
        $input = $request->all();

        $cliente = $this->clienteRepository->create($input);

        Flash::success('Cliente saved successfully.');

        return redirect(route('cliente_user.index'));
    }

    /**
     * Display the specified Cliente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('cliente_user.index'));
        }
        $imagenes = Ilustrable::where('ilustrable_id', $id)->where('ilustrable_type', 'App\Models\Aliado')->paginate(20);

        return view('ux.cliente.show',compact('cliente','imagenes'));
    }


    /**
     * Show the form for editing the specified Cliente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cliente = $this->clienteRepository->find($id);
        $estados =Estado::pluck('nombre','id');

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('cliente_user.index'));
        }

        return view('ux.cliente.edit',compact('cliente','estados'));
    }

    /**
     * Update the specified Cliente in storage.
     *
     * @param int $id
     * @param UpdateClienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClienteRequest $request)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('cliente_user.index'));
        }

        $cliente = $this->clienteRepository->update($request->all(), $id);

        Flash::success('Cliente updated successfully.');

        return redirect(route('cliente_user.index'));
    }









    
}
