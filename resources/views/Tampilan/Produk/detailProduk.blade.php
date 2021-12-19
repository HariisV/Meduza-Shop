@extends('Tampilan.default')
@section('judul')
    {{$produk->nama_product}}
@endsection
@section('konten')
    <div class="menu_btn" id="menu_btn"></div>

    <div class="page catalog-item product-page">
        <div class="wrap">
            <div class="wrap_float">
                <div class="breadcrumbs">
                    <a href="/">Home</a> - {{$produk->nama_product}}
                </div>
                <div class="product-info">
                    <div class="product-info--left">
                        <div class="product-slider-wrap" id="product-slider-wrap">
                          @foreach ($fotoProduk as $item)
                            <div class="_item">
                                <img src="/storage/Product/{{$item->nama_file}}" alt="">
                            </div>
                          @endforeach
                            
                        </div>
                        <div class="product-slider-nav" id="product-slider-nav">
                            @foreach ($fotoProduk as $item)
                                <div class="_item">
                                    <img src="/storage/Product/{{$item->nama_file}}" alt="">
                                </div>
                             @endforeach
                            
                        </div>
                    </div>
                    <div class="product-info--right">
                       
                        <div class="title">{{$produk->nama_product}}</div>
                        
                        <div class="cost" id="cost">
                            Rp {{number_format($produk->harga,0,'.','.')}}
                        </div>
                       
                        <div class="_line">
                            <form action="{{Route('cartTambah')}}" style="display: contents;" method="POST">
                                @csrf 
                                <input type="hidden" name="id" value="{{$produk->id}}">
                                <div class="number_wrap">
                                    <button class="minus" onclick="kurangProduk()" type="button"></button>
                                        <input type="number" name="jumlah" class="num js_number" id="stok" value="1"  max="{{$produk->stok}}" min="1" data-maxlength="3">
                                    <button class="plus" onclick="tambahProduk()" type="button"></button>
                                </div>
                           
                                <button class="btn-to-cart">ADD TO CART</button>
                            </form>
                        </div>
                        <div class="_line details">
                            <ul>
                                <li>
                                    <span class="d-title">Tersedia</span> {{$produk->stok}}
                                </li>
                                <li>
                                    <span class="d-title">Kategori</span> {{$produk->kategori}}
                                </li>
                                
                            </ul>
                        </div>
                        <div class="_line description">
                            <div class="_title">Description</div>
                            <div class="_text">
                                <p>
                                    {!! $produk->deskripsi !!}
                                </p>

                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="other-products">
                    <div class="title">Related products</div>
                    <div class="products">
                        @foreach ($productRelate as $item)
                        @php
                            $slugProduk = str_replace(" ","-",$item->nama_product); 
                        @endphp
                        <a href="{{Route('detailProduct', $slugProduk)}}" class="product_item">
                            <div class="_image">
                                <img src="/storage/Product/{{$item->photo}}" alt="">
                                {{-- <form action="" method="POST">
                                    @csrf 
                                    <button type="submit" class="to-cart">+ Add to cart</div>
                                </form> --}}
                            </div>
                            <h3 class="_title">{{$item->nama_product}}</h3>
                            <div class="_cost">Rp {{number_format($item->harga,0,'.','.')}}</div>
                        </a>
                          
                        @endforeach
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
 
  
    
    <div class="modal review-modal" id="write-review-block">
        <div class="close"></div>
        <div class="wrap">
            <div class="wrap_float write-comment">

                <div class="write-review">
                    <div class="close mobile-close"></div>
                    <div class="title">Reviews</div>
                    <div class="subtitle">
                        Your email address will not be published. Required fields are marked *
                    </div>
                    <div class="rating">
                        <div class="reviews-count">Your rating</div>
                        <div class="stars user-rating" id="user-rating">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                        </div>
                    </div>
                    <div class="form">
                        <textarea class="textarea" placeholder="Your review *"></textarea>
                        <div>
                            <input type="text" placeholder="Name *" class="input">
                            <input type="email" placeholder="Email *" class="input">
                        </div>
                        <button class="submit">Post Comment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal success-modal" id="success">
        <div class="close"></div>
        <div class="wrap">
            <div class="wrap_float">
                <div class="message">
                    <div class="close mobile-close"></div>
                    <div class="title">Thank you</div>
                    <div class="subtitle">
                        Your feedback has been sent and will be published soon
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div style="display: none;">
        <div class="modal modal_default" id="login">
            <div class="modal_wrap">
                <div class="modal-top">
                    <h2 class="title modal-title">Authorization</h2>
                    <div class="flex">
                        <div class="subtitle modal-subtitle">
                            Using your Meduza account
                        </div>
                        <a class="link">Create an account</a>
                    </div>
                    <div class="fields">
                        <div class="input_wrap">
                            <input type="text" class="input" placeholder="Email">
                        </div>
                        <div class="input_wrap">
                            <input type="password" class="input" placeholder="Password">
                        </div>
                    </div>
                    <button class="btn submit-btn"><span>Enter</span></button>
                    <a class="link bottom-link getModal" data-href="#recover-pass">Forgot your password?</a>
                </div>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>
    <div style="display: none;">
        <div class="modal modal_default registration" id="registration">
            <div class="modal_wrap">
                <div class="modal-top">
                    <h2 class="title modal-title">Registration</h2>
                    <div class="fields">
                        <div class="input_wrap fullwrap">
                            <input type="email" class="input" placeholder="Email">
                        </div>
                        <div class="input_wrap">
                            <input type="password" class="input" placeholder="Password">
                        </div>
                        <div class="input_wrap">
                            <input type="password" class="input" placeholder="Confirm password">
                        </div>
                        <div class="input_wrap fullwrap">
                            <input type="text" class="input" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="userpic-block">
                       <div class="userpic"></div>
                       <div class="change">
                           <label for="change-userpic-modal">Select your avatar</label>
                           <input type="file" id="change-userpic-modal">
                       </div>
                   </div>
                    <button class="btn submit-btn"><span>Registration</span></button>
                    <div class="agreement">
                        By registering on the site you accept the <a href="#">terms of privacy</a> and personal data <a href="#">processing policy</a>
                    </div>
                </div>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>
    <div style="display: none;">
        <div class="modal modal_default" id="recover-pass">
            <div class="modal_wrap">
                <div class="modal-top">
                    <h2 class="title modal-title">Recover the password</h2>
                    <div class="flex">
                        <div class="subtitle modal-subtitle">
                            Enter your email address
                        </div>
                    </div>
                    <div class="fields">
                        <div class="input_wrap fullwrap">
                            <input type="email" class="input" placeholder="Email">
                        </div>
                    </div>
                    <button class="btn submit-btn"><span>Recover the password</span></button>
                </div>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>
    <div style="display: none;">
        <div class="modal modal_default success-recover" id="success-recover-pass">
            <div class="modal_wrap">
                <div class="modal-top">
                    <h2 class="title modal-title">Recover the password</h2>
                    <div class="subtitle modal-subtitle">
                        A link to reset your password has been sent  to your e-mail. Please check your email.
                    </div>
                </div>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

<script>
            function number_format (number, decimals, decPoint, thousandsSep) { 
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
            var n = !isFinite(+number) ? 0 : +number
            var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
            var sep = (typeof thousandsSep === 'undefined') ? '.' : thousandsSep
            var dec = (typeof decPoint === 'undefined') ? ',' : decPoint
            var s = ''

            var toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec)
            return '' + (Math.round(n * k) / k)
                .toFixed(prec)
            }

            // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
            if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
            }
            if ((s[1] || '').length < prec) {
            s[1] = s[1] || ''
            s[1] += new Array(prec - s[1].length + 1).join('0')
            }

            return s.join(dec)
        }
        function tambahProduk(){

            var beliBrapa = document.getElementById("stok").value
            var price = parseInt(beliBrapa) + 1
            var harga =  price * parseInt({{$produk->harga}})
            var x = document.getElementById("cost").innerHTML= "Rp " + number_format(harga);
        }

        function kurangProduk(){
           
           var beliBrapa = document.getElementById("stok").value
           if (beliBrapa > 1) {
               var price = parseInt(beliBrapa) - 1
               var harga =  price * parseInt({{$produk->harga}})
               var x = document.getElementById("cost").innerHTML= "Rp " + number_format(harga);
               console.log(harga)
           }

       }
    //    document.getElementById("cost").innerHTML= "Rp " + number_format({{$produk->harga}});

</script>
@endsection