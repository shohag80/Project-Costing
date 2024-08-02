<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="submenu">
                            <a href="{{route('Dashboard')}}" class="active subdrop"><i data-feather="grid"></i><span>Dashboard</span></a>
                        </li>
                        
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Finance & Accounts</h6>
                    <ul>
                        <li class="submenu">
                            <a class="" href=""><i data-feather="file-text"></i><span>Expense</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('Project_List')}}">Project List</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Others</h6>
                    <ul>
                        <li class="submenu">
                            <a class="" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg><span>Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="{{route('Title')}}">Title</a></li>
                                <li><a class="" href="{{route('Description')}}">Description Settings</a></li>
                                <li><a class="" href="{{route('Salary')}}">Designation & Salary Settings</a></li>
                                <li><a class="" href="{{route('Mapping')}}">Mapping Settings</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('Logout')}}"><i data-feather="log-out"></i><span>Logout</span> </a>
                        </li>
                    </ul>
                </li>

                <!-- <li class="submenu-open">
                    <h6 class="submenu-hdr">Inventory</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/product-list"><i data-feather="box"></i><span>Products</span></a>
                        </li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/add-product"><i data-feather="plus-square"></i><span>Create
                                    Product</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expired-products"><i data-feather="codesandbox"></i><span>Expired
                                    Products</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/low-stocks"><i data-feather="trending-down"></i><span>Low
                                    Stocks</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/category-list"><i data-feather="codepen"></i><span>Category</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sub-categories"><i data-feather="speaker"></i><span>Sub
                                    Category</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/brand-list"><i data-feather="tag"></i><span>Brands</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/units"><i data-feather="speaker"></i><span>Units</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/varriant-attributes"><i data-feather="layers"></i><span>Variant
                                    Attributes</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/warranty"><i data-feather="bookmark"></i><span>Warranties</span></a>
                        </li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/barcode"><i data-feather="align-justify"></i><span>Print
                                    Barcode</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/qrcode"><i data-feather="maximize"></i><span>Print QR Code</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Stock</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/manage-stocks"><i data-feather="package"></i><span>Manage
                                    Stock</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/stock-adjustment"><i data-feather="clipboard"></i><span>Stock
                                    Adjustment</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/stock-transfer"><i data-feather="truck"></i><span>Stock
                                    Transfer</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-list"><i data-feather="shopping-cart"></i><span>Sales</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/invoice-report"><i data-feather="file-text"></i><span>Invoices</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-returns"><i data-feather="copy"></i><span>Sales
                                    Return</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/quotation-list"><i data-feather="save"></i><span>Quotation</span></a>
                        </li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/pos"><i data-feather="hard-drive"></i><span>POS</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Promo</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/coupons"><i data-feather="shopping-cart"></i><span>Coupons</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Purchases</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-list"><i data-feather="shopping-bag"></i><span>Purchases</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-order-report"><i data-feather="file-minus"></i><span>Purchase Order</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-returns"><i data-feather="refresh-cw"></i><span>Purchase
                                    Return</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Finance & Accounts</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="file-text"></i><span>Expenses</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expense-list" class="">Expenses</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expense-category" class="">Expense
                                        Category</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Peoples</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/customers"><i data-feather="user"></i><span>Customers</span></a>
                        </li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/suppliers"><i data-feather="users"></i><span>Suppliers</span></a>
                        </li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/store-list"><i data-feather="home"></i><span>Stores</span></a>
                        </li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/warehouse"><i data-feather="archive"></i><span>Warehouses</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">HRM</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/employees-grid"><i data-feather="user"></i><span>Employees</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/department-grid"><i data-feather="users"></i><span>Departments</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/designation"><i data-feather="git-merge"></i><span>Designation</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/shift"><i data-feather="shuffle"></i><span>Shifts</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="book-open"></i><span>Attendence</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/attendance-employee" class="">Employee</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/attendance-admin" class="">Admin</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="calendar"></i><span>Leaves</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/leaves-admin" class="">Admin Leaves</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/leaves-employee" class="">Employee
                                        Leaves</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/leave-types" class="">Leave Types</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/holidays"><i data-feather="credit-card"></i><span>Holidays</span></a>
                        </li>
                        <li class="submenu">
                            <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payroll-list" class=""><i data-feather="dollar-sign"></i><span>Payroll</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payroll-list" class="">Employee Salary</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payslip" class="">Payslip</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-report"><i data-feather="bar-chart-2"></i><span>Sales
                                    Report</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-report"><i data-feather="pie-chart"></i><span>Purchase
                                    report</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/inventory-report"><i data-feather="inbox"></i><span>Inventory
                                    Report</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/invoice-report"><i data-feather="file"></i><span>Invoice
                                    Report</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/supplier-report"><i data-feather="user-check"></i><span>Supplier
                                    Report</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/customer-report"><i data-feather="user"></i><span>Customer
                                    Report</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expense-report"><i data-feather="file"></i><span>Expense
                                    Report</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/income-report"><i data-feather="bar-chart"></i><span>Income
                                    Report</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/tax-reports"><i data-feather="database"></i><span>Tax
                                    Report</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/profit-and-loss"><i data-feather="pie-chart"></i><span>Profit &
                                    Loss</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/users"><i data-feather="user-check"></i><span>Users</span></a>
                        </li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/roles-permissions"><i data-feather="shield"></i><span>Roles &
                                    Permissions</span></a></li>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/delete-account"><i data-feather="lock"></i><span>Delete Account
                                    Request</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Pages</h6>
                    <ul>
                        <li class=""><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/profile"><i data-feather="user"></i><span>Profile</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="shield"></i><span>Authentication</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin">Cover</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin-2">Illustration</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/register">Cover</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/register-2">Illustration</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/register-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password">Cover</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password-2">Illustration</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/reset-password">Cover</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/reset-password-2">Illustration</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/reset-password-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-verification">Cover</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-verification-2">Illustration</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-verification-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/two-step-verification">Cover</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/two-step-verification-2">Illustration</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/two-step-verification-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/lock-screen">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Error
                                    Pages</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/error-404">404 Error </a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/error-500">500 Error </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="map"></i><span>Places</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/countries" class="">Countries</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/states" class="">States</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/blank-page"><i data-feather="file"></i><span>Blank Page</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/coming-soon"><i data-feather="send"></i><span>Coming Soon</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/under-maintenance"><i data-feather="alert-triangle"></i><span>Under
                                    Maintenance</span> </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="settings"></i><span>General
                                    Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/general-settings" class="">Profile</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/security-settings" class="">Security</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/notification" class="">Notifications</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/connected-apps" class="">Connected
                                        Apps</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="globe"></i><span>Website
                                    Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/system-settings" class="">System
                                        Settings</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/company-settings" class="">Company
                                        Settings </a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/localization-settings" class="">Localization</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/prefixes" class="">Prefixes</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/preference" class="">Preference</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/appearance" class="">Appearance</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/social-authentication" class="">Social
                                        Authentication</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/language-settings" class="">Language</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="smartphone"></i>
                                <span>App Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/invoice-settings" class="">Invoice</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/printer-settings" class="">Printer</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/pos-settings" class="">POS</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/custom-fields" class="">Custom Fields</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="monitor"></i>
                                <span>System Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-settings" class="">Email</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sms-gateway" class="">SMS Gateways</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/otp-settings" class="">OTP</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/gdpr-settings" class="">GDPR Cookies</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="dollar-sign"></i>
                                <span>Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payment-gateway-settings" class="">Payment
                                        Gateway</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/bank-settings-grid" class="">Bank
                                        Accounts</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/tax-rates" class="">Tax Rates</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/currency-settings" class="">Currencies</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=" "><i data-feather="hexagon"></i>
                                <span>Other Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/storage-settings" class="">Storage</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ban-ip-address" class="">Ban IP
                                        Address</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin"><i data-feather="log-out"></i><span>Logout</span> </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">UI Interface</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="">
                                <i data-feather="layers"></i><span>Base UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-alerts" class="">Alerts</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-accordion" class="">Accordion</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-avatar" class="">Avatar</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-badges" class="">Badges</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-borders" class="">Border</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-buttons" class="">Buttons</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-buttons-group" class="">Button
                                        Group</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-breadcrumb" class="">Breadcrumb</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-cards" class="">Card</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-carousel" class="">Carousel</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-colors" class="">Colors</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-dropdowns" class="">Dropdowns</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-grid" class="">Grid</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-images" class="">Images</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-lightbox" class="">Lightbox</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-media" class="">Media</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-modals" class="">Modals</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-offcanvas" class="">Offcanvas</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-pagination" class="">Pagination</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-popovers" class="">Popovers</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-progress" class="">Progress</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-placeholders" class="">Placeholders</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-rangeslider" class="">Range Slider</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-spinner" class="">Spinner</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-sweetalerts" class="">Sweet Alerts</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-nav-tabs" class="">Tabs</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-toasts" class="">Toasts</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-tooltips" class="">Tooltips</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-typography" class="">Typography</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-video" class="">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="">
                                <i data-feather="layers"></i><span>Advanced UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-ribbon" class="">Ribbon</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-clipboard" class="">Clipboard</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-drag-drop" class="">Drag & Drop</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-rating" class="">Rating</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-text-editor" class="">Text Editor</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-counter" class="">Counter</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-scrollbar" class="">Scrollbar</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-stickynote" class="">Sticky Note</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-timeline" class="">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="bar-chart-2"></i>
                                <span>Charts</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-apex" class="">Apex Charts</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-c3" class="">Chart C3</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-js" class="">Chart Js</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-morris" class="">Morris Charts</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-flot" class="">Flot Charts</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-peity" class="">Peity Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="database"></i>
                                <span>Icons</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-fontawesome" class="">Fontawesome
                                        Icons</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-feather" class="">Feather Icons</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-ionic" class="">Ionic Icons</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-material" class="">Material Icons</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-pe7" class="">Pe7 Icons</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-simpleline" class="">Simpleline
                                        Icons</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-themify" class="">Themify Icons</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-weather" class="">Weather Icons</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-typicon" class="">Typicon Icons</a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-flag" class="">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="">
                                <i data-feather="edit"></i><span>Forms</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);" class="">Form
                                        Elements<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-basic-inputs" class="">Basic
                                                Inputs</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-checkbox-radios" class="">Checkbox
                                                & Radios</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-input-groups" class="">Input
                                                Groups</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-grid-gutters" class="">Grid &
                                                Gutters</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-select" class="">Form
                                                Select</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-mask" class="">Input
                                                Masks</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-fileupload" class="">File
                                                Uploads</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);" class="">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-horizontal" class="">Horizontal
                                                Form</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-vertical" class="">Vertical
                                                Form</a></li>
                                        <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-floating-labels" class="">Floating
                                                Labels</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-validation" class="">Form
                                        Validation</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-select2" class="">Select2</a></li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-wizard" class="">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><i data-feather="columns"></i><span>Tables</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/tables-basic" class="">Basic Tables </a>
                                </li>
                                <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/data-tables" class="">Data Table </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Help</h6>
                    <ul>
                        <li><a href="javascript:void(0);"><i data-feather="file-text"></i><span>Documentation</span></a></li>
                        <li><a href="javascript:void(0);"><i data-feather="lock"></i><span>Changelog v2.0.3</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Multi
                                    Level</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="javascript:void(0);">Level 1.1</a></li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Level 2.1</a></li>
                                        <li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Level 3.1</a></li>
                                                <li><a href="javascript:void(0);">Level 3.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
<!-- Sidebar -->
<!-- <div class="sidebar collapsed-sidebar" id="collapsed-sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu-2" class="sidebar-menu sidebar-menu-three">
            <aside id="aside" class="ui-aside">
                <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/menu-icon.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link " href="#messages" id="messages-tab" data-bs-toggle="tab" data-bs-target="#product" role="tab" aria-selected="false">
                            <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/product.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link " href="#profile" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sales" role="tab" aria-selected="false">
                            <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/sales1.svg" alt="">
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link " href="#report" id="report-tab" data-bs-toggle="tab" data-bs-target="#purchase" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/purchase1.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link " href="#set" id="set-tab" data-bs-toggle="tab" data-bs-target="#user" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/users1.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link " href="#set2" id="set-tab2" data-bs-toggle="tab" data-bs-target="#employee" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/calendars.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link " href="#set3" id="set-tab3" data-bs-toggle="tab" data-bs-target="#report" role="tab" aria-selected="true">
                            <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/printer.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link " href="#set4" id="set-tab4" data-bs-toggle="tab" data-bs-target="#document" role="tab" aria-selected="true">
                            <i data-feather="file-minus"></i>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link " href="#set5" id="set-tab6" data-bs-toggle="tab" data-bs-target="#permission" role="tab" aria-selected="true">
                            <i data-feather="user"></i>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link " href="#set6" id="set-tab5" data-bs-toggle="tab" data-bs-target="#settings" role="tab" aria-selected="true">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="tab-content tab-content-four pt-2">
                <ul class="tab-pane active" id="home" aria-labelledby="home-tab">
                    <li class="submenu">
                        <a href="javascript:void(0);" class="active subdrop"><span>Dashboard</span>
                            <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/index" class="active">Admin Dashboard</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-dashboard" class="">Sales Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Application</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chat" class="">Chat</a></li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);" class=""><span>Call</span><span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/video-call">Video Call</a></li>
                                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/audio-call">Audio Call</a></li>
                                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/call-history">Call History</a></li>
                                </ul>
                            </li>
                            <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/calendar">Calendar</a></li>
                            <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email">Email</a></li>
                            <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/todo">To
                                    Do</a></li>
                            <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/notes">Notes</a></li>
                            <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/file-manager">File Manager</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane " id="product" aria-labelledby="messages-tab">
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/product-list" class=""><span>Products</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/add-product" class=""><span>Create Product</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expired-products" class=""><span>Expired
                                Products</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/low-stocks" class=""><span>Low Stocks</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/category-list" class=""><span>Category</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sub-categories" class=""><span>Sub Category</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/brand-list" class=""><span>Brands</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/units" class=""><span>Units</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/varriant-attributes" class=""><span>Variant
                                Attributes</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/warranty" class=""><span>Warranties</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/barcode" class=""><span>Print Barcode</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/qrcode" class=""><span>Print QR Code</span></a></li>
                </ul>
                <ul class="tab-pane " id="sales" aria-labelledby="profile-tab">
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-list" class=""><span>Sales</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/invoice-report"><span>Invoices</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-returns" class=""><span>Sales Return</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/quotation-list" class=""><span>Quotation</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/pos" class=""><span>POS</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/coupons" class=""><span>Coupons</span></a></li>
                </ul>
                <ul class="tab-pane " id="purchase" aria-labelledby="report-tab">
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-list" class=""><span>Purchases</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-order-report" class=""><span>Purchase
                                Order</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-returns" class=""><span>Purchase
                                Return</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/manage-stocks" class=""><span>Manage Stock</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/stock-adjustment" class=""><span>Stock
                                Adjustment</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/stock-transfer" class=""><span>Stock
                                Transfer</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Expenses</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expense-list" class="">Expenses</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expense-category" class="">Expense Category</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <ul class="tab-pane " id="user" aria-labelledby="set-tab">

                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/customers" class=""><span>Customers</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/suppliers" class=""><span>Suppliers</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/store-list" class=""><span>Stores</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/warehouse" class=""><span>Warehouses</span></a></li>

                </ul>
                <ul class="tab-pane " id="employee" aria-labelledby="set-tab2">
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/employees-grid" class=""><span>Employees</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/department-grid" class=""><span>Departments</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/designation" class=""><span>Designation</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/shift" class=""><span>Shifts</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Attendence</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/attendance-employee" class="">Employee
                                    Attendence</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/attendance-admin" class="">Admin
                                    Attendence</a></li>
                        </ul>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Leaves</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/leaves-admin" class="">Admin Leaves</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/leaves-employee" class="">Employee Leaves</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/leave-types" class="">Leave Types</a></li>
                        </ul>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/holidays" class=""><span>Holidays</span></a></li>
                    <li class="submenu">
                        <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payroll-list" class=""><span>Payroll</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payroll-list" class="">Employee Salary</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payslip" class="">Payslip</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane " id="report" aria-labelledby="set-tab3">
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-report" class=""><span>Sales Report</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-report" class=""><span>Purchase
                                report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/inventory-report" class=""><span>Inventory
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/invoice-report" class=""><span>Invoice
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/supplier-report" class=""><span>Supplier
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/customer-report" class=""><span>Customer
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expense-report" class=""><span>Expense
                                Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/income-report" class=""><span>Income Report</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/tax-reports" class=""><span>Tax Report</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/profit-and-loss" class=""><span>Profit &
                                Loss</span></a></li>
                </ul>
                <ul class="tab-pane " id="permission" aria-labelledby="set-tab4">
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/users" class=""><span>Users</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/roles-permissions" class=""><span>Roles &
                                Permissions</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/delete-account" class=""><span>Delete Account
                                Request</span></a></li>

                    <li class="submenu">
                        <a href="javascript:void(0);" class="">
                            <span>Base UI</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-alerts" class="">Alerts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-accordion" class="">Accordion</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-avatar" class="">Avatar</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-badges" class="">Badges</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-borders" class="">Border</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-buttons" class="">Buttons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-buttons-group" class="">Button
                                    Group</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-breadcrumb" class="">Breadcrumb</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-cards" class="">Card</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-carousel" class="">Carousel</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-colors" class="">Colors</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-dropdowns" class="">Dropdowns</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-grid" class="">Grid</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-images" class="">Images</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-lightbox" class="">Lightbox</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-media" class="">Media</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-modals" class="">Modals</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-offcanvas" class="">Offcanvas</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-pagination" class="">Pagination</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-popovers" class="">Popovers</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-progress" class="">Progress</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-placeholders" class="">Placeholders</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-rangeslider" class="">Range Slider</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-spinner" class="">Spinner</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-sweetalerts" class="">Sweet Alerts</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-nav-tabs" class="">Tabs</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-toasts" class="">Toasts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-tooltips" class="">Tooltips</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-typography" class="">Typography</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-video" class="">Video</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="">
                            <span>Advanced UI</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-ribbon" class="">Ribbon</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-clipboard" class="">Clipboard</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-drag-drop" class="">Drag & Drop</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-rating" class="">Rating</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-text-editor" class="">Text Editor</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-counter" class="">Counter</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-scrollbar" class="">Scrollbar</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-stickynote" class="">Sticky Note</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-timeline" class="">Timeline</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Charts</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-apex" class="">Apex Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-c3" class="">Chart C3</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-js" class="">Chart Js</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-morris" class="">Morris Charts</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-flot" class="">Flot Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-peity" class="">Peity Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Icons</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-fontawesome" class="">Fontawesome
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-feather" class="">Feather Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-ionic" class="">Ionic Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-material" class="">Material Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-pe7" class="">Pe7 Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-simpleline" class="">Simpleline
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-themify" class="">Themify Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-weather" class="">Weather Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-typicon" class="">Typicon Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-flag" class="">Flag Icons</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="">
                            <span>Forms</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);" class="">Form
                                    Elements<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-basic-inputs" class="">Basic
                                            Inputs</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-checkbox-radios" class="">Checkbox
                                            & Radios</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-input-groups" class="">Input
                                            Groups</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-grid-gutters" class="">Grid &
                                            Gutters</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-select" class="">Form
                                            Select</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-mask" class="">Input
                                            Masks</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-fileupload" class="">File
                                            Uploads</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);" class="">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-horizontal" class="">Horizontal
                                            Form</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-vertical" class="">Vertical
                                            Form</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-floating-labels" class="">Floating
                                            Labels</a></li>
                                </ul>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-validation" class="">Form
                                    Validation</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-select2" class="">Select2</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-wizard" class="">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Tables</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/tables-basic" class="">Basic Tables </a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/data-tables" class="">Data Table </a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="tab-pane " id="document" aria-labelledby="set-tab5">
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/profile"><span>Profile</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/register">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/register-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/register-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/reset-password">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/reset-password-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/reset-password-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-verification">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-verification-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-verification-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/two-step-verification">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/two-step-verification-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/two-step-verification-3">Basic</a></li>
                                </ul>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/lock-screen">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Error Pages</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/error-404">404 Error </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/error-500">500 Error </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Places</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/countries" class="">Countries</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/states" class="">States</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/blank-page"><span>Blank Page</span> </a>
                    </li>
                    <li>
                        <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/coming-soon"><span>Coming Soon</span> </a>
                    </li>
                    <li>
                        <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/under-maintenance"><span>Under Maintenance</span> </a>
                    </li>
                </ul>
                <ul class="tab-pane " id="settings" aria-labelledby="set-tab6">
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>General
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/general-settings" class="">Profile</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/security-settings" class="">Security</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/notification" class="">Notifications</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/connected-apps" class="">Connected
                                    Apps</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Website
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/system-settings" class="">System
                                    Settings</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/company-settings" class="">Company
                                    Settings </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/localization-settings" class="">Localization</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/prefixes" class="">Prefixes</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/preference" class="">Preference</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/appearance" class="">Appearance</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/social-authentication" class="">Social
                                    Authentication</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/language-settings" class="">Language</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>App
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/invoice-settings" class="">Invoice</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/printer-settings" class="">Printer</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/pos-settings" class="">POS</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/custom-fields" class="">Custom Fields</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>System
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-settings" class="">Email</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sms-gateway" class="">SMS Gateways</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/otp-settings" class="">OTP</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/gdpr-settings" class="">GDPR Cookies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Financial
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payment-gateway-settings" class="">Payment
                                    Gateway</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/bank-settings-grid" class="">Bank
                                    Accounts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/tax-rates" class="">Tax Rates</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/currency-settings" class="">Currencies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Other
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/storage-settings" class="">Storage</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ban-ip-address" class="">Ban IP
                                    Address</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"><span>Documentation</span></a></li>
                    <li><a href="javascript:void(0);"><span>Changelog v2.0.3</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="javascript:void(0);">Level 1.1</a></li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Level 2.1</a></li>
                                    <li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level
                                            2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Level 3.1</a></li>
                                            <li><a href="javascript:void(0);">Level 3.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->
<!-- /Sidebar -->
<!-- Sidebar -->
<!-- <div class="sidebar horizontal-sidebar">
    <div id="sidebar-menu-3" class="sidebar-menu">
        <ul class="nav">
            <li class="submenu">
                <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/index" class="active subdrop"><i data-feather="grid"></i><span> Main Menu</span>
                    <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="active subdrop"><span>Dashboard</span>
                            <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/index" class="active">Admin
                                    Dashboard</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-dashboard" class="">Sales Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Application</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chat" class="">Chat</a>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);" class=" "><span>Call</span><span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/video-call" class="">Video Call</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/audio-call" class="">Audio Call</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/call-history" class="">Call History</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/calendar" class="">Calendar</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email" class="">Email</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/todo" class="">To
                                    Do</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/notes" class="">Notes</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/file-manager" class="">File Manager</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);" class=""><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/product.svg" alt="img"><span> Inventory
                    </span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/product-list" class=""><span>Products</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/add-product" class=""><span>Create
                                Product</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expired-products" class=""><span>Expired
                                Products</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/low-stocks" class=""><span>Low
                                Stocks</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/category-list" class=""><span>Category</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sub-categories" class=""><span>Sub
                                Category</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/brand-list" class=""><span>Brands</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/units" class=""><span>Units</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/varriant-attributes" class=""><span>Variant
                                Attributes</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/warranty" class=""><span>Warranties</span></a>
                    </li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/barcode" class=""><span>Print
                                Barcode</span></a></li>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/qrcode" class=""><span>Print
                                QR Code</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);" class=""><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/purchase1.svg" alt="img"><span>Sales &amp;
                        Purchase</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Sales</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-list" class=""><span>Sales</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/invoice-report" class=""><span>Invoices</span></a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-returns" class=""><span>Sales
                                        Return</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/quotation-list" class=""><span>Quotation</span></a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/pos" class=""><span>POS</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/coupons" class=""><span>Coupons</span></a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Purchase</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-list" class=""><span>Purchases</span></a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-order-report" class=""><span>Purchase
                                        Order</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-returns" class=""><span>Purchase
                                        Return</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/manage-stocks" class=""><span>Manage
                                        Stock</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/stock-adjustment" class=""><span>Stock
                                        Adjustment</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/stock-transfer" class=""><span>Stock
                                        Transfer</span></a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Expenses</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expense-list" class="">Expenses</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expense-category" class="">Expense Category</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);" class=""><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/users1.svg" alt="img"><span>User Management</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>People</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/customers" class=""><span>Customers</span></a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/suppliers" class=""><span>Suppliers</span></a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/store-list" class=""><span>Stores</span></a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/warehouse" class=""><span>Warehouses</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Roles
                                &amp; Permissions</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/roles-permissions" class=""><span>Roles &
                                        Permissions</span></a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/delete-account" class=""><span>Delete Account
                                        Request</span></a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Base
                                UI</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-alerts" class="">Alerts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-accordion" class="">Accordion</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-avatar" class="">Avatar</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-badges" class="">Badges</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-borders" class="">Border</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-buttons" class="">Buttons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-buttons-group" class="">Button
                                    Group</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-breadcrumb" class="">Breadcrumb</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-cards" class="">Card</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-carousel" class="">Carousel</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-colors" class="">Colors</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-dropdowns" class="">Dropdowns</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-grid" class="">Grid</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-images" class="">Images</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-lightbox" class="">Lightbox</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-media" class="">Media</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-modals" class="">Modals</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-offcanvas" class="">Offcanvas</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-pagination" class="">Pagination</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-popovers" class="">Popovers</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-progress" class="">Progress</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-placeholders" class="">Placeholders</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-rangeslider" class="">Range Slider</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-spinner" class="">Spinner</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-sweetalerts" class="">Sweet Alerts</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-nav-tabs" class="">Tabs</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-toasts" class="">Toasts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-tooltips" class="">Tooltips</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-typography" class="">Typography</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-video" class="">Video</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Advanced
                                UI</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-ribbon" class="">Ribbon</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-clipboard" class="">Clipboard</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-drag-drop" class="">Drag & Drop</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-rating" class="">Rating</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-text-editor" class="">Text Editor</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-counter" class="">Counter</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-scrollbar" class="">Scrollbar</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-stickynote" class="">Sticky Note</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ui-timeline" class="">Timeline</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Charts</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-apex" class="">Apex Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-c3" class="">Chart C3</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-js" class="">Chart Js</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-morris" class="">Morris Charts</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-flot" class="">Flot Charts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/chart-peity" class="">Peity Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Primary
                                Icons</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-fontawesome" class="">Fontawesome
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-feather" class="">Feather Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-ionic" class="">Ionic Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-material" class="">Material Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-pe7" class="">Pe7 Icons</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Secondary
                                Icons</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-simpleline" class="">Simpleline
                                    Icons</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-themify" class="">Themify Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-weather" class="">Weather Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-typicon" class="">Typicon Icons</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/icon-flag" class="">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>
                                Forms</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);"><span>Form Elements</span><span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-basic-inputs" class="">Basic
                                            Inputs</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-checkbox-radios" class="">Checkbox
                                            & Radios</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-input-groups" class="">Input
                                            Groups</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-grid-gutters" class="">Grid &
                                            Gutters</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-select" class="">Form
                                            Select</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-mask" class="">Input
                                            Masks</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-fileupload" class="">File
                                            Uploads</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);" class=""><span>
                                        Layouts</span><span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-horizontal" class="">Horizontal
                                            Form</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-vertical" class="">Vertical
                                            Form</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-floating-labels" class="">Floating
                                            Labels</a></li>
                                </ul>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-validation" class="">Form
                                    Validation</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-select2" class="">Select2</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/form-wizard" class="">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Tables</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/tables-basic" class="">Basic Tables </a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/data-tables" class="">Data Table </a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="submenu">
                <a href="javascript:void(0);" class=""><i data-feather="user"></i><span>Profile</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/profile"><span>Profile</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/signin-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/register">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/register-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/register-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/reset-password">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/reset-password-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/reset-password-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-verification">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-verification-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-verification-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/two-step-verification">Cover</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/two-step-verification-2">Illustration</a></li>
                                    <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/two-step-verification-3">Basic</a></li>
                                </ul>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/lock-screen">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Pages</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/error-404" class="">404 Error </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/error-500" class="">500 Error </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/blank-page" class=""><span>Blank Page</span>
                                </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/coming-soon" class=""><span>Coming Soon</span>
                                </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/under-maintenance" class=""><span>Under
                                        Maintenance</span> </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Places</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/countries" class="">Countries</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/states" class="">States</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Employees</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/employees-grid"><span>Employees</span></a></li>
                            <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/department-grid"><span>Departments</span></a></li>
                            <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/designation"><span>Designation</span></a></li>
                            <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/shift"><span>Shifts</span></a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Attendence</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/attendance-employee" class="">Employee</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/attendance-admin" class="">Admin</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Leaves
                                &amp; Holidays</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/leaves-admin" class="">Admin Leaves</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/leaves-employee" class="">Employee
                                    Leaves</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/leave-types" class="">Leave Types</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/holidays" class=""><span>Holidays</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payroll-list" class=" "><span>Payroll</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payroll-list" class="">Employee Salary</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payslip" class="">Payslip</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);" class=""><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/printer.svg" alt="img"><span>Reports</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sales-report"><span>Sales
                                Report</span></a></li>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/purchase-report"><span>Purchase
                                report</span></a></li>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/inventory-report"><span>Inventory
                                Report</span></a></li>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/invoice-report"><span>Invoice
                                Report</span></a></li>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/supplier-report"><span>Supplier
                                Report</span></a></li>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/customer-report"><span>Customer
                                Report</span></a></li>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/expense-report"><span>Expense
                                Report</span></a></li>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/income-report"><span>Income
                                Report</span></a></li>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/tax-reports"><span>Tax
                                Report</span></a></li>
                    <li><a class="" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/profit-and-loss"><span>Profit &
                                Loss</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);" class=""><img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/icons/settings.svg" alt="img"><span>
                        Settings</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>General
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/general-settings" class="">Profile</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/security-settings" class="">Security</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/notification" class="">Notifications</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/connected-apps" class="">Connected
                                    Apps</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Website
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/system-settings" class="">System
                                    Settings</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/company-settings" class="">Company
                                    Settings </a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/localization-settings" class="">Localization</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/prefixes" class="">Prefixes</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/preference" class="">Preference</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/appearance" class="">Appearance</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/social-authentication" class="">Social
                                    Authentication</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/language-settings" class="">Language</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>App
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/invoice-settings" class="">Invoice</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/printer-settings" class="">Printer</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/pos-settings" class="">POS</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/custom-fields" class="">Custom Fields</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>System
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/email-settings" class="">Email</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/sms-gateway" class="">SMS Gateways</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/otp-settings" class="">OTP</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/gdpr-settings" class="">GDPR Cookies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=""><span>Financial
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/payment-gateway-settings" class="">Payment
                                    Gateway</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/bank-settings-grid" class="">Bank
                                    Accounts</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/tax-rates" class="">Tax Rates</a></li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/currency-settings" class="">Currencies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class=" "><span>Other
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/storage-settings" class="">Storage</a>
                            </li>
                            <li><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/ban-ip-address" class="">Ban IP
                                    Address</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"><span>Documentation</span></a></li>
                    <li><a href="javascript:void(0);"><span>Changelog v2.0.3</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="javascript:void(0);">Level 1.1</a></li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Level 2.1</a></li>
                                    <li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level
                                            2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Level 3.1</a></li>
                                            <li><a href="javascript:void(0);">Level 3.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div> -->