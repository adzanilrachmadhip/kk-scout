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
                        <h1 class="mb-2">Bidang Pengabdian</h1>
                        <a href="{{ route('products.create') }}" class="btn btn-primary mb-2">
                            <i class="feather icon-plus"></i> Tambah Pengabdian Baru 
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dom-jQuery-events">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" class="img-thumbnail"
                                                    style="width: 80px; height: 80px; object-fit: cover;"
                                                    alt="{{ $product->name }}">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            <span class="badge badge-{{ $product->is_active ? 'success' : 'secondary' }}">
                                                {{ $product->is_active ? 'Aktif' : 'Non-Aktif' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                    class="btn btn-sm btn-warning mr-1">
                                                    <i class="icon-settings"></i> Edit
                                                </a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                    class="delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger delete-btn">
                                                        <i class="feather icon-trash"></i> Hapus
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
            $('.delete-btn').on('click', function(e) {
                e.preventDefault();
                var form = $(this).closest('form');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data akan dihapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });

            // Initialize DataTable
            $('.dom-jQuery-events').DataTable({
                // buttons: [
                //     'copy', 'csv', 'excel', 'pdf', 'print'
                // ]
            });
        });
    </script>
@endsection
