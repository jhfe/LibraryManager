<div class="container-fluid">
    <div class="animated fadeIn">
        @include('coreui-templates::common.errors')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-plus-square-o fa-lg"></i>
                        <strong>Adicionar Autor</strong>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'authors.store']) !!}
                        <input type="hidden" name="modal" value="1">
                        @include('authors.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
