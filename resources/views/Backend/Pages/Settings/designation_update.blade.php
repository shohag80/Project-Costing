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
            <form action="{{route('Designation_Update_Store',$designation->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-5 col-sm-5 col-5">
                        <div class="mb-3 add-product">
                            <label class="form-label">Description</label>
                            <select class="select select2-hidden-accessible" name="description_id" data-select2-id="select2-data-1-3msz" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-3-x72z">Choose description</option>
                                @foreach($description as $item)
                                <option @if($designation->description_id==$item->id) selected @endif value="{{$item->id}}" data-select2-id="select2-data-66-iv3p">{{$item->description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-5 col-5">
                        <div class="mb-3 add-product">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designation" value="{{$designation->designation}}" required>
                            <div class="text-danger">@error('designation'){{$massage}}@enderror</div>
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