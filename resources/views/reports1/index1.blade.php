@extends('app')
@section('title') Reports @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i>Reports</h1>
            <p>Lams reports</p>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id = "sampleTable">
                        <thead>
                            <tr>
                                <th>Column 1</th>
                                <th>Column 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 2</td>
                            </tr>
                            <tr>
                                <td>Row 2 Data 1</td>
                                <td>Row 2 Data 2</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')



<script type="text/javascript">




    $('#sampleTable').DataTable({
    buttons: [
        'copy', 'excel', 'pdf'
    ]
    });

    </script>

@endpush
