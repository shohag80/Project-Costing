@extends('Backend.Master')

@section('content')

<div class="content-fluid">
    <!-- /add -->
    <div class="card">
        <div class="card-body">
            <div class="page-header">
                <div class="page-title">
                    <h4>Update Title</h4>
                </div>
            </div>
            <form action="{{route('Title_Update_Store',$Title->id)}}" method="post">
                @csrf
                <div class="row">
                    {{-- <div class="col-lg-5 col-sm-10 col-10">
                        <div class="form-group">
                            <label class="form-label">Project</label>
                            <select class="select select2-hidden-accessible" class="form-control" name="project_id" aria-hidden="true">
                                <option>Choose Project</option>
                                @foreach($Project as $item)
                                <option @if($Title->id==$item->id) selected @endif value="{{$item->id}}">{{$item->project_title}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">@error('project_id'){{$massage}}@enderror</div>
                        </div>
                    </div> --}}
                    <div class="col-lg-10 col-sm-10 col-10">
                        <div class="form-group">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$Title->title}}" required maxlength="50">
                            <div class="text-danger">@error('title'){{$massage}}@enderror</div>
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