<div class="mb-5 col-lg-4">
    <div class="border-0 shadow card h-100">
        <img class="card-img-top" height="300" src="{{ $product['image'] }}" alt="..." />
        <div class="p-4 card-body">
            {{-- <a class="text-decoration-none link-dark stretched-link"
                href="/dettaglio-prodotto/{{ $product['id'] }}"> --}}
            <a class="text-decoration-none link-dark stretched-link"
                href="{{ route('product.show', ['id' => $product['id']]) }}">
                <h5 class="mb-3 card-title">{{ $product['title'] }}</h5>
            </a>
            {{ $slot }}
            <p class="mb-0 card-text">{{ $product['description'] }}</p>
        </div>

    </div>
</div>
