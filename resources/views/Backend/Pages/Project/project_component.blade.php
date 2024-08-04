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
                        <th colspan="3" class="col-6"></th>
                        <th class="text-center">Persentage(%)</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-warning">
                        <th colspan="4">Total Cost</th>
                        <td><input type="text" name="total" class="form-control" id="total" placeholder="Total">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="3">Risk</th>
                        <td><input type="text" name="total_persentage" id="risk" class="form-control"
                                placeholder="Persentage" maxlength="3">
                        </td>
                        <td><input type="text" name="total" class="form-control" id="risk_amount"
                                placeholder="Total Risk"></td>
                    </tr>
                    <tr>
                        <th colspan="3">Profit on TC</th>
                        <td><input type="text" name="profit_persentage" id="profit" class="form-control"
                                placeholder="Persentage">
                        </td>
                        <td><input type="text" name="profit_on_tc" id="profit_amount" class="form-control"
                                placeholder="Total Profit"></td>
                    </tr>
                    <tr class="bg-warning">
                        <th colspan="4">Sub-Total</th>
                        <td><input type="text" name="sub_total" id="sub_total" class="form-control"
                                placeholder="Sub-Total"></td>
                    </tr>
                    <tr>
                        <th colspan="3">Vat & Tax</th>
                        <td><input type="text" name="vat_tax_persentage" id="vat_tax" class="form-control"
                                placeholder="Persentage">
                        </td>
                        <td><input type="text" name="vat_tax" id="vat_tax_amount" class="form-control"
                                placeholder="Total Vat & Tax"></td>
                    </tr>
                    <tr class="bg-warning">
                        <th colspan="4">Grand Total</th>
                        <td><input type="text" name="grand_total" id="grand_total" class="form-control"
                                placeholder="Grand Total">
                        </td>
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

                    let total = parseFloat($('#total').val()) || 0;
                    let total_risk = parseFloat($('#risk_amount').val()) || 0;
                    let profit = parseFloat($('#profit_amount').val()) || 0;
                    let sub_total = $('#sub_total');
                    let vat_tax_amount = parseFloat($('#vat_tax_amount').val()) || 0;
                    let grand_total = $('#grand_total');

                    let sub_total_amount = total + total_risk + profit;
                    let grand_total_amount = vat_tax_amount + sub_total_amount;
                    sub_total.val(sub_total_amount.toFixed(2));
                    grand_total.val(grand_total_amount.toFixed(2));
                }
            }
        }

        $('#risk').on('keyup', function() {
            let total = parseFloat($('#total').val()) || 0;
            let risk = parseFloat($(this).val()) || 0;
            let total_risk = $('#risk_amount');
            let profit = parseFloat($('#profit_amount').val()) || 0;
            let sub_total = $('#sub_total');
            let vat_tax_amount = parseFloat($('#vat_tax_amount').val()) || 0;

            let cal_data = (total / 100) * risk;
            let sub_total_cal_data = total + cal_data + profit;

            total_risk.val(cal_data.toFixed(2));
            sub_total.val(sub_total_cal_data.toFixed(2));

            if (!isNaN(vat_tax_amount)) {
                let sub_total_amount = parseFloat(sub_total.val()) || 0;
                let grand_total_amount = vat_tax_amount + sub_total_amount;

                let grand_total = $('#grand_total');
                grand_total.val(grand_total_amount.toFixed(2));
            }
        });



        $('#profit').on('keyup', function() {
            let total = parseFloat($('#total').val()) || 0;
            let total_risk = parseFloat($('#risk_amount').val()) || 0;
            let profit = parseFloat($(this).val()) || 0;
            let total_profit = $('#profit_amount');
            let sub_total = $('#sub_total');
            let vat_tax_amount = parseFloat($('#vat_tax_amount').val()) || 0;

            let cal_data = (total / 100) * profit;
            let sub_total_cal_data = total + cal_data + total_risk;

            total_profit.val(cal_data.toFixed(2));
            sub_total.val(sub_total_cal_data.toFixed(2));

            if (!isNaN(vat_tax_amount)) {
                let sub_total_amount = parseFloat(sub_total.val()) || 0;
                let grand_total_amount = vat_tax_amount + sub_total_amount;

                let grand_total = $('#grand_total');
                grand_total.val(grand_total_amount.toFixed(2));
            }
        });

        $('#vat_tax').on('keyup', function() {
            let vat_tax = parseFloat($(this).val()) || 0;
            let sub_total = parseFloat($('#sub_total').val()) || 0;
            let total = parseFloat($('#total').val()) || 0;
            let vat_tax_amount = $('#vat_tax_amount');
            let grand_total = $('#grand_total');

            let cal_data = (total / 100) * vat_tax;
            let sub_total_cal_data = cal_data + sub_total;

            vat_tax_amount.val(cal_data.toFixed(2));
            grand_total.val(sub_total_cal_data.toFixed(2));
        });
    </script>
@endsection
