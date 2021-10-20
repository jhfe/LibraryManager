<?php

namespace App\DataTables;

use App\Models\Author;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class AuthorDataTable extends DataTable
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
            ->editColumn('year_born', function ($data) {
                if(isset($data->year_born)){
                    return $data->year_born->format('Y-m-d');
                }
            })
            ->addColumn('action', 'authors.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Author $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Author $model)
    {
        return $model->newQuery();
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
                'processing' => true,
                'serverSide' => true,
/*                'stateSave' => true,*/
                'order'     => [[2, 'desc']],
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
                "name" => "name",
                "title" => "Nome",
                "data" => "name"
            ],
            [
                "name" => "country",
                "title" => "País",
                "data" => "country"
            ],
            [
                "name" => "year_born",
                "title" => "Nascido a ",
                "data" => "year_born"
            ],
/*            [
                "name" => "year_died",
                "title" => "Falecido",
                "data" => "year_died"
            ],*/
/*            'name',
            'country',
            'year_born',
            'year_died',
            'biography',
            'publications',
            'awards',
            'reference',
            'state'*/
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'authors_datatable_' . time();
    }
}
