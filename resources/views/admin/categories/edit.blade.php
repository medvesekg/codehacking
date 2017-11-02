@extends('layouts.admin')


@section('content')

    <h1>Categories</h1>

    <div class="row">

        <div class="col-sm-6">

            {!! Form::model(['method'=>'PATCH','action'=>['AdminCategoriesController@update', $category->id]]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}

        </div>

        <div class="col-sm-6">

        </div>
    </div>


@stop