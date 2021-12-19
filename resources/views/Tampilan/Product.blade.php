@extends('Tampilan.default')
@section('judul')
    Situs Jual Beli Online Terlengkap
@endsection
@section('konten')
<div class="page shop catalog with-sidebar left-sidebar">
    <div class="wrap">
        <div class="wrap_float">
            <div class="breadcrumbs">
                <a href="/">Home</a> - <a href="#" class="current">Product</a>
            </div>
            <div class="title-block">
                <h1 class="title">Shop Meduza</h1>
                <div class="select_wrap">
                    <div class="label">All categories</div>
                    <select>
                        <option value="All categories">All categories</option>
                        <option value="Coding">Coding</option>
                        <option value="Design">Design</option>
                    </select>
                </div>
            </div>
            <div class="page_content">
              

                <div class="post-content">
                    <div class="catalog-control">
                        <div class="sort-block">
                            <div class="select_wrap">
                                <div class="label">Sort by</div>
                                <select>
                                    <option value="Sort by">Sort by</option>
                                    <option value="Price">Price</option>
                                    <option value="Date">Date</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="search-block">
                            <input type="text" class="input" placeholder="Search products">
                            <button class="submit"></button>
                        </div> --}}
                    </div>
                    <main class="main">
                        <div class="products">
                            @foreach ($produkShow as $item)
                            @php
                            $slugProduk = str_replace(" ","-",$item->nama_product); 
                        @endphp
                            <a href="{{Route('detailProduct',$slugProduk)}}" class="product_item">
                                <div class="_image ie-img">
                                    <img src="/../storage/Product/{{$item->photo}}" alt="">
                                    <div class="to-cart">+ Add to cart</div>
                                </div>
                                <h3 class="_title">{{$item->nama_product}}</h3>
                                <div class="_cost">Rp {{number_format($item->harga,0,'.','.')}}</div>
                            </a>
                            @endforeach
                           
                        </div>

                        <div class="pagination" style="align-content: center">
                            @php
                                $lok = $produkShow->currentPage();
                                $kurang = $lok + 1;
                                $tambah = $lok - 1;
                            @endphp
                            <a href='{{$produkShow->currentPage() > 1 ? "?page=$tambah" : ''}}' class="arrow prev"></a> 
                            <a href='{{$produkShow->currentPage() >= $produkShow->lastPage() ? "" : "?page=$kurang"}}' class="arrow next"></a>
                            <ul>
                                @for ($i = 1; $i <= $produkShow->lastPage(); $i++)
                                <li><a href="?page={{$i}}">{{$i}}</a></li>
                                @endfor
                            </ul>
                        </div>

                    </main>
                    <aside class="sidebar">
                        <div class="_block shop-categories">
                            <h3 class="block_title">Product categories</h3>
                            <div class="list">
                                @foreach ($hasilKategori as $item)
                                <div class="list-item">
                                    <a href="{{Route('kategoriProduk', $item)}}" class="cat_title">
                                        <span>{{$item}}</span>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="_block top-products">
                            <h3 class="block_title">
                                Top rated products
                            </h3>
                            <div class="items">
                                @foreach ($forU as $item)
                                @php
                                    $slugProduk = str_replace(" ","-",$item->nama_product); 
                                @endphp
                                    <a href="{{Route('detailProduct', $slugProduk)}}" class="item">
                                        <div class="_img ie-img">
                                            <img src="/../storage/Product/{{$item->photo}}" alt="">
                                        </div>
                                        <div class="_info">
                                            <h4 class="_title">{{$item->nama_product}}</h4>
                                            <div class="_cost">Rp {{number_format($item->harga,0,'.','.')}}</div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                        <div class="_block tags-block">
                            <h3 class="block_title">Product tags</h3>
                            <div class="tags">
                                @foreach ($hasilKategori as $item)
                                <a href="#" class="tag">{{$item}}</a>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection