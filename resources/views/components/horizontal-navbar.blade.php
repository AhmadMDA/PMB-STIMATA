<div id="horizontal_navbar" class="rounded bg-gray-200 d-flex flex-stack flex-wrap mb-9 p-2">
    <ul class="nav flex-wrap border-transparent w-100 gap-3">
        @foreach($items as $index => $item)
            <li class="nav-item my-1 flex-grow-1">
                <a class="btn btn-sm fw-bolder fw-bold fs-6 fs-lg-base nav-link text-center horizontal-nav-item
                    {{ $index === $defaultActiveItem ? $activeBackgroundColor . ' ' . $activeTextColor . ' active' : 'btn-color-gray-600 bg-state-body' }}" 
                    href="{{ $item['href'] }}" 
                    data-target="{{ $item['target'] }}"
                    data-active-bg="{{ $activeBackgroundColor }}"
                    data-active-text="{{ $activeTextColor }}">
                    {{ $item['text'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.horizontal-nav-item');

    function setActiveItem(item) {
        navItems.forEach(navItem => {
            navItem.classList.remove(navItem.dataset.activeBg, navItem.dataset.activeText, 'active');
            navItem.classList.add('btn-color-gray-600', 'bg-state-body');
        });
        item.classList.remove('btn-color-gray-600', 'bg-state-body');
        item.classList.add(item.dataset.activeBg, item.dataset.activeText, 'active');

        const targetId = item.getAttribute('data-target');
        document.querySelectorAll('.content-section').forEach(section => section.classList.add('d-none'));
        document.querySelector(targetId)?.classList.remove('d-none');
    }

    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            setActiveItem(this);
        });
    });

    const defaultActiveItem = document.querySelector('.horizontal-nav-item.active');
    if (defaultActiveItem) {
        defaultActiveItem.classList.remove('btn-color-gray-600', 'bg-state-body');
        defaultActiveItem.classList.add(defaultActiveItem.dataset.activeBg, defaultActiveItem.dataset.activeText);
    }
});
</script>