@extends('layouts.app')
@section('title', 'Homepage')
@section('content')

    <div id="myCarousel" class="carousel slide" data-bs-ride="false">

        <div class="carousel-inner">
            @foreach ($sliders as $key => $sliderItem )
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset("$sliderItem->image") }}" style="height:50%" class="d-block w-100 h-75" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="custom-carousel-content">
                            <h1>
                                <span>{{ $sliderItem->title }} &amp; Satış
                            </h1>
                            <div>
                                <a href="{{ url('/collections') }}" class="btn btn-slider">
                                    ÜRÜNLERİ GETİR
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <br>
    <br>
    <section>
        <div class="row d-flex text-center align-items-center">
            <div class="col-md-4">
                <img class="rounded" width="420" height="300" src="{{asset("frontend/assets/img/kosu.jpeg")}}">
                <p class="text-uppercase"><b>Yaza hazır mısın?</b></p>
            </div>
            <div class="col-md-4">
                <img class="rounded" width="420" height="300"  src="{{asset("frontend/assets/img/the-rock.jpeg")}}">
                <p class="text-uppercase"><b>Amaca yönelik supplementler</b></p>
            </div>
            <div class="col-md-4">
                <img class="rounded" width="420" height="300"  src="{{asset("frontend/assets/img/sporcu_kadn.jpeg")}}">
                <p class="text-uppercase"><b>Daha iyi bir sen için</b></p>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <h2 class="w-100 col-md-12 text-center">-SIKÇA SORULAN SORULAR(SSS)-</h2>
    <br>
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <h5>Sattığınız tüm ürünler orijinal mi?</h5>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Orjinal ürünlerin dışında hiçbir ürün internet mağazamızda asla satılmaz.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <h5>Siparişimi teslim almam ne kadar sürer?</h5>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Vermiş olduğunuz siparişteki ürünlerin stok durumuna göre, siparişlerin büyük bir bölümü bir (1) iş
                    günü içinde kargoya teslim edilir. Hafta sonu verdiğiniz siparişler ise Pazartesi kargoya verilir ve
                    anlaşmalı olduğumuz kargo şirketinin standart teslimat süreleri içerisinde teslim almanız sağlanır.
                    Siparişlerinizin teslimat süresi kargoya verildikten sonra genellikle 48 saati geçmemektedir. Resmi
                    tatil günlerinde verilen siparişler tatil günleri son bulduktan sonra kargoya verilir . Resmi tatil
                    günlerine denk gelen siparişlerde ürünün kargoya verilme süresi resmi tatil süresinin bitiminden
                    hemen sonra olacaktır.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <h5>Eğer aldığım üründen memnun kalmazsam ne olur?</h5>
                </h5>
            </div>
            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Teslim aldığınız ürün ile ilgili herhangi bir problem teslim aldıktan sonra yedi (7) gün içerisinde
                    bize bildirilmelidir. Herhangi bir nedenle memnun kalmadığınız takdirde iade edebilirsiniz. Ürünler
                    alındığı şekliyle orijinal haliyle teslim edilmelidir. İnternet mağazamız ürünlerin kullanımı
                    açısından daha önce kullanmış ve denemiş olan müşterilerimize satışı hedeflemektedir. Eğer yanlış
                    bir ürünü sipariş ettiğinize inanıyorsanız yine de ürünü açmadığınız ve kullanmadığınız takdirde
                    iade edebilirsiniz.
                </div>
            </div>
        </div>
    </div>

@endsection

<style>
    #myCarousel .item {
        height: 25%;
    }

    #myCarousel .item img {
        height: 100%;
        width: 100%;
    }
</style>
