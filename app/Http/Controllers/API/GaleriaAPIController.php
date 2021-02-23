<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGaleriaAPIRequest;
use App\Http\Requests\API\UpdateGaleriaAPIRequest;
use App\Models\Galeria;
use App\Repositories\GaleriaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class GaleriaController
 * @package App\Http\Controllers\API
 */

class GaleriaAPIController extends AppBaseController
{
    /** @var  GaleriaRepository */
    private $galeriaRepository;

    public function __construct(GaleriaRepository $galeriaRepo)
    {
        $this->galeriaRepository = $galeriaRepo;
    }

    /**
     * Display a listing of the Galeria.
     * GET|HEAD /galerias
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $galerias = $this->galeriaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($galerias->toArray(), 'Galerias retrieved successfully');
    }

    /**
     * Store a newly created Galeria in storage.
     * POST /galerias
     *
     * @param CreateGaleriaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateGaleriaAPIRequest $request)
    {
        $input = $request->all();

        $galeria = $this->galeriaRepository->create($input);

        return $this->sendResponse($galeria->toArray(), 'Galeria saved successfully');
    }

    /**
     * Display the specified Galeria.
     * GET|HEAD /galerias/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Galeria $galeria */
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            return $this->sendError('Galeria not found');
        }

        return $this->sendResponse($galeria->toArray(), 'Galeria retrieved successfully');
    }

    /**
     * Update the specified Galeria in storage.
     * PUT/PATCH /galerias/{id}
     *
     * @param int $id
     * @param UpdateGaleriaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGaleriaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Galeria $galeria */
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            return $this->sendError('Galeria not found');
        }

        $galeria = $this->galeriaRepository->update($input, $id);

        return $this->sendResponse($galeria->toArray(), 'Galeria updated successfully');
    }

    /**
     * Remove the specified Galeria from storage.
     * DELETE /galerias/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Galeria $galeria */
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            return $this->sendError('Galeria not found');
        }

        $galeria->delete();

        return $this->sendSuccess('Galeria deleted successfully');
    }
}
