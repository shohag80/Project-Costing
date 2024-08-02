@extends('Backend.Master')

@section('content')
    <div class="content-fluid">
        <!-- /add -->
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Update Designation</h4>
                    </div>
                </div>
                <form action="{{ route('Designation_Update_Store', $Mapping->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5 col-sm-5 col-5">
                            <div class="mb-3 add-product">
                                <label class="form-label">Description</label>
                                <select class="select select2-hidden-accessible" name="description_id"
                                    data-select2-id="select2-data-1-3msz" tabindex="-1" aria-hidden="true">
                                    <option value="">Choose Description</option>
                                    @foreach ($Description as $item)
                                        <option @if ($Mapping->description_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-5 col-5">
                            <div class="form-group">
                                <label class="form-label">Designation</label>
                                <select class="select select2-hidden-accessible" class="form-control" name="designation_id"
                                    aria-hidden="true">
                                    <option>Choose Designation</option>
                                    @foreach ($Designation as $item)
                                        <option @if ($Mapping->designaiton_with_salary_id == $item->id) selected @endif
                                            value="{{ $item->id }}">{{ $item->designation }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('designation_id')
                                        {{ $massage }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-2 mt-4 p-1">
                            <button type="submit" class="btn btn-submit col-12">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /add -->
        </div>
    @endsection
