<?php

namespace App\DataTables;

use App\Models\Item;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ItemDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
            ->addColumn('itemType', function ($data) {
                return $data->itemType->name;
            })
            ->editColumn('picture_path', function ($data) {
                if(isset($data->picture_path)){
                    return '<img src="storage/thumbnail/'.$data->picture_path.'">';
                }
                return '<img src="images/cover_th.png" width="64px" height="80px">';
            })
            ->rawColumns(['action','picture_path'])
            ->addColumn('action', 'items.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Item $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Item $model)
    {
        return $model->with('publisher')->with('category')->with('author')->with('itemType')->select('items.*')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',

                'order'     => [[1, 'ASC']],
                'buttons'   => [
                    /*                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                                        ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                                        ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                                        ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                                        ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],*/
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                "name" => "picture_path",
                "title" => "Cover",
                "data" => "picture_path"
            ],
            [
                "name" => "title",
                "title" => "Titulo",
                "data" => "title"
            ],
            [
                "name" => "author.name",
                "title" => "Autor",
                "data" => "author.name"
            ],
            [
                "name" => "category.name",
                "title" => "Categoria",
                "data" => "category.name"
            ],
            [
                "name" => "itemType",
                "title" => "Tipo",
                "data" => "itemType"
            ],
            [
                "name" => "publisher.name",
                "title" => "Editora",
                "data" => "publisher.name"
            ],
            [
                "name" => "isbn_barcode",
                "title" => "ISBN/Barcode",
                "data" => "isbn_barcode"
            ],
            [
                "name" => "call_no",
                "title" => "Local",
                "data" => "call_no"
            ],

/*
            'item_type_id',
            'category_id',
            'title',
            'author_id',
            'isbn_barcode',
            'call_no',
            'publisher_id',
            'edition',
            'year',
            'series_name',
            'tags',
            'volume',
            'subject',
            'abstract',
            'description',
            'state',
            'published',
            'circulation'*/
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'items_datatable_' . time();
    }
}
