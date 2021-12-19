@extends('Tampilan.default')
@section('judul')
    Checkout
@endsection
@section('konten')
<div class="page cart checkout">
    <div class="wrap">
        <div class="wrap_float">
            <div class="breadcrumbs">
                <a href="/">Home</a> - <a href="{{Route('cart')}}" class="current">Cart</a> - <a href="#" class="current">Checkout</a>
            </div>
            <div class="title-block">
                <h1 class="title">Checkout</h1>
            </div>
          <form action="{{Route('TransaksiCreate')}}" method="POST">
            @csrf
            <div class="cart-block checkout-block">
                
                <div class="cart-block-left">
                    <div class="payment-details">
                        <div class="_title">Metode Pembayaran</div>
                        <div class="payment-labels">
                           @foreach ($mp as $item)
                            <input type="radio" value="{{$item->id}}" name="payment" id="payment-{{$item->id}}">
                            <label class="payment-item" for="payment-{{$item->id}}">
                                <span class="payment-item-title">{{$item->judul}}</span>
                                <span class="payment-item-text">
                                    {!! $item->isi !!}
                                </span>
                            </label>
                           @endforeach
                        
                        </div>
                        <div class="fields">
                            <div class="_title" style="font-weight: bold;margin-top:10px;margin-bottom:15px;">Alamat Penerima</div>
        
                            <div class="input_wrap fullwrap">
                                <input type="text" class="input" name="nama_lengkap" placeholder="Nama Lengkap">
                            </div>
                            <div class="input_wrap fullwrap">
                                <input type="text" class="input" name="alamat" placeholder="Alamat">
                            </div>
                            <div class="input_wrap">
                                <input type="text" class="input" name="kabupaten" placeholder="Kabupaten">
                            </div>
                            <div class="input_wrap">
                                <input type="text" class="input" name="provinsi" placeholder="Provinsi">
                            </div>
                            <div class="input_wrap">
                                <input type="text" class="input" name="kode_pos" placeholder="Kode POS">
                            </div>
                            <div class="input_wrap">
                                <input type="text" class="input" name="nomor_hp" placeholder="Phone *">
                            </div>
                           
                            <div class="input_wrap fullwrap">
                                <textarea class="input textarea" name="catatan" placeholder="Catatan Untuk Penjual"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-block-right">
                    <div class="_title" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Detail Produk</div>
                    <div style="border-bottom: 1px solid #EBEBEB;margin-bottom:20px;"></div>
                    <div class="order-info">
                        <div class="items">
                            @foreach ($produkCart as $item)
                                @php
                                    $hargaTotal = $item->jumlah * $item->product->harga;
                                    $slugProduk = str_replace(" ","-",$item->product->nama_product); 
                                @endphp
                                <a href="{{Route('detailProduct', $slugProduk)}}" class="item">
                                    <div class="_image ie-img">
                                        <img src="storage/Product/{{$item->product->photo}}" alt="">
                                    </div>
                                    <h3 class="_title">{{$item->product->nama_product}} X {{$item->jumlah}}</h3>
                                    <div class="_cost">Rp {{number_format($hargaTotal,0,'.','.')}}</div>
                                </a>
                            @endforeach
                           
                        </div>
                        <div class="info-list">
                           
                            <div class="list-item total">
                                <div class="_left">Total</div>
                                <div class="_right">Rp {{number_format($harga,0,'.','.')}} </div>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="next-step"> 
                        <span>Selanjutnya</span>
                    </button>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection