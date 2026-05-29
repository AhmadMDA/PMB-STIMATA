@extends('layouts.template')
@push('style')
    @livewireStyles()
@endpush
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table  gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jadwal</th>
                            <th>Link Zoom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Max Verstappen</td>
                            <td>22-08-2024</td>
                            <td><a href="" class="btn btn-primary btn-sm">Link</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Max Verstappen</td>
                            <td>22-08-2024</td>
                            <td><a href="" class="btn btn-primary btn-sm">Link</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Max Verstappen</td>
                            <td>22-08-2024</td>
                            <td><a href="" class="btn btn-primary btn-sm">Link</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    @livewireScripts()
@endpush
