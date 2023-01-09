@props([''])

<div class="d-flex mt-4">
    {{-- Avatar Column --}}
    <div class="col-1 pe-5">
        {{ $icon }}
    </div>
    {{-- End Avatar Column --}}

    {{-- Body Comment Column --}}
    <div class="col-10 border-bottom">
        <div class="d-flex flex-column w-100">
            <div class="d-flex flex-row justify-content-between w-100 mb-0">
                <h5 class="mb-0 text-capitalize">{{$title}}</h5>
                <p class="text-muted fs-12 mb-0">{{$date}}</p>
            </div>
            <p class="text-success fs-12 mb-2 mt-0">{{$status}}</p>
            <h6>{{$content}}</h6>
        </div>
    </div>
    {{-- End Body Comment Column --}}
</div>
