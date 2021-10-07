<div class="row">
    <!-- Title Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('title', 'Titlo:') !!}
        {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
    </div>
    <!-- Author Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('author_id', 'Autor') !!}
        {!! Form::select('author_id',$authors, null, ['class' => 'form-control select2']) !!}

    </div>
</div>
<!-- Item Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_type_id', 'Tipo de Media:') !!}
    {!! Form::select('item_type_id',$itemTypes, null, ['class' => 'form-control select2']) !!}

</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Categoria:') !!}
    {!! Form::select('category_id',$categories, null, ['class' => 'form-control select2']) !!}

</div>



<!-- Isbn Barcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isbn_barcode', 'Isbn Barcode:') !!}
    {!! Form::text('isbn_barcode', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Call No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_no', 'Call No:') !!}
    {!! Form::text('call_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Publisher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publisher_id', 'Editora:') !!}
    {!! Form::select('publisher_id',$publishers, null, ['class' => 'form-control select2']) !!}

</div>

<!-- Edition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edition', 'Edition:') !!}
    {!! Form::text('edition', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    {!! Form::text('year', null, ['class' => 'form-control','id'=>'year']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#year').datetimepicker({
               format: 'YYYY-MM-DD',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Series Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('series_name', 'Series Name:') !!}
    {!! Form::text('series_name', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Volume Field -->
<div class="form-group col-sm-6">
    {!! Form::label('volume', 'Volume:') !!}
    {!! Form::text('volume', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Subject Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject', 'Subject:') !!}
    {!! Form::text('subject', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Abstract Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('abstract', 'Abstract:') !!}
    {!! Form::textarea('abstract', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('state', 0) !!}
        {!! Form::checkbox('state', '1', null) !!}
    </label>
</div>


<!-- Published Field -->
<div class="form-group col-sm-6">
    {!! Form::label('published', 'Published:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('published', 0) !!}
        {!! Form::checkbox('published', '1', null) !!}
    </label>
</div>


<!-- Circulation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('circulation', 'Circulation:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('circulation', 0) !!}
        {!! Form::checkbox('circulation', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>
</div>
