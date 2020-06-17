<!-- Modal -->
{!! Form::open(['method'=>'Delete','id'=>'deleteCategoryForm']) !!}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete {{$category->name}} category?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">No</button>
                <input type="submit" class="btn btn-danger btn-sm" value="Yes">
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}


