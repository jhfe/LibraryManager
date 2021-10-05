<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Citizen Card Field -->
<div class="form-group col-sm-6">
    {!! Form::label('citizen_card', 'Citizen Card:') !!}
    {!! Form::text('citizen_card', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Zip Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zip_code', 'Zip Code:') !!}
    {!! Form::text('zip_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- State Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state_login', 'State Login:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('state_login', 0) !!}
        {!! Form::checkbox('state_login', '1', null) !!}
    </label>
</div>


<!-- Type Menber Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_menber_id', 'Type Menber Id:') !!}
    {!! Form::number('type_menber_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Menber Group Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('menber_group_id', 'Menber Group Id:') !!}
    {!! Form::number('menber_group_id', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('members.index') }}" class="btn btn-secondary">Cancel</a>
</div>
