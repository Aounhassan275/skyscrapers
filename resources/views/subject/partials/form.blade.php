<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Subject</h5>
            </div>
            <div class="card-body">
                <form id="storeForm" method="POST" action="{{route('subject.store')}}" >
                   @csrf
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">Subject Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Subject Name" required>
                        </div>
                    </div> 
                    <p id="success_create_message" style="color:green;"></p>     
                    <p id="error_create_message" style="color:red;"></p>     
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Create New Subject</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>