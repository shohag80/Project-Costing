@extends('Backend.Master')

@section('content')

<div class="content-fluid">
    <!-- /add -->
    <div class="card">
        <div class="card-body">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Description</h4>
                    <h6>All description in hear.</h6>
                </div>
            </div>
            <form action="{{route('Description_Store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-10 col-sm-10 col-10">
                        <div class="mb-3 add-product">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" required>
                            <div class="text-danger">@error('description'){{$massage}}@enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-2 mt-4 p-1">
                        <button type="submit" class="btn btn-submit p-2">Add</button>
                    </div>
                </div>
            </form>
            <hr>
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">SL</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($description as $key=>$item)
                    <tr class="text-center">
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$item->description}}</td>
                        <td>
                            <a class="me-3" href="">
                                <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/icons/edit.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="">
                                <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /add -->
</div>

@endsection