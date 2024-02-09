@extends('Backend.Master')

@section('content')
<form action="{{route('Project_Store')}}" method="post">
    <div class="page-header">
        <div class="page-title col-lg-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-lg-9 col-sm-9 col-9">
                    <h4>New Project</h4>
                    <h6>Create new project</h6>
                </div>
                <div class="col-lg-3 col-sm-3 col-3 text-end">
                    <button type="submit" class="btn btn-submit">Create</button>
                </div>
            </div>
        </div>
    </div>
    @csrf
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Project Code</label>
                <input type="text" class="form-control" name="project_code" id="numberInput" required>
                <div class="text-danger">@error('project_code'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Project Title</label>
                <input type="text" class="form-control" name="project_title" required>
                <div class="text-danger">@error('project_title'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Clients</label>
                <input type="text" class="form-control" name="client" required>
                <div class="text-danger">@error('client'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Submission Date</label>
                <input type="text" class="form-control" name="date" id="datepicker" placeholder="Select date (DD-MM-YYYY)" value="<?php echo date('d-m-Y'); ?>" required>
                <div class="text-danger">@error('client'){{$massage}}@enderror</div>
            </div>
        </div>
    </div>
</form>
<hr>
<table class="table table-hover">
    <thead>
        <tr class="text-center">
            <th scope="col">SL</th>
            <th scope="col">Cost Title</th>
            <th scope="col">Description</th>
            <th scope="col">Designation</th>
            <th scope="col">Monthly Salary</th>
            <th scope="col">Man Days</th>
            <th scope="col">Man Months</th>
            <th scope="col">Sub Total</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Project_Details as $key=>$item)
        <tr class="text-center">
            <th scope="row">{{$key+1}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->designation_id}}</td>
            <td>{{$item->salary}}</td>
            <td>{{$item->man_days}} D</td>
            <td>{{$item->man_month}} M</td>
            <td>৳- {{$item->sub_total}} /-</td>
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

@endsection