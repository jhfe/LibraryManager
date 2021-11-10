@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('items.index') !!}">Catalogo Items</a>
      </li>
      <li class="breadcrumb-item active">Adicionar</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Adicionar Item ao Catalogo</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'items.store','id'=>'itemCreate','enctype'=>"multipart/form-data"]) !!}

                                   @include('items.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
