<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServicioRequest;
use App\Http\Requests\UpdateServicioRequest;
use App\Repositories\ServicioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Estado;
use App\Models\Categoria;

use App\Models\Ilustrable;

class ServicioUserController extends Controller
{
 
     /** @var  ServicioRepository */
     private $servicioRepository;

     public function __construct(ServicioRepository $servicioRepo)
     {
         $this->servicioRepository = $servicioRepo;
     }

     /**
     * Display a listing of the Servicio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $servicios = $this->servicioRepository->all();

        return view('ux.servicio.index')
            ->with('servicios', $servicios);
    }
    /**
     * Show the form for creating a new Servicio.
     *
     * @return Response
     */
    public function create()
    {
        $estados =Estado::pluck('nombre','id');
        $categorias=Categoria::pluck('nombre','id');
        return view('ux.servicio.create',compact('estados','categorias'));
    }

    
   /**
     * Store a newly created Servicio in storage.
     *
     * @param CreateServicioRequest $request
     *
     * @return Response
     */
    public function store(CreateServicioRequest $request)
    {
        $input = $request->all();

        $servicio = $this->servicioRepository->create($input);

        Flash::success('Servicio saved successfully.');

        return redirect(route('servicio_user.index'));
    }



   /**
     * Display the specified Servicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicio_user.index'));

        }
        $imagenes = Ilustrable::where('ilustrable_id', $id)->where('ilustrable_type', 'App\Models\Servicio')->paginate(20);


        return view('ux.servicio.show',compact('servicio','imagenes'));
    }


        /**
     * Show the form for editing the specified Servicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicio = $this->servicioRepository->find($id);
        
        $estados =Estado::pluck('nombre','id');
        $categorias=Categoria::pluck('nombre','id');
        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicio_user.index'));
        }

        return view('ux.servicio.edit',compact('servicio','estados','categorias'));
    }
   /**
     * Update the specified Servicio in storage.
     *
     * @param int $id
     * @param UpdateServicioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicioRequest $request)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicio_user.index'));
        }

        $servicio = $this->servicioRepository->update($request->all(), $id);

        Flash::success('Servicio updated successfully.');

        return redirect(route('servicio_user.index'));
    }

  /**
     * Remove the specified Servicio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicio_user.index'));
        }

        $this->servicioRepository->delete($id);

        Flash::success('Servicio deleted successfully.');

        return redirect(route('servicio_user.index'));
    }


    
}
