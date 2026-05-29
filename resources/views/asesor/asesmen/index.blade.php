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
            @livewire('Asesor.Asesmen.AsesmenTabel')
        </div>
    </div>
@endsection
@push('script')
    @livewireScripts()
@endpush
