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

    <body page-content-white">
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
                                        <table class="table table-striped table-bordered table-hover MarkTotal" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>Kit on</th>
                                                    <th>Male</th>
                                                    <th>Female</th>
                                                    <th>Total</th>

                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Kit on</th>
                                                    <th>Male</th>
                                                    <th>Female</th>
                                                    <th>Total</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>

                                                @foreach ($reports as $report)


                                                    <tr >
                                                        <td>{{ $report->Kit}}</td>
                                                        <td>{{ $report->Male }}</td>
                                                        <td>{{ $report->FEMALE }}</td>
                                                        <td>{{ $report->Total }}</td>

                                                    </tr>
                                                @endforeach

                                            <tr class="font-weight-bold">
                                                <td>Total</td>
                                                <td>{{ $reportTotal['MaleTotal'] }}</td>
                                                <td>{{ $reportTotal['FemaleTotal'] }}</td>
                                                <td>{{ $reportTotal['Total'] }}</td>

                                            </tr>




                                            </tbody>
                                        </table>
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
