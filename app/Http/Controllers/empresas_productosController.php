<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createempresas_productosRequest;
use App\Http\Requests\Updateempresas_productosRequest;
use App\Repositories\empresas_productosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class empresas_productosController extends AppBaseController
{
    /** @var  empresas_productosRepository */
    private $empresasProductosRepository;

    public function __construct(empresas_productosRepository $empresasProductosRepo)
    {
        $this->empresasProductosRepository = $empresasProductosRepo;
    }

    /**
     * Display a listing of the empresas_productos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $empresasProductos = $this->empresasProductosRepository->paginate(10);

        return view('empresas_productos.index')
            ->with('empresasProductos', $empresasProductos);
    }

    /**
     * Show the form for creating a new empresas_productos.
     *
     * @return Response
     */
    public function create()
    {
        return view('empresas_productos.create');
    }

    /**
     * Store a newly created empresas_productos in storage.
     *
     * @param Createempresas_productosRequest $request
     *
     * @return Response
     */
    public function store(Createempresas_productosRequest $request)
    {
        $input = $request->all();

        $empresasProductos = $this->empresasProductosRepository->create($input);

        Flash::success('Empresas Productos saved successfully.');

        return redirect(route('empresasProductos.index'));
    }

    /**
     * Display the specified empresas_productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empresasProductos = $this->empresasProductosRepository->find($id);

        if (empty($empresasProductos)) {
            Flash::error('Empresas Productos not found');

            return redirect(route('empresasProductos.index'));
        }

        return view('empresas_productos.show')->with('empresasProductos', $empresasProductos);
    }

    /**
     * Show the form for editing the specified empresas_productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empresasProductos = $this->empresasProductosRepository->find($id);

        if (empty($empresasProductos)) {
            Flash::error('Empresas Productos not found');

            return redirect(route('empresasProductos.index'));
        }

        return view('empresas_productos.edit')->with('empresasProductos', $empresasProductos);
    }

    /**
     * Update the specified empresas_productos in storage.
     *
     * @param int $id
     * @param Updateempresas_productosRequest $request
     *
     * @return Response
     */
    public function update($id, Updateempresas_productosRequest $request)
    {
        $empresasProductos = $this->empresasProductosRepository->find($id);

        if (empty($empresasProductos)) {
            Flash::error('Empresas Productos not found');

            return redirect(route('empresasProductos.index'));
        }

        $empresasProductos = $this->empresasProductosRepository->update($request->all(), $id);

        Flash::success('Empresas Productos updated successfully.');

        return redirect(route('empresasProductos.index'));
    }

    /**
     * Remove the specified empresas_productos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empresasProductos = $this->empresasProductosRepository->find($id);

        if (empty($empresasProductos)) {
            Flash::error('Empresas Productos not found');

            return redirect(route('empresasProductos.index'));
        }

        $this->empresasProductosRepository->delete($id);

        Flash::success('Empresas Productos deleted successfully.');

        return redirect(route('empresasProductos.index'));
    }
}
