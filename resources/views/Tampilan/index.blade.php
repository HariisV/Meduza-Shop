@extends('Tampilan.default')
@section('judul')
    Situs Jual Beli Online Terlengkap
@endsection
@section('konten')

<div class="main_slider">
    <div class="slider" id="main-slider">
     @foreach ($slider as $item)
            @php
                $kategori1Explode = explode("|", $item->categori1);
                $kategori1 = "<a href='{$kategori1Explode[0]}'>{$kategori1Explode[1]}</a> ";
                
                $kategori2Explode = explode("|", $item->categori2);
                $kategori2 = "<a href='{$kategori2Explode[0]}'>{$kategori2Explode[1]}</a> ";

                $color = [
                "rgb(252, 239, 239)",
                "rgb(255, 247, 236)",
                "rgb(235, 236, 244)"
                ];

                $bg = rand(0,2);
            @endphp
            {{-- @dd($bg) --}}
        <div class="slide" style="background-color: {{$color[$bg]}}">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="slide_left">
                        <div class="slide_content">
                            <div class="category">{!! $kategori1 !!} | {!! $kategori2 !!} </div>
                            <h2 class="title">
                               {{$item->judul}}
                            </h2>
                            <a href="{{$item->link}}" class="link">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                    <div class="slide_right" data-slide="/storage/Slider/{{$item->image}}">
                        <div class="slide-img" style="background-image: url(/storage/Slider/{{$item->image}})"></div>
                        <div class="read_more">
                            <a href="{{$item->link}}">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     @endforeach
    </div>
    <div class="controls">
        <div class="arrows">
            <div class="arrow prev"></div>
            <div class="arrow next"></div>
        </div>
        <div class="count">
            <span class="current">01</span> <span class="all">03</span>
        </div>
    </div>
    <div class="next-slides" id="next-slides"></div>
</div>

<section class="articles">
    <div class="wrap">
        <div class="wrap_float">
            <h2 class="title" style="margin-bottom: -62px;">
                New Arrival
            </h2>
            <div class="page shop catalog four-items" style="padding-bottom: 0">
                <div class="products">
                    @foreach ($product as $item)
                    @php
                        $slugProduk = str_replace(" ","-",$item->nama_product); 
                    @endphp
                            <a href="{{Route('detailProduct', $slugProduk)}}" class="product_item">
                                <div class="_image ie-img">
                                    <img src="/storage/Product/{{$item->photo}}"  alt="">
                                    <div class="to-cart">+ Add to cart</div>
                                </div>
                                <h3 class="_title">{{$item->nama_product}}</h3>
                                <div class="_cost">Rp {{number_format($item->harga,0,'.','.')}}</div>
                            </a>
                    @endforeach
                </div>
               
               
            </div>
            
        </div>
        
    </div>
</section>
<section class="products">
    <div class="wrap">
    
        <div class="wrap_float">
    
            <a href="shop-instastore.html" class="cover ie-img">
                <h3 class="_title">Instastore</h3>
                <img src="https://katalogpromosi.com/wp-content/uploads/2020/05/ada-fashion.jpg" alt="">
            </a>
            <div class="products_block" id="products_block">
                <div class="controls">
                    <div class="count">
                        <span class="current">02</span> <span class="all">04</span>
                    </div>
                    <div class="arrows">
                        <div class="arrow prev"></div>
                        <div class="arrow next"></div>
                    </div>
                </div>
                <div class="products_slider" id="products_slider">
                @foreach ($productCategory as $item)
                    @php
                        $slugProduk = str_replace(" ","-",$item->nama_product); 
                    @endphp
                    <a href="{{Route('detailProduct', $slugProduk)}}" class="product_item">
                        <div class="_image ie-img">
                            <img src="/storage/Product/{{$item->photo}}" alt="">
                            <div class="to-cart">+ Add to cart</div>
                        </div>
                        <h3 class="_title">{{$item->nama_product}}</h3>
                        <p class="_cost">Rp {{number_format($item->harga,0,'.','.')}}</p>
                    </a>
                @endforeach
                </div>
            </div>
        </div>
        <div class="btn_wrap" style="margin-top:20px;margin-bottom:30px">
                <a href="{{Route('produkShow')}}" class="show_more">
                    <span>more</span>
                </a>
            </div>
    </div>
</section>


@endsection