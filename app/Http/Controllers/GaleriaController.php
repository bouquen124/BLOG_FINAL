<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGaleriaRequest;
use App\Http\Requests\UpdateGaleriaRequest;
use App\Repositories\GaleriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Ilustrable;

class GaleriaController extends AppBaseController
{
    /** @var  GaleriaRepository */
    private $galeriaRepository;

    public function __construct(GaleriaRepository $galeriaRepo)
    {
        $this->galeriaRepository = $galeriaRepo;
    }

    /**
     * Display a listing of the Galeria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $galerias = $this->galeriaRepository->all();

        return view('galerias.index')
            ->with('galerias', $galerias);
    }

    /**
     * Show the form for creating a new Galeria.
     *
     * @return Response
     */
    public function create()
    {

        $ilustrable= Ilustrable::pluck('id','url');
        return view('galerias.create',compact('ilustrable'));
    }

    /**
     * Store a newly created Galeria in storage.
     *
     * @param CreateGaleriaRequest $request
     *
     * @return Response
     */
    public function store(CreateGaleriaRequest $request)
    {
        $input = $request->all();

        $galeria = $this->galeriaRepository->create($input);

        Flash::success('Galeria saved successfully.');

        return redirect(route('galerias.index'));
    }

    /**
     * Display the specified Galeria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            Flash::error('Galeria not found');

            return redirect(route('galerias.index'));
        }

        return view('galerias.show')->with('galeria', $galeria);
    }

    /**
     * Show the form for editing the specified Galeria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            Flash::error('Galeria not found');

            return redirect(route('galerias.index'));
        }

        return view('galerias.edit')->with('galeria', $galeria);
    }

    /**
     * Update the specified Galeria in storage.
     *
     * @param int $id
     * @param UpdateGaleriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGaleriaRequest $request)
    {
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            Flash::error('Galeria not found');

            return redirect(route('galerias.index'));
        }

        $galeria = $this->galeriaRepository->update($request->all(), $id);

        Flash::success('Galeria updated successfully.');

        return redirect(route('galerias.index'));
    }

    /**
     * Remove the specified Galeria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            Flash::error('Galeria not found');

            return redirect(route('galerias.index'));
        }

        $this->galeriaRepository->delete($id);

        Flash::success('Galeria deleted successfully.');

        return redirect(route('galerias.index'));
    }
}
