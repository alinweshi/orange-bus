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
@stop

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    <button class="btn btn-secondary">
                        <a href="{{ route('mobile_customers.create') }}">{{ __("Add New Card Customer") }}</a>
                    </button>
                </div>
            </div>
            <div class="card-body">


                <table class="table text-nowrap table-bordered">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">{{ __("ID") }}</th>
                            <th scope="col">{{ __("Full Name") }}</th>
                            <th scope="col">{{ __("E-mail") }}</th>
                            <th scope="col">{{ __("Phone") }}</th>
                            <th scope="col">{{ __("Status") }}</th>
                            <th scope="col">{{ __("Actions") }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mobileCustomers as $mobileCustomer)
                        <tr>
                            <td>{{ $mobileCustomer->id }}</td>
                            <td>{{ $mobileCustomer->fullName }}</td>
                            <td>{{ $mobileCustomer->email }}</td>
                            <td>{{ $mobileCustomer->phone }}</td>
                            <td>{{ $mobileCustomer->status }}</td>
                            <td>
                                <div class="hstack gap-2 fs-15">
                                    <a href="{{ route('mobile_customers.show', $mobileCustomer->id) }}"
                                        class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                        <i class="fe fe-eye"></i>
                                    </a>
                                    <a href="{{ route('mobile_customers.edit', $mobileCustomer->id) }}"
                                        class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                        <i class="ri-edit-line"></i>
                                    </a>
                                    <form action="{{ route('mobile_customers.destroy', $mobileCustomer->id) }}"
                                        method="POST" style="display:inline;">
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
                {{ $mobileCustomers->links() }}
            </div>
        </div>
    </div>
</div>

@section('script')
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
<script>
    $(document).ready(function() {
        $('#mobile_customers').DataTable({
            "order": [], // Disable initial sorting
            "searching": true, // Enable searching
            "paging": true, // Enable pagination
            "pageLength": 10, // Set the number of rows per page
            "pagingType": "simple_numbers",
            "columnDefs": [{
                "targets": -1, // Last column (actions column)
                "orderable": false, // Disable sorting
            }],
            "dom": 'Bfrtip',
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