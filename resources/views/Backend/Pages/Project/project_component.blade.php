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
            @foreach ($Title as $key => $item)
                <div class="container bg-warning p-2 m-2 rounded-1">
                    {{ $key + 1 }}. {{ $item->title }}
                </div>
                <table>
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
                        @foreach ($Description as $row)
                            @if ($item->id == $row->title_id)
                                <tr>
                                    <td>
                                        <select class="form-control" name="desciption_id[]">
                                            <option data-select2-id="select2-data-24-z6go">Choose</option>
                                            @foreach ($Description as $item)
                                                <option @if ($item->id == $row->title_id) selected @endif
                                                    value="{{ $item->id }}">
                                                    {{ $item->description }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" id="designation" name="designation[]">
                                            <option value="">Choose</option>
                                            @foreach ($Designation as $item)
                                                <option @if ($item->id == 1) selected @endif
                                                    value="{{ $item->id }}" data-salary="{{ $item->monthly_salary }}">
                                                    {{ $item->designation }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" min="0" name="man_days[]"
                                            id="inputField" width="10px" required>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="man_month[]" id="man_month"
                                            value="" required readonly>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="salary" name="salary[]" readonly
                                            required>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="sub-total" name="sub_total[]"
                                            readonly required>
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
