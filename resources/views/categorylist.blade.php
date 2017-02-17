@extends('layouts.master')
@section('content')
<div class="panel">
  <div class="panel-header text-center">
    Categories
  </div>
  <div class="panel-body">
  {!! Form::open()!!}
  <table class="table table-striped">
    <tbody>
    @foreach ($categories as $category)
        <tr>
          <td>
              {!!Form::checkbox("activecats[]", $category->id, $script->hasCategory($category->id) )!!} <label>{{$category->name}}</label>
          </td>
        </tr>
    @endforeach
  </tbody>
  </form>
  {!! Form::close()!!}
</div>
</div>



@endsection
