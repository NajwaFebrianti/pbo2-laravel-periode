@extends('layouts.app')

@section('judul', 'Periode')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row g-2 align-items-center">
                        <div class="col-12 col-md-4">
                            <h3 class="card-title">Edit Periode</h3>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="d-flex flex-wrap justify-content-md-end gap-2">
                                <a href="{{ route('periode.index') }}" type="button" class="btn btn-sm btn-primary">
                                    <i class="bi bi-arrow-left-circle me-1" aria-hidden="true"> </i>
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('periode.update', $periode) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="periode" class="form-label"> Periode </label>
                            <input type="text" class="form-control" id="periode" name="periode" placeholder="contoh: GANJIL 2025/2026"
                                value="{{ old('periode', $periode->periode) }}" required />
                        </div>
                        <div class="mb-3">
                            <label for="singkatan" class="form-label"> Singkatan </label>
                            <input type="text" class="form-control" id="singkatan" name="singkatan" placeholder="251"
                                value="{{ old('singkatan', $periode->singkatan) }}" required />
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="status" name="status" value="1"
                                {{ old('status', $periode->status) ? 'checked' : '' }} />
                            <label class="form-check-label" for="status">
                                Status Aktif
                            </label>
                        </div>
                        <div class="d-flex flex-wrap justify-content-md-end">
                            <a href="{{ route('periode.index') }}" class="btn btn-secondary me-2">
                                <i class="bi bi-x-circle me-1" aria-hidden="true"> </i>
                                Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-1" aria-hidden="true"> </i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
