@extends('admin.layouts.app')
@section('admin-content')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/swal2/styles.css') }}">

    <div class="container mt-3">
        <div class="row card p-2">
            <div class="container">
                <div class="col-md-12">
                    <div class="justify-content-between d-flex">
                        <h1 class="mb-2">Bidang Penelitian</h1>
                        <a href="{{ route('research-fields.create') }}" class="btn btn-primary mb-2">
                            <i class="feather icon-plus"></i> Tambah Bidang Baru
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dom-jQuery-events">
                            <thead>
                                <tr>
                                    <th>Nama Bidang</th>
                                    <th>Status</th>
                                    <th>Urutan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($researchFields as $field)
                                    <tr>
                                        <td>{{ $field->name }}</td>
                                        <td>
                                            <span class="badge badge-{{ $field->is_active ? 'success' : 'secondary' }}">
                                                {{ $field->is_active ? 'Aktif' : 'Non-Aktif' }}
                                            </span>
                                        </td>
                                        <td>{{ $field->order }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('research-fields.edit', $field->id) }}"
                                                    class="btn btn-sm btn-warning mr-1">
                                                    <i class="icon-settings"></i>
                                                </a>
                                                <form action="{{ route('research-fields.destroy', $field->id) }}"
                                                    method="POST" class="deleteConfirm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger deleteConfirm">
                                                        <i class="feather icon-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/template/app-assets/vendors/js/tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('swal2/script.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Delete confirmation
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('deleteConfirm')) {
                    event.preventDefault();
                    const form = event.target.closest('form');

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data akan dihapus permanen!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                }
            });

            // Initialize DataTable
            $('.dom-jQuery-events').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endsection
