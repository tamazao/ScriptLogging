<div class="panel-group panel-group-custom">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4>New Script</h4>
    </div>
    <div class="panel-body panel-body-custom">
      {!! Form::model($script, ['route'=>'script.store'])!!}
        {{ csrf_field() }}
        <div class="form-group">
          <div class="row  panel-custom" >
            <div class="container-fluid">
              <label for="name" class="col-sm-1 control-label">Script</label>
              <div class="col-sm-2">
                <input type="text" name="name" id="script_name" class="form-control" value="{!! old('name')!!}" />
              </div>
              <label for="TargetServer" class="col-sm-1 control-label">Target Server</label>
              <div class="col-sm-2">
                <input type="text" name="TargetServer" id="TargetServer" class="form-control" value="{!! old('TargetServer') !!}" />
              </div>
              <label for="DateCreated" class="col-sm-1 control-label">Created</label>
              <div class="col-sm-2">
                <input type="Date" name="DateCreated" id="DateCreated" class="form-control" value="{!! old('DateCreated') !!}"/>
              </div>
              <label for="DateUpdated" class="col-sm-1 control-label">Updated</label>
              <div class="col-sm-2">
                <input type="Date" name="DateUpdated" id="DateUpdated" class="form-control" value="{!! old('DateUpdated') !!}" />
              </div>
            </div>
          </div>
          <div class="row top-padding panel-custom">
            <label for="notes" class="col-sm-1 control-label">Notes</label>
            <div class="col-sm-9">
              <input type="memo" name="notes" id="Notes" class="form-control" value="{!! old('notes') !!}"/>
            </div>
            <div class="col-sm-2">
              <button type="button" class="btn btn-default btn-info" data-toggle="modal" data-target="#categories">Categories</button>
            </div>
          </div>
          <div class="row  top-padding panel-custom">
            <div class="col-sm-10">
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Script</button>
            </div>
          </div>
        </div>
          @include('modals.categories')
      {!!Form::close()!!}
    </div>
  </div>
</div>
