@extends('backend.layouts.app')
@section('styles')
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
<style>
    .dataTables_wrapper .dt-buttons {
        margin-bottom: 10px;
        /* Add margin to separate buttons from the table */
    }

    .select-all {
        cursor: pointer;
    }
</style>
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
@stop
@section("content")
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title"><button class="btn-secondary"><a href="{{ route('buses.create') }}">{{
                            __("Add New Bus") }}</a></button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap table-bordered" id="buses">
                        <thead class="table-warning">
                            <tr>
                                <th>{{ __("Id") }}</th>
                                <th>{{ __("GPS Bus ID") }}</th>
                                <th>{{ __("Name") }}</th>
                                <th>{{ __("Latitude") }}</th>
                                <th>{{ __("Longitude") }}</th>
                                <th>{{ __("Actions") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buses as $bus)
                            <tr>
                                <td>{{ $bus->id }}</td>
                                <td>{{ $bus->gps_bus_id }}</td>
                                <td>{{ $bus->name }}</td>
                                <td>{{ $bus->latitude }}</td>
                                <td>{{ $bus->longitude }}</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="{{ route('buses.show',$bus->id) }}" class="btn btn-icon btn-sm
                                            btn-success-transparent rounded-pill">
                                            <i class="fe fe-eye"></i></a>
                                        <a href="{{ route('buses.edit',$bus) }}" class="btn btn-icon btn-sm
                                            btn-info-transparent rounded-pill">
                                            <i class="ri-edit-line"></i></a>
                                        <form action="{{ route('buses.destroy',$bus->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-icon btn-sm btn-danger-transparent rounded-pill">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @section("script")
                <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
                <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
                <script src="https://cdn.datatables.net/rowgroup/1.3.1/js/dataTables.rowGroup.min.js"></script>
                <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
                <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
                <script>
                    $(document).ready(function() {
        $('#buses').DataTable({
            "order": [], // Disable initial sorting
            "searching": true, // Enable searching
            "paging": true, // Enable pagination
            "pageLength": 10, // Set the number of rows per page
            "pagingType": "simple_numbers",
            "columnDefs": [{
                "targets": -1, // Last column (actions column)
                "orderable": false, // Disable sorting
            }],
            'dom': 'Bfrtip',
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ], // Define dropdown options
            "buttons": [
                {
                    extend: 'copy',
                    text: '<i class="fas fa-copy"></i> Copy',
                    titleAttr: 'Copy'
                },
                {
                    extend: 'csv',
                    text: '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend: 'excel',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel'
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'PDF'
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> Print',
                    titleAttr: 'Print'
                },
                {
                    extend: 'colvis',
                    text: '<i class="fas fa-columns"></i> Column Visibility',
                    titleAttr: 'Column Visibility'
                }
            ],
        });
        });


                </script>


                @stop
                @endsection