<x-frontend.master>

    <div class="container marketing">
        <br><br><br><br>
        <h3 class="text-center">Shopping cart</h3>
        <x-forms.message />
        <table class="table table-warning">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Item</th>
                    <th>Unit Price</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="cartItems">
                <?php $totalPrice = 0; ?>
                @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->course->title }}</td>
                        <td>{{ $item->course->price }}</td>
                        <td>{{ $item->qty }}</td>
                        <td><a href="{{ route('remove.cart', $item->id) }}"
                                onclick="return confirm('Are you sure')"class="remove-btn btn btn-danger">Remove</a></td>
                    </tr>
                    <?php $totalPrice = $totalPrice + $item->course->price * $item->qty; ?>
                @endforeach

            </tbody>
        </table>
        <hr>
        <div class="d-flex justify-content-between">
            <h4>Total Price: <span id="totalPrice">{{ $totalPrice }}</span></h4>
            <a href="{{route('checkout.cart')}}" type="submit" class="btn btn-primary">Checkout</a>
        </div>



    </div><!-- /.container -->

    {{-- @push('js')
        <script src="{{ asset('ui/frontend/js/cart.js') }}"></script>
    @endpush --}}

</x-frontend.master>
