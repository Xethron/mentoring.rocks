@extends('layouts.default')

@section('content')
    <h1 class="page-title">Profile</h1>
    {!! Form::open(['route' => 'profile.update', 'class' => 'form-horizontal']) !!}
        {{-- Name Field --}}
        <fieldset class="form-group">
            {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
            </div>
        </fieldset>
        {{-- Surname Field --}}
        <fieldset class="form-group">
            {!! Form::label('surname', 'Surname:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('surname', $user->surname, ['class' => 'form-control']) !!}
            </div>
        </fieldset>
        {{-- Bio Field --}}
        <fieldset class="form-group">
            {!! Form::label('bio', 'Bio:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::textarea('bio', $user->bio, ['class' => 'form-control']) !!}
            </div>
        </fieldset>
        {{-- Country Field --}}
        <fieldset class="form-group">
            {!! Form::label('country', 'Country:') !!}
            {!! Form::text('country', $user->country, ['class' => 'form-control']) !!}
        </fieldset>

        {{-- Save Field --}}
        <fieldset class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </fieldset>

    </form>
@stop
