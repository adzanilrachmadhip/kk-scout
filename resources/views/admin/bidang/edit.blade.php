@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Bidang Penelitian</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('research-fields.update', $researchField->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Research Field Name -->
                            <div class="form-group">
                                <label for="name">Nama Bidang</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $researchField->name) }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Active Status -->
                            <div class="form-group mb-3">
                                <label class="form-label">Status Bidang</label>
                                <select class="form-select" id="is_active" name="is_active">
                                    <option value="1"
                                        {{ old('is_active', $researchField->is_active) ? 'selected' : '' }}>Aktif</option>
                                    <option value="0"
                                        {{ !old('is_active', $researchField->is_active) ? 'selected' : '' }}>Tidak Aktif
                                    </option>
                                </select>
                                <small class="text-muted">Pilih status aktif/tidak aktif untuk bidang ini</small>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary updateConfirm">Perbarui Bidang</button>
                                <a href="{{ route('research-fields.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/template/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('swal2/script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update confirmation
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('updateConfirm')) {
                    event.preventDefault();
                    const form = event.target.closest('form');

                    Swal.fire({
                        title: 'Konfirmasi Perubahan',
                        text: "Anda yakin ingin memperbarui data bidang penelitian ini?",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Perbarui',
                        cancelButtonText: 'Batal',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                }
            });
        });
    </script>
@endsection
