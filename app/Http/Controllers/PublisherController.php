<?php

namespace App\Http\Controllers;

use App\DataTables\PublisherDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;
use App\Repositories\PublisherRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PublisherController extends AppBaseController
{
    /** @var  PublisherRepository */
    private $publisherRepository;

    public function __construct(PublisherRepository $publisherRepo)
    {
        $this->publisherRepository = $publisherRepo;
    }

    /**
     * Display a listing of the Publisher.
     *
     * @param PublisherDataTable $publisherDataTable
     * @return Response
     */
    public function index(PublisherDataTable $publisherDataTable)
    {
        return $publisherDataTable->render('publishers.index');
    }

    /**
     * Show the form for creating a new Publisher.
     *
     * @return Response
     */
    public function create()
    {
        return view('publishers.create');
    }
    /**
     * Show the form for creating a new Publisher.
     *
     * @return Response
     */
    public function createModal()
    {
        return view('publishers.createModal');
    }
    /**
     * Store a newly created Publisher in storage.
     *
     * @param CreatePublisherRequest $request
     *
     * @return Response
     */
    public function store(CreatePublisherRequest $request)
    {
        $input = $request->all();

        $publisher = $this->publisherRepository->create($input);

        Flash::success('Publisher saved successfully.');
        if(isset($input['modal'])){
            return redirect()->back();
        }


        return redirect(route('publishers.index'));
    }

    /**
     * Display the specified Publisher.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $publisher = $this->publisherRepository->find($id);

        if (empty($publisher)) {
            Flash::error('Publisher not found');

            return redirect(route('publishers.index'));
        }

        return view('publishers.show')->with('publisher', $publisher);
    }

    /**
     * Show the form for editing the specified Publisher.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $publisher = $this->publisherRepository->find($id);

        if (empty($publisher)) {
            Flash::error('Publisher not found');

            return redirect(route('publishers.index'));
        }

        return view('publishers.edit')->with('publisher', $publisher);
    }

    /**
     * Update the specified Publisher in storage.
     *
     * @param  int              $id
     * @param UpdatePublisherRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePublisherRequest $request)
    {
        $publisher = $this->publisherRepository->find($id);

        if (empty($publisher)) {
            Flash::error('Publisher not found');

            return redirect(route('publishers.index'));
        }

        $publisher = $this->publisherRepository->update($request->all(), $id);

        Flash::success('Publisher updated successfully.');

        return redirect(route('publishers.index'));
    }

    /**
     * Remove the specified Publisher from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $publisher = $this->publisherRepository->find($id);

        if (empty($publisher)) {
            Flash::error('Publisher not found');

            return redirect(route('publishers.index'));
        }

        $this->publisherRepository->delete($id);

        Flash::success('Publisher deleted successfully.');

        return redirect(route('publishers.index'));
    }
}
