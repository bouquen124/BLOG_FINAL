<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAliadoRequest;
use App\Http\Requests\UpdateAliadoRequest;
use App\Repositories\AliadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Estado;
use App\Models\Aliado;
use App\Models\Ilustrable;
class AliadoUserController extends AppBaseController
{
    /** @var  AliadoRepository */
    private $aliadoRepository;

    public function __construct(AliadoRepository $aliadoRepo)
    {
        $this->aliadoRepository = $aliadoRepo;
    }

    /**
     * Display a listing of the Aliado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        
        //$posts = Post::orderby('id','desc')->paginate(4);
        //$post = Post::find($id);
        //return view('ux.post.index', compact('posts','post_derecha'));

        $aliados = Aliado::orderby('id', 'desc')->paginate(6);
       
        return view('ux.aliado.index',compact('aliados','imagenes'));
    }

    /**
     * Show the form for creating a new Aliado.
     *
     * @return Response
     */
    public function create()
    {
        $estados =Estado::pluck('nombre','id');
        return view('ux.aliado.create',compact('estados'));
    }

    /**
     * Store a newly created Aliado in storage.
     *
     * @param CreateAliadoRequest $request
     *
     * @return Response
     */
    public function store(CreateAliadoRequest $request)
    {
        $input = $request->all();

        $aliado = $this->aliadoRepository->create($input);

        Flash::success('Aliado saved successfully.');

        return redirect(route('aliado.index'));
    }

    /**
     * Display the specified Aliado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        
        $aliados = Aliado::get()->take(6);
        $aliado = $this->aliadoRepository->find($id);
        //$aliados = Aliado::get()->take(4);
        $imagenes = Ilustrable::where('ilustrable_id', $id)->where('ilustrable_type', 'App\Models\Aliado')->paginate(20);

        if (empty($aliados)) {
            Flash::error('Aliado not found');

            return redirect(route('aliado.index'));
        }

        return view('ux.aliado.show', compact('aliado', 'aliados','imagenes'));
    }

    /**
     * Show the form for editing the specified Aliado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aliado = $this->aliadoRepository->find($id);
        $estados =Estado::pluck('nombre','id');

        if (empty($aliado)) {
            Flash::error('Aliado not found');

            return redirect(route('aliado.show', $aliado));
        }

        return view('ux.aliado.edit', compact('aliado', 'estados'));
    }

    /**
     * Update the specified Aliado in storage.
     *
     * @param int $id
     * @param UpdateAliadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAliadoRequest $request)
    {
        $aliado = $this->aliadoRepository->find($id);

        if (empty($aliado)) {
            Flash::error('Aliado not found');

            return redirect(route('aliado.show', $aliado));
        }

        $aliado = $this->aliadoRepository->update($request->all(), $id);

        Flash::success('Aliado updated successfully.');

        return redirect(route('aliado.show', $aliado));
    }

    /**
     * Remove the specified Aliado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aliado = $this->aliadoRepository->find($id);

        if (empty($aliado)) {
            Flash::error('Aliado not found');

            return redirect(route('aliado.index'));
        }

        $this->aliadoRepository->delete($id);

        Flash::success('Aliado deleted successfully.');

        return redirect(route('aliado.index'));
    }
}
