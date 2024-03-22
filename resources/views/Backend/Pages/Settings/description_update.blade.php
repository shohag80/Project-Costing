<div class="modal fade" id="update-description">
    <div class="modal-dialog modal-dialog-centered stock-adjust-modal">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Description Update</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('Description_Store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-10">
                                <div class="mb-3 add-product">
                                    <label class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" @if(!empty($description_data)) value="{{$description_data->description}}" @endif required>
                                    <div class="text-danger">@error('description'){{$massage}}@enderror</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-2 mt-4 p-1">
                                <button type="submit" class="btn btn-submit col-12">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>