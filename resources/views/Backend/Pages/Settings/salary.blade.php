@extends('Backend.Master')

@section('content')

<div class="content-fluid">
    <!-- /add -->
    <div class="card">
        <div class="card-body">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Salary</h4>
                    <h6>All designation in hear.</h6>
                </div>
            </div>
            <form action="{{route('Salary_Store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-10 col-sm-10 col-10">
                        <div class="form-group">
                            <label>Designation</label>
                            <select class="select select2-hidden-accessible" name="designation_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option>Choose Designation</option>
                                @foreach($Designation as $item)
                                <option value="{{$item->id}}">{{$item->designation}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">@error('designation_id'){{$massage}}@enderror</div>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" list="salary_type" required>
                            <datalist id="salary_type">
                                <option value="15000">
                                <option value="20000">
                                <option value="25000">
                                <option value="30000">
                                <option value="35000">
                                <option value="40000">
                                <option value="45000">
                                <option value="50000">
                                <option value="55000">
                                <option value="60000">
                                <option value="65000">
                                <option value="70000">
                            </datalist>
                            <div class="text-danger">@error('salary'){{$massage}}@enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-2">
                        <button type="submit" class="btn btn-submit mt-4 p-2 position-relative top-50">Add</button>
                    </div>
                </div>
            </form>
            <hr>
            <div class="page-header">
                <div class="page-title">
                    <h4>All designation in hear.</h4>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">SL</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Salary as $key=>$item)
                    <tr class="text-center">
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$item->designation->designation}}</td>
                        <td>৳- {{$item->salary}}/-</td>
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