<?php

namespace App\Http\Controllers;

use App\DataTables\ItemDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemType;
use App\Models\Publisher;
use App\Repositories\ItemRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Image;
use File;

class ItemController extends AppBaseController
{
    /** @var  ItemRepository */
    private $itemRepository;

    public function __construct(ItemRepository $itemRepo)
    {
        $this->itemRepository = $itemRepo;
    }

    /**
     * Display a listing of the Item.
     *
     * @param ItemDataTable $itemDataTable
     * @return Response
     */
    public function index(ItemDataTable $itemDataTable)
    {
        return $itemDataTable->render('items.index');
    }

    /**
     * Show the form for creating a new Item.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function create()
    {
        $itemTypes = ItemType::where('state',1)->pluck('name','id')->toArray();
        $authors = Author::pluck('name','id')->toArray();
        $publishers = Publisher::where('state',1)->pluck('name','id')->toArray();
        $categories = Category::where('state',1)->pluck('name','id')->toArray();

        return view('items.create')->with([
            'itemTypes' => $itemTypes,
            'authors' => $authors,
            'publishers' => $publishers,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created Item in storage.
     *
     * @param CreateItemRequest $request
     *
     * @return Response
     */
    public function store(CreateItemRequest $request)
    {
        $input = $request->all();

        $item = $this->itemRepository->create($input);
        if($request->hasFile('file'))
        {
            $input['picture_path'] = $this->uploadImage($request->file('file'),$item->id);
            $item->picture_path = $input['picture_path'];
            $item->save();
        }

        Flash::success('Item saved successfully.');

        return redirect(route('items.index'));
    }

    /**
     * Display the specified Item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $item = $this->itemRepository->find($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        return view('items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified Item.
     *
     * @param  int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function edit($id)
    {


        $item = $this->itemRepository->find($id);


        $itemTypes = ItemType::where('state',1)->pluck('name','id')->toArray();
        $authors = Author::pluck('name','id')->toArray();
        $publishers = Publisher::where('state',1)->pluck('name','id')->toArray();
        $categories = Category::where('state',1)->pluck('name','id')->toArray();

        if (empty($item)) {
            Flash::error('Item not found -Edit');

            return redirect(route('items.index'));
        }
        return view('items.edit')->with([
            'item' => $item,
            'itemTypes' => $itemTypes,
            'authors' => $authors,
            'publishers' => $publishers,
            'categories' => $categories
        ]);

    }

    /**
     * Update the specified Item in storage.
     *
     * @param  int              $id
     * @param UpdateItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemRequest $request)
    {

        $input = $request->all();
        $item = $this->itemRepository->find($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        if($request->hasFile('file'))
        {
            $input['picture_path'] = $this->uploadImage($request->file('file'),$item->id);
        }

        $item = $this->itemRepository->update($input, $id);

        Flash::success('Item updated successfully.');

        return redirect(route('items.index'));
    }

    /**
     * Remove the specified Item from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $item = $this->itemRepository->find($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        $this->itemRepository->delete($id);

        Flash::success('Item deleted successfully.');

        return redirect(route('items.index'));
    }

    public function uploadImage($file,$id)
    {
/*        $this->validate($file, [
            'file' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);*/

        $image = $file;
        $input['file'] = time().'.'.$image->getClientOriginalExtension();

        $storageThumbnail = 'app/public/thumbnail/'.$id. '/' ;
        $storeUpload  =  'app/public/upload/'.$id. '/' ;
        $filePath = '/'.$id.'/';

        if(!file_exists(storage_path($storageThumbnail ))) {
            File::makeDirectory(storage_path($storageThumbnail), 0777, true, true);
        }
        if(!file_exists(storage_path($storeUpload ))) {
            File::makeDirectory(storage_path($storeUpload), 0777, true, true);
        }
        $destinationPath = storage_path($storageThumbnail);
        $destinationUpload = storage_path($storeUpload);

        $imgFile = Image::make($image->getRealPath());
        $imgFileUp = Image::make($image->getRealPath());


        $imgFileUp->resize(190, 285, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationUpload.'/'.$input['file']);

        $imgFile->resize(64, 80, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['file']);

/*        $destinationPath = storage_path($storagePath);
        $image->move($destinationPath, $input['file']);*/

        return $filePath . $input['file'];
    }
}
