@extends('Backend.Master')

@section('content')
    <form action="{{ route('Project_Details_Store', $Project->id) }}" method="post">
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
            @foreach ($Titles as $key => $title)
                <div class="container bg-warning p-2 rounded-1">
                    {{ $key + 1 }}. {{ $title->title }}
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col">Description of Work</th>
                            <th class="col">Designation</th>
                            <th class="col">Man Days</th>
                            <th class="col">Total Months</th>
                            <th class="col">Monthly Prof. Salary</th>
                            <th class="col">Sub-Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Descriptions as $descKey => $description)
                            @if ($description->title_id == $title->id)
                                <tr>
                                    <td class="col">
                                        <select class="form-control" name="description_id[]">
                                            <option value="">Choose</option>
                                            @foreach ($Descriptions as $descItem)
                                                <option @if ($descItem->id == $description->id) selected @endif
                                                    value="{{ $descItem->id }}">
                                                    {{ $descItem->description }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="col">
                                        <select class="form-control" name="designation[]">
                                            <option value="">Choose</option>
                                            @foreach ($Designations as $designation)
                                                <option @if ($designation->description_id == $description->id) selected @endif
                                                    value="{{ $designation->id }}">
                                                    {{ $designation->designation }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="col">
                                        <input type="text" class="form-control" min="0" name="man_days[]">
                                    </td>
                                    <td class="col">
                                        <input type="text" class="form-control" name="man_months[]" readonly>
                                    </td>
                                    <td class="col">
                                        <select class="form-control" name="designation[]">
                                            <option value="">Choose</option>
                                            @foreach ($Salary as $amt)
                                                <option @if ($amt->designation_id == $description->designation[0]['id']) selected @endif
                                                    value="{{ $amt->id }}">
                                                    {{ $amt->salary }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="col">
                                        <input type="text" class="form-control" name="sub_total[]" readonly>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            @endforeach
        </div>
    </form>
@endsection
