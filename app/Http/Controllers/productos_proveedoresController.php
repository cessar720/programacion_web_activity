<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createproductos_proveedoresRequest;
use App\Http\Requests\Updateproductos_proveedoresRequest;
use App\Repositories\productos_proveedoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class productos_proveedoresController extends AppBaseController
{
    /** @var  productos_proveedoresRepository */
    private $productosProveedoresRepository;

    public function __construct(productos_proveedoresRepository $productosProveedoresRepo)
    {
        $this->productosProveedoresRepository = $productosProveedoresRepo;
    }

    /**
     * Display a listing of the productos_proveedores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productosProveedores = $this->productosProveedoresRepository->paginate(10);

        return view('productos_proveedores.index')
            ->with('productosProveedores', $productosProveedores);
    }

    /**
     * Show the form for creating a new productos_proveedores.
     *
     * @return Response
     */
    public function create()
    {
        return view('productos_proveedores.create');
    }

    /**
     * Store a newly created productos_proveedores in storage.
     *
     * @param Createproductos_proveedoresRequest $request
     *
     * @return Response
     */
    public function store(Createproductos_proveedoresRequest $request)
    {
        $input = $request->all();

        $productosProveedores = $this->productosProveedoresRepository->create($input);

        Flash::success('Productos Proveedores saved successfully.');

        return redirect(route('productosProveedores.index'));
    }

    /**
     * Display the specified productos_proveedores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productosProveedores = $this->productosProveedoresRepository->find($id);

        if (empty($productosProveedores)) {
            Flash::error('Productos Proveedores not found');

            return redirect(route('productosProveedores.index'));
        }

        return view('productos_proveedores.show')->with('productosProveedores', $productosProveedores);
    }

    /**
     * Show the form for editing the specified productos_proveedores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productosProveedores = $this->productosProveedoresRepository->find($id);

        if (empty($productosProveedores)) {
            Flash::error('Productos Proveedores not found');

            return redirect(route('productosProveedores.index'));
        }

        return view('productos_proveedores.edit')->with('productosProveedores', $productosProveedores);
    }

    /**
     * Update the specified productos_proveedores in storage.
     *
     * @param int $id
     * @param Updateproductos_proveedoresRequest $request
     *
     * @return Response
     */
    public function update($id, Updateproductos_proveedoresRequest $request)
    {
        $productosProveedores = $this->productosProveedoresRepository->find($id);

        if (empty($productosProveedores)) {
            Flash::error('Productos Proveedores not found');

            return redirect(route('productosProveedores.index'));
        }

        $productosProveedores = $this->productosProveedoresRepository->update($request->all(), $id);

        Flash::success('Productos Proveedores updated successfully.');

        return redirect(route('productosProveedores.index'));
    }

    /**
     * Remove the specified productos_proveedores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productosProveedores = $this->productosProveedoresRepository->find($id);

        if (empty($productosProveedores)) {
            Flash::error('Productos Proveedores not found');

            return redirect(route('productosProveedores.index'));
        }

        $this->productosProveedoresRepository->delete($id);

        Flash::success('Productos Proveedores deleted successfully.');

        return redirect(route('productosProveedores.index'));
    }
}
