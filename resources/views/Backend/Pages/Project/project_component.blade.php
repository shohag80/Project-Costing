@extends('Backend.Master')

@section('content')
    <form action="{{ route('Project_Details_Store', $Project->id) }}" method="post">
        @csrf
        <div class="page-header">
            <div class="page-title col-lg-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-9 col-sm-9 col-9">
                        <h4>{{ $Project->project_title }} Components</h4>
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
                <div class="component_body">
                    <div class="container-fluid bg-warning p-2 rounded-1">
                        <div class="row">
                            <div class="col-md-6">{{ $key + 1 }}. {{ $title->title }}</div>
                            <div class="col-md-6 text-end">Title Sub-Total: <input type="text" name="title_sub_total"
                                    class="title_sub_total" readonly></div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col">Description of Work</th>
                                <th class="col">Designation</th>
                                <th class="col">Man Days</th>
                                <th class="col">Total Months</th>
                                <th class="col">Monthly Salary</th>
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
                                                @foreach ($Mapping as $map)
                                                    <option @if ($description->id == $map->id) selected @endif
                                                        value="{{ $map->id }}">
                                                        {{ $map->description->description }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="col">
                                            <select class="form-control" name="designation[]">
                                                <option value="">Choose</option>
                                                @foreach ($Mapping as $map)
                                                    <option @if ($description->id == $map->id) selected @endif
                                                        value="{{ $map->designation->designation }}">
                                                        {{ $map->designation->designation }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="col">
                                            <input type="text" class="form-control man_days" min="0"
                                                name="man_days[]" maxlength="4" onkeyup="man_day(this.value)">
                                        </td>
                                        <td class="col">
                                            <input type="text" class="form-control man_months" name="man_months[]"
                                                readonly>
                                        </td>
                                        <td class="col">
                                            <select class="form-control salary" name="designation[]">
                                                <option value="">Choose</option>
                                                @foreach ($Mapping as $map)
                                                    <option @if ($description->id == $map->id) selected @endif
                                                        value="{{ $map->designation->salary }}">
                                                        {{ $map->designation->salary }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="col">
                                            <input type="text" class="form-control sub_total" name="sub_total[]"
                                                readonly>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
        <div class="container">
            <table class="table table-hover">
                <div class="container text-center bg-warning">
                    <h5 class="m-2">Risk, Vat, Tax & Profit</h5>
                </div>
                <thead>
                    <tr>
                        <th class="col-6"></th>
                        <th></th>
                        <th></th>
                        <th class="text-center">Persentage(%)</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-warning">
                        <th>Total Cost</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="total" class="form-control" id="total" placeholder="Total">
                        </td>
                    </tr>
                    <tr>
                        <th>Risk</th>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="total_persentage" class="form-control" placeholder="Persentage">
                        </td>
                        <td><input type="text" name="total" class="form-control" placeholder="Total Risk"></td>
                    </tr>
                    <tr>
                        <th>Profit on TC</th>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="profit_persentage" class="form-control" placeholder="Persentage">
                        </td>
                        <td><input type="text" name="profit_on_tc" class="form-control" placeholder="Total Profit"></td>
                    </tr>
                    <tr class="bg-warning">
                        <th>Sub-Total</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="sub_total" class="form-control" placeholder="Sub-Total"></td>
                    </tr>
                    <tr>
                        <th>Vat & Tax</th>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="vat_tax_persentage" class="form-control" placeholder="Persentage">
                        </td>
                        <td><input type="text" name="vat_tax" class="form-control" placeholder="Total Vat & Tax"></td>
                    </tr>
                    <tr class="bg-warning">
                        <th>Grand Total</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="grand_total" class="form-control" placeholder="Grand Total"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
@endsection
@section('script')
    <script>
        function man_day(val) {
            let manDay = val;
            let calculatedManMonth = manDay / 22;

            let manDaysElement = event.target;
            let check = manDaysElement.value.replace(/[^0-9]/g, '');
            if(!check){
                manDaysElement.value = 0;
            }
            let closestTr = $(manDaysElement).closest('tr');
            let closestContainer = $(manDaysElement).closest('.container');
            let componentBody = $(manDaysElement).closest('.component_body');

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
                if (componentBody.length) {
                    let sub_total = componentBody.find('.sub_total');
                    let sum_sub_total = 0;

                    sub_total.each(function() {
                        sum_sub_total += parseFloat($(this).val()) || 0;
                    });
                    componentBody.find('.title_sub_total').val(sum_sub_total.toFixed(2));
                }
                if (closestContainer.length) {
                    let allSubTotal = closestContainer.find('.title_sub_total');

                    let sum_total = 0;
                    allSubTotal.each(function() {
                        sum_total += parseFloat($(this).val()) || 0;
                    });

                    $('#total').val(sum_total.toFixed(2));
                }
            }
        }
    </script>
@endsection
