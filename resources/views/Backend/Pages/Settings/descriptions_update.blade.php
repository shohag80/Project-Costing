@extends('Backend.Master')

@section('content')

<div class="content-fluid">
    <!-- /add -->
    <div class="card">
        <div class="card-body">
            <div class="page-header">
                <div class="page-title">
                    <h4>Update Description</h4>
                </div>
            </div>
            <form action="{{route('Description_Update_Store', $description_data->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-10 col-sm-10 col-10">
                        <div class="mb-3 add-product">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$description_data->description}}" required>
                            <div class="text-danger">@error('description'){{$massage}}@enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-2 mt-4 p-1">
                        <button type="submit" class="btn btn-submit col-12">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /add -->
    </div>

    @endsection