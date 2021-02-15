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

class IlustrableUserControler extends Controller
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

        return view('ux.ilustrables.index')
            ->with('ilustrables', $ilustrables);
    }






    /**
     * Show the form for creating a new Ilustrable.
     *
     * @return Response
     */
    public function create()
    {
        return view('ux.ilustrables.create');
    }

    /**
     * Store a newly created Ilustrable in storage.
     *
     * @param CreateIlustrableRequest $request
     *
     * @return Response
     */
    public function store(CreateIlustrableRequest $request)
    {
        $input = $request->all();

        $ilustrable = $this->ilustrableRepository->create($input);

        if ($request->file('url')) {
            $archivo = $request->file('url');

            $pathOriginal = Storage::disk('s3')->put('imagenes', $archivo, 'public');
            
            $ilustrable->fill(['url'=>env('AWS_URL').$pathOriginal])->save();
            
        }

        $ilustrable->ilustrable_type = "App\Models\\".$request->ilustrable_type;
        $ilustrable->save();

        Flash::success('Ilustrable saved successfully.');


        return redirect(url($request->back));
    }
    public function storelalo(Request $request)
    {
        $input = $request->all();
        $imagen = $this->imagenRepository->create($input);
        $original = Image::make($request->file('url')->getRealPath())->encode('png');
        $pequeno = Image::make($request->file('url')->getRealPath())
        ->resize(256,null, function ($a)
        {
            $a->aspectRatio();
        })->encode('png');
        
        if ($request->file('url')) {
            $tiempo = time();
            $pathOriginal = Storage::disk('s3')->put('/'.$tiempo.'_o.png',(string) $original->encode(),'public');
            $pathPequeno = Storage::disk('s3')->put('/'.$tiempo.'_s.png',(string) $pequeno->encode(),'public');
           
            $imagen->fill(['url'=>$tiempo.'_o.png','urls'=>$tiempo.'_s.png'])->save();
            
        }
        Flash::success('Imagen saved successfully.');

        return redirect()->back();
    }



    



}
