<div class="panel-group panel-group-custom">
  @if (count($scripts) > 0)
    <div class="panel panel-default">
      <div class="panel-heading">
        Automated Scripts
      </div>
      <div class="panel-body">
        <table class="table table-striped script-table">
          <thead>
            <th>
              Name
            </th>
            <th>
              Target Server
            </th>
            <th>
              Date Created
            </th>
            <th>
              Date Updated
            </th>
            <th>
              Notes
            </th>
          </thead>
          <tbody>
            @foreach ($scripts as $script)
              <tr>
                <td class="table-text col-sm-2">
                  <div>{{ $script->Name}}</div>
                </td>
                <td class="table-text col-sm-1">
                  <div>{{ $script->TargetServer}}</div>
                </td>
                <td class="table-text col-sm-1">
                  <div>{{ $script->DateCreated}}</div>
                </td>
                <td class="table-text col-sm-1">
                  <div>{{ $script->DateUpdated}}</div>
                </td>
                <td class="table-text col-sm-5">
                  <div>{{ $script->Notes }}</div>
                </td>
                <td class="text-center col-sm-2">

                  <button type="button" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><span class="glyphicon glyphicon-pencil btn-custom"></span></button>
                  <form action="{{ url('script/delete/'. $script->id) }}" method="POST" class="form-custom">
                    {{ csrf_field() }}
                    {{ Method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-xs" title="Delete"><span class="glyphicon glyphicon-trash"></span>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endif
  </div>
</div>
