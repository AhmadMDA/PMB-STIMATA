@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
            <div class="flex items-center rounded-md space-x-2 mt-6" >
  <div class="relative">
    <select class="appearance-none bg-gray-200 text-gray-600 px-4 py-2 pr-8 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-300">
      <option>Filter Mata Kuliah</option>
      <option>Matkul 1</option>
      <option>Matkul 2</option>
      <option>Matkul 3</option>
    </select>
    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </div>
  </div>
</div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table gs-7 gy-7 gx-7 table-row-bordered table-row-gray-{100-900}">
                    <thead>
                        <tr class="fw-semibold fs-6 text-gray-900 border-bottom border-gray-400">
                            <th>No</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>RPL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">2002</td>
                            <td class="align-middle">Mata Kuliah</td>
                            <td class="align-middle">34</td>
                            <td class="align-middle"><input type="checkbox" id="option3" class="mr-2"></td>
                            </td>
                        </tr>
                        <tr>
                        <td class="align-middle">2</td>
                            <td class="align-middle">2002</td>
                            <td class="align-middle">Mata Kuliah</td>
                            <td class="align-middle">34</td>
                            <td class="align-middle"><input type="checkbox" id="option3" class="mr-2"></td>
                            </td>
                        </tr>
                        <tr>
                        <td class="align-middle">3</td>
                            <td class="align-middle">2002</td>
                            <td class="align-middle">Mata Kuliah</td>
                            <td class="align-middle">34</td>
                            <td class="align-middle"><input type="checkbox" id="option3" class="mr-2"></td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div class="text-left mt-6">
            <button class="btn btn-primary btn-sm mt-6 px-10">Simpan </button>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
