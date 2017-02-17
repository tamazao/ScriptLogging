@extends('layouts.master')
@section('title')Script categories @endsection
@section('css')<link type="text/css" rel="stylesheet" href="css\categories.css" />@endsection
@section('content')
  <div class='body'>
    @include('common.errors')
    <form action="{{ url('category/add') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <row>
        <div class="col-sm-6 text-center">
          <h4>Script</h4>
        </div>
        <div class="col-sm-6 text-center">
          <h4>Categories</h4>
        </div>
      </row>
      <row>
        <div class="col-sm-6">
          {{ Form::select('script', $scripts, null, ['class'=>'form-control'])}}
        </div>
        <div class="col-sm-6">
        {{ Form::select('categories[]', $categories, null, ['multiple'=> true, 'class'=>'form-control'])}}
        </div>
      </row>
      <row>
        <div class="col-sm-12 text-center">
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Categories</button>
        </div>
      </row>
    </form>
  </div>
@endsection
