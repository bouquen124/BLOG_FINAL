<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createt_modelosAPIRequest;
use App\Http\Requests\API\Updatet_modelosAPIRequest;
use App\Models\t_modelos;
use App\Repositories\t_modelosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class t_modelosController
 * @package App\Http\Controllers\API
 */

class t_modelosAPIController extends AppBaseController
{
    /** @var  t_modelosRepository */
    private $tModelosRepository;

    public function __construct(t_modelosRepository $tModelosRepo)
    {
        $this->tModelosRepository = $tModelosRepo;
    }

    /**
     * Display a listing of the t_modelos.
     * GET|HEAD /tModelos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tModelos = $this->tModelosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tModelos->toArray(), 'T Modelos retrieved successfully');
    }

    /**
     * Store a newly created t_modelos in storage.
     * POST /tModelos
     *
     * @param Createt_modelosAPIRequest $request
     *
     * @return Response
     */
    public function store(Createt_modelosAPIRequest $request)
    {
        $input = $request->all();

        $tModelos = $this->tModelosRepository->create($input);

        return $this->sendResponse($tModelos->toArray(), 'T Modelos saved successfully');
    }

    /**
     * Display the specified t_modelos.
     * GET|HEAD /tModelos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var t_modelos $tModelos */
        $tModelos = $this->tModelosRepository->find($id);

        if (empty($tModelos)) {
            return $this->sendError('T Modelos not found');
        }

        return $this->sendResponse($tModelos->toArray(), 'T Modelos retrieved successfully');
    }

    /**
     * Update the specified t_modelos in storage.
     * PUT/PATCH /tModelos/{id}
     *
     * @param int $id
     * @param Updatet_modelosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatet_modelosAPIRequest $request)
    {
        $input = $request->all();

        /** @var t_modelos $tModelos */
        $tModelos = $this->tModelosRepository->find($id);

        if (empty($tModelos)) {
            return $this->sendError('T Modelos not found');
        }

        $tModelos = $this->tModelosRepository->update($input, $id);

        return $this->sendResponse($tModelos->toArray(), 't_modelos updated successfully');
    }

    /**
     * Remove the specified t_modelos from storage.
     * DELETE /tModelos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var t_modelos $tModelos */
        $tModelos = $this->tModelosRepository->find($id);

        if (empty($tModelos)) {
            return $this->sendError('T Modelos not found');
        }

        $tModelos->delete();

        return $this->sendSuccess('T Modelos deleted successfully');
    }
}
