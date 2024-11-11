<x-app>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Lista dei prodotti</h2>

                        @if (session('success'))
                            {{ session('success') }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @foreach ($products as $product)
                    <x-card :$product></x-card>
                @endforeach
            </div>

        </div>
    </section>
</x-app>
