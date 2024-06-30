@extends('Backend.Master')

@section('content')

<form action="{{route('Project_Details_Store', $Project->id )}}" method="post">
    @csrf
    <div class="page-header">
        <div class="page-title col-lg-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-lg-9 col-sm-9 col-9">
                    <h4>Project Components</h4>
                    <h6>Create new component</h6>
                </div>
                <div class="col-lg-3 col-sm-3 col-3 text-end">
                    <button type="submit" class="btn btn-submit">Create</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        @foreach($Project_Details as $item)
        <div class="row">
            <div class="col-2">
                <label class="form-label">Description of Work</label>
                <select class="select select2-hidden-accessible" name="desciption_id">
                    <option data-select2-id="select2-data-24-z6go">Choose</option>
                    @foreach($Description as $item)
                    <option @if($item->id==1) selected @endif value="{{$item->id}}">{{$item->description}}</option>
                    @endforeach
                </select>
                <div class="text-danger">@error('description'){{$massage}}@enderror</div>
            </div>
            <div class="col-2">
                <label class="form-label">Designation</label>
                <select class="select select2-hidden-accessible" id="designation" name="designation_id">
                    <option value="">Choose</option>
                    @foreach($Designation as $item)
                    <option @if($item->id==1) selected @endif value="{{$item->id}}" data-salary="{{$item->monthly_salary}}">{{$item->designation}}</option>
                    @endforeach
                </select>
                <div class="text-danger">@error('description'){{$massage}}@enderror</div>
            </div>
            <div class="col-2">
                <label class="form-label">Man Days</label>
                <input type="number" class="form-control" min="0" name="man_days" id="inputField" onkeyup="validateInput(this.value)" required>
                <div class="text-danger">@error('man_days'){{$massage}}@enderror</div>
            </div>
            <div class="col-2">
                <label class="form-label">Total Months</label>
                <input type="text" class="form-control" name="man_month" id="man_month" value="" required readonly>
                <div class="text-danger">@error('man_days'){{$massage}}@enderror</div>
            </div>
            <div class="col-2">
                <label class="form-label">Monthly Prof. Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" readonly required>
                <div class="text-danger">@error('monthly_salary'){{$message}}@enderror</div>
            </div>
            <div class="col-2">
                <label class="form-label">Sub-Total</label>
                <input type="text" class="form-control" id="sub-total" name="sub_total" readonly required>
                <div class="text-danger">@error('monthly_salary'){{$message}}@enderror</div>
            </div>
        </div>
        @endforeach
    </div>
</form>
@endsection