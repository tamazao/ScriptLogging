@extends('layouts.master')
@section('title')Script Categories @endsection
@section('css')<link type="text/css" rel="stylesheet" href="css\categories.css" />@endsection
@section('content')
  <div class="container">
    <div class="container-custom">
      {!! Form::model($category, ['action' => 'category@store']) !!}
        {!! Form::label('name', 'Category Name') !!}
        {!! Form::text('name', '',['class' => 'form-control']) !!}
    </div>
  <div class="text-right container-custom">
    <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-plus"></span> Add Category</button>
  </div>
</div>

  {!!Form::close()!!}
@endsection
