<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAliadoAPIRequest;
use App\Http\Requests\API\UpdateAliadoAPIRequest;
use App\Models\Aliado;
use App\Repositories\AliadoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AliadoController
 * @package App\Http\Controllers\API
 */

class AliadoAPIController extends AppBaseController
{
    /** @var  AliadoRepository */
    private $aliadoRepository;

    public function __construct(AliadoRepository $aliadoRepo)
    {
        $this->aliadoRepository = $aliadoRepo;
    }

    /**
     * Display a listing of the Aliado.
     * GET|HEAD /aliados
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $aliados = $this->aliadoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($aliados->toArray(), 'Aliados retrieved successfully');
    }

    /**
     * Store a newly created Aliado in storage.
     * POST /aliados
     *
     * @param CreateAliadoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAliadoAPIRequest $request)
    {
        $input = $request->all();

        $aliado = $this->aliadoRepository->create($input);

        return $this->sendResponse($aliado->toArray(), 'Aliado saved successfully');
    }

    /**
     * Display the specified Aliado.
     * GET|HEAD /aliados/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Aliado $aliado */
        $aliado = $this->aliadoRepository->find($id);

        if (empty($aliado)) {
            return $this->sendError('Aliado not found');
        }

        return $this->sendResponse($aliado->toArray(), 'Aliado retrieved successfully');
    }

    /**
     * Update the specified Aliado in storage.
     * PUT/PATCH /aliados/{id}
     *
     * @param int $id
     * @param UpdateAliadoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAliadoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Aliado $aliado */
        $aliado = $this->aliadoRepository->find($id);

        if (empty($aliado)) {
            return $this->sendError('Aliado not found');
        }

        $aliado = $this->aliadoRepository->update($input, $id);

        return $this->sendResponse($aliado->toArray(), 'Aliado updated successfully');
    }

    /**
     * Remove the specified Aliado from storage.
     * DELETE /aliados/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Aliado $aliado */
        $aliado = $this->aliadoRepository->find($id);

        if (empty($aliado)) {
            return $this->sendError('Aliado not found');
        }

        $aliado->delete();

        return $this->sendSuccess('Aliado deleted successfully');
    }
}
