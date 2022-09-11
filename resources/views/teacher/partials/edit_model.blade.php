<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="updateForm" method="POST">
            @method('PUT')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Teacher</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Teacher Name</label>
                        <input type="text" name="name" id="name"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Teacher Qualification</label>
                        <input type="text" name="qualification" id="qualification"  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Teacher timing</label>
                        <input type="text" name="timing" id="timing"  class="form-control">
                    </div>
                </div>
                <p id="success_update_message" style="color:green;"></p>     
                <p id="error_update_message" style="color:red;"></p>  
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>