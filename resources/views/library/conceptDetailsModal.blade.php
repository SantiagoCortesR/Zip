<form data-parsley-validate novalidate action="{{route('detail.store')}}" method="POST" enctype="multipart/form-data">
    <div class="modal fade bd-example-modal-sm"  id="createConceptDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg  ">
            <div class="modal-content border-primary p-3 rounded shadow-primary">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Create Concept Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="concept_id" value="{{$concept->id}}">
                        <div class="col-6">
                            <label for="">Subject Name</label>
                            <input type="text" class="form-control" value="{{$subject->name_sub}}" readonly required>
                        </div>
                        <div class="col-6">
                            <label for="">Concept Name</label>
                            <input type="text" class="form-control" value="{{$concept->concept_name}}" readonly required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <label for="">Concept Details</label>
                            <input name="concept_detail_name" type="text" class="form-control" required>
                            @error('concept_detail_name')
                             <span class="text-danger font-size-6">The name of the concept detail is required</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Create Concept Detail</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>