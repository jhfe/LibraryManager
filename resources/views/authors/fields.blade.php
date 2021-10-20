<!-- Nickname Field -->
{{--<div class="form-group col-sm-6">
    {!! Form::label('nickname', 'Nickname:') !!}
    {!! Form::text('nickname', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>--}}
<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
    </div>

    <!-- Country Field -->
    <div class="form-group col-sm-2">
        {!! Form::label('country', 'País:') !!}
        {!! Form::text('country', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>

    <!-- Year Born Field -->
    <div class="form-group col-sm-2">
        {!! Form::label('year_born', 'Nascido a:') !!}
        {!! Form::text('year_born', null, ['class' => 'form-control','id'=>'year_born','autocomplete'=>false]) !!}
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#year_born').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: true,
                icons: {
                    up: "icon-arrow-up-circle icons font-2xl",
                    down: "icon-arrow-down-circle icons font-2xl"
                },

            })
        </script>
    @endpush


<!-- Year Died Field -->
    <div class="form-group col-sm-2">
        {!! Form::label('year_died', 'Falecido a:') !!}
        {!! Form::text('year_died', null, ['class' => 'form-control','id'=>'year_died','autocomplete'=>false]) !!}
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#year_died').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: true,
                icons: {
                    up: "icon-arrow-up-circle icons font-2xl",
                    down: "icon-arrow-down-circle icons font-2xl"
                },

            })
        </script>
    @endpush

</div>

<div class="row">
    <!-- Biography Field -->
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('biography', 'Biografia:') !!}
        {!! Form::textarea('biography', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Publications Field -->
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('publications', 'Publicações:') !!}
        {!! Form::textarea('publications', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <!-- Awards Field -->
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('awards', 'Prémios:') !!}
        {!! Form::textarea('awards', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Reference Field -->
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('reference', 'Referencias:') !!}
        {!! Form::textarea('reference', null, ['class' => 'form-control']) !!}
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


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('authors.index') }}" class="btn btn-secondary">Cancel</a>
</div>
