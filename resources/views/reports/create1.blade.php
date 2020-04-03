<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title class="caption-subject bold" >{{ $reportParameter['title'] }} </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="LAMS Reports"  name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('datatable/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('datatable/assets/css/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('datatable/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('datatable/assets/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('datatable/assets/css/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('datatable/assets/css/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('datatable/assets/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('datatable/assets/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('datatable/assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('datatable/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('datatable/assets/css/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('datatable/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class ="page-content-white">
        <div class="page-wrapper">

            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">

                <!-- BEGIN CONTENT -->

                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->


                        <!-- BEGIN PAGE TITLE-->

                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="m-heading-1 border-green m-bordered">
                            <h3>LAMS Reports</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold ">{{ $reportParameter['title'] }} </span>
                                        </div>
                                        <div class="tools"> </div>
                                    </div>
                                    <div class="portlet-body">

                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-header"></div>

                                                    <div class="card-body">
                                                        <form method="GET" action="{{ route('reports.attendance') }}">
                                                            @csrf


                                                            <div class="form-group row">

                                                                <label for="report" class="col-md-4 col-form-label text-md-right">Report</label>

                                                                <div class="col-md-8">

                                                                 <select class="form-control" id="report" name="report_id">

                                                                   <option value="4">Select report</option>


                                                                   <option value="4">Clients Attendance Register All</option>

                                                                   <option value="1">Clients Attendance Register by Branch</option>

                                                                   <option value="2">Clients Attendance Register by Branch Unit</option>

                                                                   <option value="3">Clients Attendance Register By Advocate</option>

                                                                   <option value="5">Issues for Advocacy</option>

                                                                   <option value="6">Cases that were Subjected to Reconciliation</option>

                                                                   <option value="7">Clients Assisted to defend their own cases in Court by Branch</option>

                                                                   <option value="8">Self Help Kits Distributed to Clients by Branch</option>

                                                                   <option value="9">Self Help Kits Distributed to Clients by Unit</option>

                                                                   <option value="10">Self Help Kits Distributed to Clients by Advocate</option>

                                                                   <option value="11">Appearances for Clients Represented by LHRC advocates in Court</option>

                                                                   <option value="12">Follow up</option>

                                                                   <option value="13">Follow up by advocate</option>

                                                                   <option value="14">List of Cases/Clients Represented by Advocates</option>
                                                                 </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="startdate" class="col-md-4 col-form-label text-md-right">Start Date</label>

                                                                <div class="col-md-6">
                                                                    <input id="startdate" type="date" class="form-control @error('startdate') is-invalid @enderror" name="startdate" value="{{ old('startdate') }}" required autocomplete="startdate" autofocus>

                                                                    @error('startdate')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="enddate" class="col-md-4 col-form-label text-md-right">End Date</label>

                                                                <div class="col-md-6">
                                                                    <input id="enddate" type="date" class="form-control @error('enddate') is-invalid @enderror" name="enddate" value="{{ old('enddate') }}" required autocomplete="enddate" autofocus>

                                                                    @error('enddate')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="branch" class="col-md-4 col-form-label text-md-right">Branch</label>

                                                                <div class="col-md-6">
                                                                    <select class="form-control" id="report" name="branch">

                                                                        <option value="9">Select branch</option>


                                                                        <option value="Arusha">Arusha</option>

                                                                        <option value="Dodoma">Dodoma</option>

                                                                        <option value="Kinondoni">Kinondoni</option>

                                                                      </select>

                                                                    @error('branch')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="unit" class="col-md-4 col-form-label text-md-right">Unit</label>

                                                                <div class="col-md-6">
                                                                    <input id="unit" type="text" class="form-control @error('unit') is-invalid @enderror" name="unit" value="{{ old('unit') }}" autocomplete="unit" autofocus>

                                                                    @error('unit')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="advocate" class="col-md-4 col-form-label text-md-right">Advocate</label>

                                                                <div class="col-md-6">
                                                                    <input id="advocate" type="text" class="form-control @error('advocate') is-invalid @enderror" name="advocate" value="{{ old('advocate') }}"  autocomplete="advocate" autofocus>

                                                                    @error('advocate')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Create
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->

                            </div>
                        </div>


                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->





        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->

        <script src="{{ asset('datatable/assets/js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('datatable/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('datatable/assets/js/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('datatable/assets/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('datatable/assets/js/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('datatable/assets/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('datatable/assets/js/datatable.js')}}" type="text/javascript"></script>
        <script src="{{ asset('datatable/assets/js/datatables.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('datatable/assets/js/datatables.bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{ asset('datatable/assets/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('datatable/assets/js/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('datatable/assets/js/table-datatables-buttons.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->

        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
