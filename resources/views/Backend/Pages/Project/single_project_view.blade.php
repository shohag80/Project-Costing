@extends('Backend.Master')

@section('content')

<div class="content-fluid">
    <div class="card">
        <div class="card-body">
            <div class="page-header">
                <div class="page-title">
                    <h4>{{$Project->name}} Details</h4>
                    <h6>Full details of Project.</h6>
                </div>
            </div>
            <form action="{{route('Title_Store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-2 col-sm-2 col">
                        <div class="form-group">
                            <label>Project Id</label>
                            <input type="text" name="project_id" value="{{$Project->id}}" readonly required>
                            <div class="text-danger">@error('project_id'){{$massage}}@enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-8 col">
                        <div class="form-group">
                            <label>Create Title</label>
                            <input type="text" name="title" required>
                            <div class="text-danger">@error('title'){{$massage}}@enderror</div>
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
                        <th scope="col">Cost Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Title as $key=>$item)
                    <tr class="text-center">
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$item->title}}</td>
                        <td>
                            <a class="me-3" href="{{route('Add_Component',[$Project->id,$item->id])}}">
                                <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/icons/excel.svg" alt="img">
                            </a>
                            <a class="confirm-text" href="">
                                <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/icons/delete.svg" alt="img">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="text-center bg-dark">
                        <td class="text-light">Total Amount</td>
                        <td class="text-light">৳- 0 /-</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <!-- /add -->
        </div>
    </div>
</div>
@endsection