<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered {{ $size }}">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="modal-title" id="{{ $id }}Label">{{ $title }}</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <!-- Modal Body -->
            <div class="modal-body scroll-y mx-0 my-0">
                {{ $slot }}
            </div>
            <!-- Modal Footer
            <div class="modal-footer">
                {{ $footer ?? '' }}
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div> -->
        </div>
    </div>
</div>

