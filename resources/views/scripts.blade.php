@extends('layouts.master')
@section('title')Script Logging @endsection
@section('css')<link type="text/css" rel="stylesheet" href="css\script.css" />@endsection
@section('content')
  <div class="body">
          @include('common.errors')
          @include('forms.newscript')
          @include('scriptTable')
 </div>

@endsection
