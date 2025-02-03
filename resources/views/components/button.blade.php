@isset($route)
    <a href="{{ $route }}" class="btn btn-sm btn-{{ $style ?? 'primary' }} {{ $attributes->get('class') }}" {{ $attributes }}>
        <i class="{{ $icon ?? '' }} {{ $size ?? 'fs-4' }}"></i> {{ $slot }}
    </a>
@else
<button type="{{ $type ?? 'button' }}" class="btn btn-sm btn-{{ $style ?? 'primary' }} {{ $attributes->get('class') }}"
    {{ $attributes }} @isset($modal) data-bs-toggle="modal" data-bs-target="#{{ $modal }}" @endisset>
    <i class="{{ $icon ?? '' }} {{ $size ?? 'fs-4' }}"></i> {{ $slot }}
</button>
@endif