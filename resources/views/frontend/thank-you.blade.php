@extends('layouts.app')
@section('title', 'Thank you for Shopping')
@section('content')
    <div class="py-3 pyt-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if (session('message'))
                        <h5 class="alert alert-success">{{ session('message') }}</h5>
                    @endif
                    <img width="200" src="{{asset("frontend/assets/img/logo.png")}}">
                    <div class="p-4 shadow bg-white">
                        <h2>HAKKIMIZDA</h2>
                        <div class="d-flex row">
                            <div class="col-md-6">
                                <h6>VİZYONUMUZ</h6>
                                <p>Spor sektöründe her geçen gün daha ileri gitmek,
                                    Konumuza hakim olmanın verdiği güvenle kendimizi geliştirmek,
                                    Spor aletlerinde ve spor tesislerinde uluslararası platformda ilk akla gelen isimler arasında yer almaktır.</p>
                            </div>
                            <div class="col-md-6">
                                <h6>MİSYONUMUZ</h6>
                                <p>Sporu herkesin hayatının bir parçası haline getirmek,
                                    Kaliteli ürünler ve donanımlı spor merkezleriyle müşterilerimizin maksimum performans elde etmesini sağlamak,
                                    Her zaman en iyi hizmeti ve ürünü vererek bugüne dek kazandığımız güveni sürdürmektir. </p>
                            </div>
                        </div>
                        <hr>
                        <h4>ÜRÜN GÜVENİLİRLİĞİ</h4>
                        <p>İnternet sitemizde satışa sunulan ürünler sporcu gıdası ve gıda takviyesi kategorilerinde
                            ürünlerdir, kesinlikle beşeri tıbbi ürün veya ilaç değildir. Reçete ile satılmazlar, doktor
                            onayı gerektirmezler. Şirketimiz ilaç satışı yapmamaktadır, bu yüzden satılan ürünlerin
                            çeşitli hastalıkları önleyici ya da tedavi edici özellikleri yoktur. Ürünler sağlıklı ve
                            dengeli bir beslenme düzenin yerine geçmez. Amacımız tüketiciye en doğru bilgiyi sunabilmek
                            olup, yer verilen içerik sadece bilgilendirme amaçlıdır, ürünlerin kullanımına yönelik
                            hiçbir taahhüt veya tavsiye yerine geçmez. Sitemizde satılan ürünler ile ilişkili olarak
                            kullanılan tüm logo, marka ve patentli haklar ilgili hak sahiplerine aittir. Yanlış
                            anlaşılan veya yanıltıcı bulunan ibareler bulunması durumunda lütfen sitemizden bildirimde
                            bulununuz. Tüm ürünlerimiz %100 orjinal olup, T.C. Tarım ve Orman Bakanlığı onaylıdır.</p>
                        <a href="{{ url('collections') }}" class="btn btn-primary">Ürünleri Getir</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
