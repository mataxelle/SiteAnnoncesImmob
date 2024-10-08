<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}"
                class="text-decoration-none title-price-color">{{ $property->title }}
            </a>
        </h5>
        <p class="card-text">{{ $property->surface }}m² - {{ $property->city }} ({{ $property->postal_code }})</p>
        <div class="fw-bold title-price-color">
            {{ number_format($property->price, thousands_separator: ' ') }}€
        </div>
    </div>
</div>
