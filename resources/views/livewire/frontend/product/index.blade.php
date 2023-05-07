<div>
    <div class="row">
        <div class="col-md-3">
            @if ($category->brands)
            <div class="card">
                <div class="card-header">
                    <h4>Markalar</h4>
                </div>
                <div class="card-body">
                    @foreach ($category->brands as $brandItem)
                    <label class="d-block">
                        <input type="checkbox" wire:model="brandInputs" value="{{ $brandItem->name }}"/>{{ $brandItem->name }}
                    </label>
                    @endforeach
                </div>
            </div>
            @endif

            <div class="card mt-3">
                <div class="card-header">
                    <h4>Fiyat</h4>
                </div>
                <div class="card-body">

                    <label class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low" />Yüksekten Düşüğe
                    </label>
                    <label class="d-block">
                        <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high" />Düşükten Yükseğe
                    </label>

                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="row">
                @forelse ($products as $productItem)
                    <div class="col-md-4">
                        <div class="product-card">
                            <div class="product-card-img">
                                @if ($productItem->quantity > 0)
                                    <span class="badge badge-success">Mevcut</span>
                                @else
                                    <span class="badge badge-danger">Stok Yok</span>
                                @endif
                                @if ($productItem->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                                </a>
                                @endif

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand text-uppercase">{{ $productItem->brand }}</p>
                                <h5 class="product-name">
                                   <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    <p class="text-capitalize">{{ $productItem->name }}</p>
                                   </a>
                                </h5>
                                <div>
                                    <span class="selling-price">{{ $productItem->selling_price }}&#x20BA;</span>
                                    <span class="original-price">{{ $productItem->original_price }}&#x20BA;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-md-12">
                        <div class="p-2">
                            <h4>Ürün Bulunamadı {{ $category->name }}</h4>
                        </div>
                    </div>
                    @endforelse
            </div>
        </div>
    </div>

</div>
