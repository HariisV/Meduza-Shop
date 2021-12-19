@extends('Tampilan.default')
@section('judul')
    Success 
@endsection
@section('konten')
<div class="page cart order-success">
    <div class="wrap">
        <div class="wrap_float">
            <div class="breadcrumbs">
                <a href="#">Home</a> - <a href="#">Shop</a> - <a href="#" class="current">Cart</a>
            </div>
            <div class="title-block">
                <h1 class="title">Thank you! Your order is successfully completed</h1>
            </div>
            <div class="order-block">
                <div class="details" style="text-align: center">
                    <div class="item">
                        <div class="_title">Order number:</div>
                        <div class="_text">#ORD-{{$transaksi->id}}</div>
                    </div>
                    <div class="item">
                        <div class="_title">Date:</div>
                        <div class="_text">
                            {{date('d M Y', strtotime($transaksi->created_at))}}
                        </div>
                    </div>
                    <div class="item" >
                        <div class="_title">Total:</div>
                        <div class="_text">Rp {{number_format($transaksi->total,0,'.','.')}}</div>
                    </div>
                    <div class="item">
                        <div class="_title">Metode Pembayaran:</div>
                        <div class="_text">{{$transaksi->metodePembayaran->judul}}</div>
                    </div>
                    
                </div>
                @if( Session::get('success') == 5)
                <div class="details" >
                    <div class="item" style="width: 59%;
                    margin-left: 240px;
                    background-color: aliceblue">
                        <div class="_title" style="color: green">Berhasil !</div>
                        <div class="_text">
                           Pesanan Kamu Akan Di Proses Ketika Admin Menerima Dana Kamu
                        </div>
                    </div>                    
                </div>
                @endif
                {{-- <style>
                    .order-block .details .item{
                        width: 100%;
                    }
                </style> --}}
                <div class="details">
                    <div class="item" style="width: 59%;
                    margin-left: 240px;">
                        <div class="_title">Informasi Penting:</div>
                        <div class="_text">
                            Pesanan kamu akan dikirim setelah kami menerima Pembayaran Dari Kamu.
                        </div>
                        <div class="_title" style="margin-top: 20px">Transfer Pembayaran: </div>
                        <div class="_text" style="text-align:center">
                           <h3 style="margin-top: 0"> {{$transaksi->metodePembayaran->judul}}</h3> 
                            {!! $transaksi->metodePembayaran->isi !!}
                        </div>
                        <div class="_text" style="text-align:center">
                            <span class="_title"> Sebesar :</span> 
                             Rp {!! number_format($transaksi->total,0,'.','.') !!}
                         </div>
                        <form style="align-self: flex-end;float: none;width: auto;" action="{{Route('konfirmasiPembayaran', $transaksi->id)}}" method="POST">
                           @csrf
                           <button type="submit" style="
                                    margin-top: 30px;
                                    color: #fff;
                                    background-color: #0069d9;
                                    border-color: #0062cc;
                                    padding: 10px;
                                    width: 150px;
                                ">
                            Konfirmasi Pembayaran
                        </button>
                        </form>
                    </div>
                  
                    
                  
                    
                </div>
            </div>
            <div class="your-products">
                <h2 class="title">Your order</h2>
                <div class="products">
                    @foreach ($produk as $item)
                        <a href="catalog-item.html" class="product_item">
                            <div class="_image ie-img">
                                <img src="/storage/Product/{{$item->photo}}" alt="">
                            </div>
                            <h3 class="_title">{{$item->nama_product}}</h3>
                            <div class="_cost">Rp {{number_format($item->harga,0,'.','.')}}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        
        {{-- @dd(Session::get('error_code')) --}}
    </div>
</div>
@endsection
