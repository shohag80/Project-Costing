@extends('Backend.Master')

@section('content')
<form action="{{route('Project_Store')}}" method="post">
    @csrf
    <div class="page-header">
        <div class="page-title col-lg-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-lg-9 col-sm-9 col-9">
                    <h4>New Project</h4>
                    <h6>Create new project</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Project Code</label>
                <input type="text" class="form-control" name="project_code" id="numberInput" required>
                <div class="text-danger">@error('project_code'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Project Title</label>
                <input type="text" class="form-control" name="project_title" required>
                <div class="text-danger">@error('project_title'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Clients</label>
                <input type="text" class="form-control" name="client" required>
                <div class="text-danger">@error('client'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Submission Date</label>
                <input type="text" class="form-control" name="date" id="datepicker" placeholder="Select date (YYYY-MM-DD)" value="<?php echo date('Y-m-d'); ?>" required>
                <div class="text-danger">@error('client'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-12">
            <button type="submit" class="col-12 btn btn-submit">Create</button>
        </div>
    </div>
</form>
@endsection