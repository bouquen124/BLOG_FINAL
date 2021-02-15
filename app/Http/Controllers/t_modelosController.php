<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createt_modelosRequest;
use App\Http\Requests\Updatet_modelosRequest;
use App\Repositories\t_modelosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;

class t_modelosController extends AppBaseController
{
    /** @var  t_modelosRepository */
    private $tModelosRepository;

    public function __construct(t_modelosRepository $tModelosRepo)
    {
        $this->tModelosRepository = $tModelosRepo;
    }

    /**
     * Display a listing of the t_modelos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tModelos = $this->tModelosRepository->paginate(2);

        return view('t_modelos.index')
            ->with('tModelos', $tModelos);
    }

    /**
     * Show the form for creating a new t_modelos.
     *
     * @return Response
     */
    public function create()
    {
        return view('t_modelos.create');
    }

    /**
     * Store a newly created t_modelos in storage.
     *
     * @param Createt_modelosRequest $request
     *
     * @return Response
     */
    public function store(Createt_modelosRequest $request)
    {
        $input = $request->all();
        $tModelos = $this->tModelosRepository->create($input);
       if ($request->file('modelo')) {
           $path = Storage::disk('ftp')->put('Modelos',$request->file('modelo'));
           $tModelos->fill(['modelo'=>$path])->save();
           # code...
       }

       Flash::success('Modelo creado correctamente');

       return redirect(route('tModelos.index'));
   }
   

    /**
     * Display the specified t_modelos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tModelos = $this->tModelosRepository->find($id);

        if (empty($tModelos)) {
            Flash::error('T Modelos not found');

            return redirect(route('tModelos.index'));
        }

        return view('t_modelos.show')->with('tModelos', $tModelos);
    }

    /**
     * Show the form for editing the specified t_modelos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tModelos = $this->tModelosRepository->find($id);

        if (empty($tModelos)) {
            Flash::error('T Modelos not found');

            return redirect(route('tModelos.index'));
        }

        return view('t_modelos.edit')->with('tModelos', $tModelos);
    }

    /**
     * Update the specified t_modelos in storage.
     *
     * @param int $id
     * @param Updatet_modelosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatet_modelosRequest $request)
    {
        $tModelos = $this->tModelosRepository->find($id);
        $oldModelo = $tModelos->modelo;
        $tModelos = $this->tModelosRepository->update($request->all(), $id);


         if ($request->file('modelo')) {
            Storage::disk('ftp')->delete($oldModelo);
            $path = Storage::disk('ftp')->put('Modelos',$request->file('modelo'));
            $tModelos->fill(['modelo'=>$path])->save();
            # code...
           //  
        }
        

        Flash::success('Modelo actualizado correctamente');

        return redirect(route('tModelos.index'));
    }

    /**
     * Remove the specified t_modelos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tModelos = $this->tModelosRepository->find($id);

        if (empty($tModelos)) {
            Flash::error('T Modelos not found');

            return redirect(route('tModelos.index'));
        }

        $this->tModelosRepository->delete($id);

        Flash::success('T Modelos deleted successfully.');

        return redirect(route('tModelos.index'));
    }
}
