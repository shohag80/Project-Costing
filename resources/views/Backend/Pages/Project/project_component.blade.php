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
                                <tr id="row_{{ ++$descKey }}">
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
                                        <input type="text" class="form-control man_days" min="0" name="man_days[]"
                                            maxlength="5" onkeyup="man_day(this.value)">
                                    </td>
                                    <td class="col">
                                        <input type="text" class="form-control man_months" name="man_months[]" readonly>
                                    </td>
                                    <td class="col">
                                        <select class="form-control salary" name="designation[]">
                                            <option value="">Choose</option>
                                            @foreach ($Salary as $amt)
                                                <option @if ($amt->designation_id == $description->designation[0]['id']) selected @endif
                                                    value="{{ $amt->salary }}">
                                                    {{ $amt->salary }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="col">
                                        <input type="text" class="form-control sub_total" name="sub_total[]" readonly>
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
@section('script')
    <script>
        function man_day(val) {
            let manDay = val;
            let calculatedManMonth = manDay / 22;

            let manDaysElement = event.target;
            let closestTr = $(manDaysElement).closest('tr');
            
            if (closestTr.length) {
                let manMonthsElement = closestTr.find('.man_months');
                let subTotalElement = closestTr.find('.sub_total');

                let salaryElement = closestTr.find('.salary');
                let salary = salaryElement.val();

                let calculatedSubTotal = salary * calculatedManMonth;

                if (manMonthsElement.length) {
                    manMonthsElement.val(calculatedManMonth.toFixed(2));
                }
                if (subTotalElement.length) {
                    subTotalElement.val(calculatedSubTotal.toFixed(2));
                }
            }
        }
    </script>
@endsection
