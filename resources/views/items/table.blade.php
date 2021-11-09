@section('css')
    @include('layouts.datatables_css')
@endsection
<div class="table-responsive m-t-40">
{!! $dataTable->table(['width' => '100%', 'class' => 'display nowrap table table-hover table-striped table-bordered']) !!}
</div>
@push('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush
