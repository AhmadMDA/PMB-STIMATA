@props(['header', 'addOn' => ''])

<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0">
        <div class="card-title m-0 d-flex justify-content-between align-items-center w-100">
            <h3 class="fw-bold m-0">{{ $header }}</h3>
            {{ $addOn }}
        </div>
    </div>

    <div class="card-body border-top p-9">
        {{ $slot }}
    </div>
</div>