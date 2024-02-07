@extends('Backend.Master')

@section('content')

<div class="col-lg-12 col-sm-12 col-12 d-flex">
    <div class="dash-count das2">
        <div class="dash-counts">
            <h4>{{$count=count($Project)}}</h4>
            <h5>Total @if($count=='1')Project. @else Projects. @endif</h5>
        </div>
        <div class="dash-imgs">
            <i data-feather="file-text"></i>
        </div>
    </div>
</div>
<form action="{{route('Project_Store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-10 col-sm-10 col-10">
            <div class="form-group">
                <label>Create Project</label>
                <input type="text" name="name" required>
                <div class="text-danger">@error('name'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-2 mt-4 p-1">
            <button type="submit" class="btn btn-submit p-2">Add</button>
        </div>
    </div>
</form>
<hr>
<div class="table-top">
    <div class="search-set">
        <div class="search-input">
            <a class="btn btn-searchset"><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/icons/search-white.svg" alt="img"></a>
            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label> <input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="DataTables_Table_0"></label></div>
        </div>
    </div>
    <div class="wordset">
        <ul>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="pdf" aria-label="pdf"><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/icons/pdf.svg" alt="img"></a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="excel" aria-label="excel"><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/icons/excel.svg" alt="img"></a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="print" aria-label="print"><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/icons/printer.svg" alt="img"></a>
            </li>
        </ul>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr class="text-center bg-warning">
            <th scope="col">SL</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Project as $key=>$item)
        <tr class="text-center">
            <th scope="row">{{$key+1}}</th>
            <td>{{$item->name}}</td>
            <td>
                <a class="me-3" href="{{route('Single_Project',$item->id)}}">
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
