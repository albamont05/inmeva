@props(['size' => '2', 'color' => 'primary'])

<!-- start  -->
<div class="d-flex align-items-center justify-content-center bg-{{ $color }} rounded-circle text-white fw-semibold text-center"
    style="width: {{ $size }}rem; height: {{ $size }}rem;">
    <span class="align-middle text-center text-uppercase">{{ $slot }}</span>
</div>
<!-- end  -->
