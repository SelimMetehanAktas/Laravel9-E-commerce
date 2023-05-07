<div>
    <div class="py-3 py-md-5">
        <div class="container">
            <h4>Sepetim</h4>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Ürünler</h4>
                                </div>
                                <div class="col-md-1">
                                    <h4>Fiyat</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Adet</h4>
                                </div>
                                <div class="col-md-1">
                                    <h4>Toplam</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Kaldır</h4>
                                </div>
                            </div>
                        </div>

                        @forelse ($cart as $cartItem)
                            @if ($cartItem->product)
                            <div class="cart-item">
                                <div class="row">
                                    <div class="col-md-6 my-auto">
                                        <a href="{{ url('collections/'.$cartItem->product->category->slug.'/'.$cartItem->product->slug) }}">
                                            <label class="product-name">
                                                @if ($cartItem->product->productImages)
                                                    <img src="{{ asset($cartItem->product->productImages[0]->image) }}" style="width: 50px; height: 50px" alt="">
                                                @else
                                                <img src="" style="width: 50px; height: 50px" alt="">

                                                @endif
                                                {{ $cartItem->product->name }}
                                                @if ($cartItem->productColor)
                                                    @if ($cartItem->productColor->color)
                                                    <span>Color: {{$cartItem->productColor->color->name}}</span>
                                                    @endif
                                                @endif
                                            </label>
                                        </a>
                                    </div>
                                    <div class="col-md-1 my-auto">
                                        <label class="price">{{ $cartItem->product->selling_price }} &#8378;</label>
                                    </div>
                                    <div class="col-md-2 col-7 my-auto">
                                        <div class="quantity">
                                            <div class="input-group">
                                                <button type="button" wire:loading.attr='disabled' wire:click="decrementQuantity({{ $cartItem->id }})" class="btn btn1"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="{{ $cartItem->quantity }}" class="input-quantity" />
                                                <button type="button" wire:loading.attr='disabled' wire:click="incrementQuantity({{ $cartItem->id }})" class="btn btn1"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 my-auto">
                                        <label class="price">{{ $cartItem->product->selling_price * $cartItem->quantity }} &#8378;</label>
                                        @php
                                            $totalPrice += $cartItem->product->selling_price * $cartItem->quantity;
                                        @endphp
                                    </div>
                                    <div class="col-md-2 col-5 my-auto">
                                        <div class="remove">
                                            <button type="button" wire:loading.attr='disabled' wire:click='removeCartItem({{ $cartItem->id }})' class="btn btn-danger btn-sm">
                                                <span wire:loading.remove wire:target='removeCartItem({{ $cartItem->id }})'>
                                                    <i class="fa fa-trash"></i> Kaldır
                                                </span>
                                                <span wire:loading wire:target='removeCartItem({{ $cartItem->id }})'>
                                                    <i class="fa fa-trash"></i> Kaldırılıyor
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @empty
                            <div>No cart Items Available</div>
                        @endforelse


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 my-md-auto mr-3">
                    <h5>
                        Alışverişe Devam Et
                        <a class="btn btn-outline-secondary text-decoration-none text-white" href="{{ url('/collections') }}"><i class="mdi mdi-arrow-right-bold"></i></a>
                    </h5>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="shadow-sm bg-white p-3">
                        <h4>
                            Toplam
                            <span class="float-end">{{ $totalPrice }}&#8378;</span>
                        </h4>
                        <hr>
                        <a href="{{ url('/checkout') }}" class="btn btn-warning w-100">Sepeti Onayla</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
