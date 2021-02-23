<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateIlustrableRequest;
use App\Http\Requests\UpdateIlustrableRequest;
use App\Repositories\IlustrableRepository;
use App\Http\Controllers\AppBaseController;

use Flash;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;



class GaleriaUserController extends Controller
{
    /** @var  IlustrableRepository */
    private $ilustrableRepository;

    public function __construct(IlustrableRepository $ilustrableRepo)
    {
        $this->ilustrableRepository = $ilustrableRepo;
    }

 /**
    * Display a listing of the Ilustrable.
    *
    * @param Request $request
    *
    * @return Response
    */
   public function index(Request $request)
   {
       $ilustrables = $this->ilustrableRepository->all();

       return view('ux.galeria.index')
           ->with('ilustrables', $ilustrables);
   }



/**
     * Display the specified Ilustrable.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ilustrable = $this->ilustrableRepository->find($id);

        if (empty($ilustrable)) {
            Flash::error('Ilustrable not found');

            return redirect(route('ux.galeria.index'));
        }
        
        return view('ux.galeria.show')->with('ilustrable', $ilustrable);
    }


}
