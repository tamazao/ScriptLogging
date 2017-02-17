<div id="categories" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Categories</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          @foreach ($categoryList as $category)
          <tr>
            <td>
              {!!Form::checkbox('categories[]', $category->id)!!}<label>{{ $category->name}}</label>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="modal-footer">
          <div class="col-sm-6 text-left">
            <a href="category\create">
              <button type="button" class="btn btn-success" title="New Category">New</button>
            </a>
          </div>
          <div class="col-sm-6">
            <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>
