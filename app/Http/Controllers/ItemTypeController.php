<?php

namespace App\Http\Controllers;

use App\DataTables\ItemTypeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateItemTypeRequest;
use App\Http\Requests\UpdateItemTypeRequest;
use App\Repositories\ItemTypeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ItemTypeController extends AppBaseController
{
    /** @var  ItemTypeRepository */
    private $itemTypeRepository;

    public function __construct(ItemTypeRepository $itemTypeRepo)
    {
        $this->itemTypeRepository = $itemTypeRepo;
    }

    /**
     * Display a listing of the ItemType.
     *
     * @param ItemTypeDataTable $itemTypeDataTable
     * @return Response
     */
    public function index(ItemTypeDataTable $itemTypeDataTable)
    {
        return $itemTypeDataTable->render('item_types.index');
    }

    /**
     * Show the form for creating a new ItemType.
     *
     * @return Response
     */
    public function create()
    {
        return view('item_types.create');
    }

    /**
     * Store a newly created ItemType in storage.
     *
     * @param CreateItemTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateItemTypeRequest $request)
    {
        $input = $request->all();

        $itemType = $this->itemTypeRepository->create($input);

        Flash::success('Item Type saved successfully.');

        return redirect(route('itemTypes.index'));
    }

    /**
     * Display the specified ItemType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itemType = $this->itemTypeRepository->find($id);

        if (empty($itemType)) {
            Flash::error('Item Type not found');

            return redirect(route('itemTypes.index'));
        }

        return view('item_types.show')->with('itemType', $itemType);
    }

    /**
     * Show the form for editing the specified ItemType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $itemType = $this->itemTypeRepository->find($id);

        if (empty($itemType)) {
            Flash::error('Item Type not found');

            return redirect(route('itemTypes.index'));
        }

        return view('item_types.edit')->with('itemType', $itemType);
    }

    /**
     * Update the specified ItemType in storage.
     *
     * @param  int              $id
     * @param UpdateItemTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemTypeRequest $request)
    {
        $itemType = $this->itemTypeRepository->find($id);

        if (empty($itemType)) {
            Flash::error('Item Type not found');

            return redirect(route('itemTypes.index'));
        }

        $itemType = $this->itemTypeRepository->update($request->all(), $id);

        Flash::success('Item Type updated successfully.');

        return redirect(route('itemTypes.index'));
    }

    /**
     * Remove the specified ItemType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itemType = $this->itemTypeRepository->find($id);

        if (empty($itemType)) {
            Flash::error('Item Type not found');

            return redirect(route('itemTypes.index'));
        }

        $this->itemTypeRepository->delete($id);

        Flash::success('Item Type deleted successfully.');

        return redirect(route('itemTypes.index'));
    }
}
