<!-- Nickname Field -->
<div class="form-group">
    {!! Form::label('nickname', 'Nickname:') !!}
    <p>{{ $author->nickname }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $author->name }}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $author->country }}</p>
</div>

<!-- Year Born Field -->
<div class="form-group">
    {!! Form::label('year_born', 'Year Born:') !!}
    <p>{{ $author->year_born }}</p>
</div>

<!-- Year Died Field -->
<div class="form-group">
    {!! Form::label('year_died', 'Year Died:') !!}
    <p>{{ $author->year_died }}</p>
</div>

<!-- Biography Field -->
<div class="form-group">
    {!! Form::label('biography', 'Biography:') !!}
    <p>{{ $author->biography }}</p>
</div>

<!-- Publications Field -->
<div class="form-group">
    {!! Form::label('publications', 'Publications:') !!}
    <p>{{ $author->publications }}</p>
</div>

<!-- Awards Field -->
<div class="form-group">
    {!! Form::label('awards', 'Awards:') !!}
    <p>{{ $author->awards }}</p>
</div>

<!-- Reference Field -->
<div class="form-group">
    {!! Form::label('reference', 'Reference:') !!}
    <p>{{ $author->reference }}</p>
</div>

<!-- State Field -->
<div class="form-group">
    {!! Form::label('state', 'State:') !!}
    <p>{{ $author->state }}</p>
</div>

