@extends('Backend.Master')

@section('content')

<div class="content-fluid">
    <!-- /add -->
    <div class="card">
        <div class="card-body">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Designation</h4>
                    <h6>All designation in hear.</h6>
                </div>
            </div>
            <form action="{{route('Designation_Store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-10 col-sm-10 col-10">
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="designation" required>
                            <div class="text-danger">@error('designation'){{$massage}}@enderror</div>
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
                        <th scope="col">Designation</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Designation as $key=>$item)
                        <tr class="text-center">
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$item->designation}}</td>
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