<!-- Nickname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nickname', 'Nickname:') !!}
    {!! Form::text('nickname', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Year Born Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year_born', 'Year Born:') !!}
    {!! Form::text('year_born', null, ['class' => 'form-control','id'=>'year_born']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#year_born').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Year Died Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year_died', 'Year Died:') !!}
    {!! Form::text('year_died', null, ['class' => 'form-control','id'=>'year_died']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#year_died').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Biography Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('biography', 'Biography:') !!}
    {!! Form::textarea('biography', null, ['class' => 'form-control']) !!}
</div>

<!-- Publications Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('publications', 'Publications:') !!}
    {!! Form::textarea('publications', null, ['class' => 'form-control']) !!}
</div>

<!-- Awards Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('awards', 'Awards:') !!}
    {!! Form::textarea('awards', null, ['class' => 'form-control']) !!}
</div>

<!-- Reference Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('reference', 'Reference:') !!}
    {!! Form::textarea('reference', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('state', 0) !!}
        {!! Form::checkbox('state', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('authors.index') }}" class="btn btn-secondary">Cancel</a>
</div>
