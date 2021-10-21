@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
<div class="row">
    <!-- Title Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('title', 'Titlo:') !!}
        {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
    </div>
    <!-- Author Id Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('author_id', 'Autor') !!}
        {!! Form::select('author_id',$authors, null, ['class' => 'form-control select2']) !!}

    </div>
    <!-- Category Id Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('category_id', 'Categoria:') !!}
        {!! Form::select('category_id',$categories, null, ['class' => 'form-control select2']) !!}

    </div>
</div>
<div class="row">
    <!-- Isbn Barcode Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('isbn_barcode', 'Isbn Barcode:') !!}
        {!! Form::text('isbn_barcode', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'autocomplete'=>false]) !!}
    </div>

    <!-- Call No Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('call_no', 'Call No:') !!}
        {!! Form::text('call_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>
    <!-- Publisher Id Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('publisher_id', 'Editora:') !!}
        {!! Form::select('publisher_id',$publishers, null, ['class' => 'form-control select2']) !!}

    </div>
    <!-- Item Type Id Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('item_type_id', 'Tipo de Media:') !!}
        {!! Form::select('item_type_id',$itemTypes, null, ['class' => 'form-control select2']) !!}

    </div>
</div>

<div class="row">
    <!-- Edition Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('edition', 'Edição:') !!}
        {!! Form::text('edition', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Year Field -->
    <div class="form-group col-sm-3">
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
            function itemCreateSub(){
                $('#itemCreate').submit();
            }
        </script>
@endpush


<!-- Series Name Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('series_name', 'Series Name:') !!}
        {!! Form::text('series_name', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
    </div>

    <!-- Tags Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('tags', 'Tags:') !!}
        {!! Form::text('tags', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
    </div>
</div>
<div class="row">
    <!-- Volume Field -->
    <div class="form-group col-sm-3">
        {!! Form::label('volume', 'Volume:') !!}
        {!! Form::text('volume', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Subject Field -->
    <div class="form-group col-sm-9">
        {!! Form::label('subject', 'Assunto:') !!}
        {!! Form::text('subject', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
    </div>
</div>
<div class="row">
{{--
    <!-- Abstract Field -->
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('abstract', 'Abstract:') !!}
        {!! Form::textarea('abstract', null, ['class' => 'form-control']) !!}
    </div>
--}}

    <!-- Description Field -->
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6 col-lg-6">
        <input type="file" id="picture" name="file" class="dropify" data-show-remove="false" data-max-file-size="2M" data-default-file="{!! asset('storage/upload/'.$item->picture_path ??'Not') !!}" />
{{--        <label class="custom-file-label" for="chooseFile">Escolha</label>
        <input type="file" name="file" class="form-control" id="chooseFile">--}}

    </div>
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
</form>
<!-- Submit Field -->
<div class="form-group col-sm-12">
{{--    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}--}}
    <button class="btn btn-primary" onclick="$('#itemCreate').submit();">Guardar</button>
    <a href="{{ route('items.index') }}" class="btn btn-secondary">Voltar</a>
</div>

@push('scripts')
    <!-- jQuery file upload -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();
/*            $('#picture').on('change', function(evt) {
                if(this.files[0].size < 2024000){
                    $('.preloader').show();
                    this.form.submit();
                }else{
                    return ;
                }
            });*/
        });
    </script>
@endpush
