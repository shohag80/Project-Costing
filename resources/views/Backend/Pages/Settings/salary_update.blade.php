@extends('Backend.Master')

@section('content')

<div class="content-fluid">
    <!-- /add -->
    <div class="card">
        <div class="card-body">
            <div class="page-header">
                <div class="page-title">
                    <h4>Update Salary</h4>
                </div>
            </div>
            <form action="{{route('Salary_Update_Store',$Salary->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-5 col-sm-5 col-5">
                        <div class="mb-3 add-product">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designation" required value="{{ $Salary->designation }}">
                            <div class="text-danger">@error('designation'){{$massage}}@enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-10 col-10">
                        <div class="form-group">
                            <label class="form-label">Salary</label>
                            <input type="text" class="form-control" name="salary" list="salary_type" value="{{$Salary->salary}}" required>
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
                        <button type="submit" class="btn btn-submit mt-4">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /add -->
</div>

@endsection