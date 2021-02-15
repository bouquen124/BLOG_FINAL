<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateServicioAPIRequest;
use App\Http\Requests\API\UpdateServicioAPIRequest;
use App\Models\Servicio;
use App\Repositories\ServicioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ServicioController
 * @package App\Http\Controllers\API
 */

class ServicioAPIController extends AppBaseController
{
    /** @var  ServicioRepository */
    private $servicioRepository;

    public function __construct(ServicioRepository $servicioRepo)
    {
        $this->servicioRepository = $servicioRepo;
    }

    /**
     * Display a listing of the Servicio.
     * GET|HEAD /servicios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $servicios = $this->servicioRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($servicios->toArray(), 'Servicios retrieved successfully');
    }

    /**
     * Store a newly created Servicio in storage.
     * POST /servicios
     *
     * @param CreateServicioAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateServicioAPIRequest $request)
    {
        $input = $request->all();

        $servicio = $this->servicioRepository->create($input);

        return $this->sendResponse($servicio->toArray(), 'Servicio saved successfully');
    }

    /**
     * Display the specified Servicio.
     * GET|HEAD /servicios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Servicio $servicio */
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            return $this->sendError('Servicio not found');
        }

        return $this->sendResponse($servicio->toArray(), 'Servicio retrieved successfully');
    }

    /**
     * Update the specified Servicio in storage.
     * PUT/PATCH /servicios/{id}
     *
     * @param int $id
     * @param UpdateServicioAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicioAPIRequest $request)
    {
        $input = $request->all();

        /** @var Servicio $servicio */
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            return $this->sendError('Servicio not found');
        }

        $servicio = $this->servicioRepository->update($input, $id);

        return $this->sendResponse($servicio->toArray(), 'Servicio updated successfully');
    }

    /**
     * Remove the specified Servicio from storage.
     * DELETE /servicios/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Servicio $servicio */
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            return $this->sendError('Servicio not found');
        }

        $servicio->delete();

        return $this->sendSuccess('Servicio deleted successfully');
    }
}
