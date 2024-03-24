@extends('Backend.Master')

@section('content')
<form action="{{route('Project_Update_Store',$project->id)}}" method="post">
    <div class="page-header">
        <div class="page-title col-lg-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-lg-9 col-sm-9 col-9">
                    <h4>Update Project</h4>
                </div>
                <div class="col-lg-3 col-sm-3 col-3 text-end">
                    <button type="submit" class="btn btn-submit">Update</button>
                </div>
            </div>
        </div>
    </div>
    @csrf
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Project Code</label>
                <input type="text" class="form-control" name="project_code" id="numberInput" value="{{$project->project_code}}" required>
                <div class="text-danger">@error('project_code'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Project Title</label>
                <input type="text" class="form-control" name="project_title" value="{{$project->project_title}}" required>
                <div class="text-danger">@error('project_title'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Clients</label>
                <input type="text" class="form-control" name="client" value="{{$project->client}}" required>
                <div class="text-danger">@error('client'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Submission Date</label>
                <input type="text" class="form-control" name="date" placeholder="Select date (YYYY-MM-DD)" value="{{$project->date}}" required>
                <div class="text-danger">@error('client'){{$massage}}@enderror</div>
            </div>
        </div>
    </div>
</form>

@include('Backend.Pages.Project.project_list_modal')
@endsection