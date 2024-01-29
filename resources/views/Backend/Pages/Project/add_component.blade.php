@extends('Backend.Master')

@section('content')

<div class="content-fluid">
    <!-- /add -->
    <div class="card">
        <div class="card-body">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Component</h4>
                    <h6>Full details of a Component</h6>
                </div>
            </div>
            <div class="row">
                <form action="{{route('Project_Details_Store')}}" method="post">
                    <div class="col-lg-4 col-sm-4 col">
                        <div class="form-group">
                            <label>Cost Title</label>
                            <input type="text" name="{{$Title->id}}" value="{{$Title->title}}">
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col">
                        <div class="form-group">
                            <label>Description</label>
                            <select class="select select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                <option>Choose Description</option>
                                @foreach($Description as $item)
                                <option value="">{{$item->description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col">
                        <div class="form-group">
                            <label>Designation</label>
                            <select class="select select2-hidden-accessible" id="designation" name="designation" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                <option>Choose designation</option>
                                @foreach($Salary as $item)
                                <option value="{{$item->id}}">{{$item->designation->designation}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col">
                        <div class="form-group" data-select2-id="5">
                            <label>Monthly Prof. Salary</label>
                            <input type="text" name="" value="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col">
                        <div class="form-group">
                            <label>Man Days</label>
                            <input type="text" min="0">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-warning float-end mt-4 mx-5 col-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
            <tr class="text-center">
                <th scope="col">SL</th>
                <th scope="col">Description</th>
                <th scope="col">Designation</th>
                <th scope="col">Monthly Prof. Salary</th>
                <th scope="col">Man Days</th>
                <th scope="col">Sub Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Project_Details as $key=>$item)
            <tr class="text-center">
                <th scope="row">{{$key+1}}</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>৳- 0 /-</td>
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
    <!-- /add -->
</div>

@endsection