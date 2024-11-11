<x-app>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <x-card :$product>
                    <p class="mb-0 card-text">{{ $product['price'] }}</p>
                </x-card>
            </div>

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form action="{{ route('product.contact') }}" method="POST">
                        @csrf

                        <input type="hidden" name="product" value="{{ $product['title'] }}">
                        <div class="mb-3 form-floating">
                            <input class="form-control" id="name" name="name" type="text"
                                placeholder="Enter your name...">
                            <label for="name">Full name</label>

                        </div>
                        <!-- Email address input-->
                        <div class="mb-3 form-floating">
                            <input class="form-control" id="email" name="email" type="email"
                                placeholder="name@example.com">
                            <label for="email">Email address</label>

                        </div>

                        <!-- Message input-->
                        <div class="mb-3 form-floating">
                            <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..."
                                style="height: 10rem"></textarea>
                            <label for="message">Message</label>

                        </div>



                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app>
