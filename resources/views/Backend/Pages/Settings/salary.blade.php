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
                    <div class="col-lg-5 col-sm-5 col-5">
                        <div class="mb-3 add-product">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designation" required>
                            <div class="text-danger">@error('designation'){{$massage}}@enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-10 col-10">
                        <div class="form-group">
                            <label class="form-label">Salary</label>
                            <input type="text" class="form-control" name="salary" list="salary_type" required>
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
                        <button type="submit" class="btn btn-submit mt-4">Add</button>
                    </div>
                </div>
            </form>
            <hr>
            <div class="page-header">
                <div class="page-title">
                    <h4>All designation in hear.</h4>
                </div>
            </div>

            <table class="table table-hover DataTable">
                <thead>
                    <tr class="text-center bg-warning">
                        <th scope="col">SL</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Designation as $key=>$item)
                    <tr class="text-center">
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$item->designation}}</td>
                        <td>৳- {{$item->salary}}/-</td>
                        <td class="action-table-data justify-content-center">
                            <div class="edit-delete-action">
                                <a class="me-2 p-2" href="{{route('Salary_Update', $item->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </a>
                                <a class="confirm-text p-2" href="{{route('Salary_Delete',$item->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                </a>
                            </div>
                        </td>
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