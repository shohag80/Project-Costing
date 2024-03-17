@extends('Backend.Master')

@section('content')
<form action="{{route('Project_Details_Store')}}" method="post">
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
    @csrf
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Project name</label>
                <input type="text" class="form-control" name="project_name" value="{{$Project->id}}" readonly required>
                <div class="text-danger">@error('project_name'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Cost Title</label>
                <input type="text" class="form-control" name="cost_title" value="" required>
                <div class="text-danger">@error('cost_title'){{$massage}}@enderror</div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Description</label>
                <select class="select select2-hidden-accessible" name="desciption_id">
                    <option data-select2-id="select2-data-24-z6go">Choose</option>
                    @foreach($Description as $item)
                    <option value="{{$item->id}}">{{$item->description}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Designation</label>
                <select class="select select2-hidden-accessible" id="designation" name="designation_id">
                    <option value="">Choose</option>
                    @foreach($Designation as $item)
                    <option value="{{$item->id}}" data-salary="{{$item->monthly_salary}}">{{$item->designation}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Monthly Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" readonly required>
                <div class="text-danger">@error('monthly_salary'){{$message}}@enderror</div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Man Days</label>
                <input type="number" class="form-control" min="0" name="man_days" id="inputField" onkeyup="validateInput(this.value)" required>
                <div class="text-danger">@error('man_days'){{$massage}}@enderror</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="mb-3 add-product">
                <label class="form-label">Man Month</label>
                <input type="text" class="form-control" name="man_month" id="man_month" value="" required readonly>
                <div class="text-danger">@error('man_days'){{$massage}}@enderror</div>
            </div>
        </div>
    </div>
</form>
<hr>
<div class="page-header">
    <div class="add-item d-flex">
        <div class="page-title">
            <h4>Project List</h4>
            <h6>Manage your Project</h6>
        </div>
    </div>
    <ul class="table-top-head">
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Pdf" data-bs-original-title="Pdf"><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/pdf.svg" alt="img"></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Excel" data-bs-original-title="Excel"><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/excel.svg" alt="img"></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Print" data-bs-original-title="Print"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer feather-rotate-ccw">
                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                    <rect x="6" y="14" width="12" height="8"></rect>
                </svg></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh" data-bs-original-title="Refresh"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-ccw">
                    <polyline points="1 4 1 10 7 10"></polyline>
                    <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                </svg></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" id="collapse-header" aria-label="Collapse" data-bs-original-title="Collapse"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
                    <polyline points="18 15 12 9 6 15"></polyline>
                </svg></a>
        </li>
    </ul>
    <div class="page-btn">
        <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/add-product" class="btn btn-added"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle me-2">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>Add New Product</a>
    </div>
    <div class="page-btn import">
        <a href="#" class="btn btn-added color" data-bs-toggle="modal" data-bs-target="#view-notes"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download me-2">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                <polyline points="7 10 12 15 17 10"></polyline>
                <line x1="12" y1="15" x2="12" y2="3"></line>
            </svg>Import Product</a>
    </div>
</div>
<div class="table-top">
    <div class="search-set">
        <div class="search-input">
            <a href="javascript:void(0);" class="btn btn-searchset"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg></a>
            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label> <input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0"></label></div>
        </div>
    </div>
    <div class="search-path">
        <a class="btn btn-filter" id="filter_search">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter filter-icon">
                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
            </svg>
            <span><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/closes.svg" alt="img"></span>
        </a>
    </div>
    <div class="form-sort">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders info-img">
            <line x1="4" y1="21" x2="4" y2="14"></line>
            <line x1="4" y1="10" x2="4" y2="3"></line>
            <line x1="12" y1="21" x2="12" y2="12"></line>
            <line x1="12" y1="8" x2="12" y2="3"></line>
            <line x1="20" y1="21" x2="20" y2="16"></line>
            <line x1="20" y1="12" x2="20" y2="3"></line>
            <line x1="1" y1="14" x2="7" y2="14"></line>
            <line x1="9" y1="8" x2="15" y2="8"></line>
            <line x1="17" y1="16" x2="23" y2="16"></line>
        </svg>
        <select class="select select2-hidden-accessible" data-select2-id="select2-data-1-jkth" tabindex="-1" aria-hidden="true">
            <option data-select2-id="select2-data-3-w7gl">Sort by Date</option>
            <option>14 09 23</option>
            <option>11 09 23</option>
        </select>
    </div>
</div>
<table class="table table-hover zoom-1">
    <thead>
        <tr class="text-center bg-warning">
            <th scope="col">SL</th>
            <th scope="col">Cost Title</th>
            <th scope="col">Description</th>
            <th scope="col">Designation</th>
            <th scope="col">Monthly Salary</th>
            <th scope="col">Man Days</th>
            <th scope="col">Man Months</th>
            <th scope="col">Sub Total</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($Project_Details))
        @foreach($Project_Details as $key=>$item)
        <tr class="text-center">
            <th scope="row">{{$key+1}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->description->description}}</td>
            <td>{{$item->designation->designation}}</td>
            <td>{{$item->salary}}</td>
            <td>{{$item->man_days}} D</td>
            <td>{{$item->man_month}} M</td>
            <td>৳- {{$item->sub_total}} /-</td>
            <td class="action-table-data justify-content-center">
                <div class="edit-delete-action">
                    <a class="me-2 edit-icon  p-2" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </a>
                    <a class="me-2 p-2" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </a>
                    <a class="confirm-text p-2" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@include('Backend.Pages.Project.project_list_modal')

<script>
    // Designaion wise salary
    $(document).ready(function() {
        $('#designation').change(function() {
            var designationId = $(this).val();
            $.ajax({
                url: '/fetch-salary/' + designationId,
                type: 'GET',
                success: function(response) {
                    $('#salary').val(response.salary);
                },
                error: function() {
                    $('#salary').val('Error fetching salary');
                }
            });
        });

        // 
        function validateInput(value) {
            // alert(value);
            document.getElementById('man_month').value = value / 20;
        };
    });
</script>
@endsection