@extends('Tampilan.default')
@section('judul')
    Hubungi Kami
@endsection
@section('konten')
<div class="page contact-page">
    <div class="wrap">
        <div class="wrap_float">
            <div class="breadcrumbs">
                <a href="/">Home</a> - <a href="#" class="current">Contacts</a>
            </div>
            <div class="title-block">
                <h1 class="title">Contact us</h1>
            </div>
            <div class="page_content">
                <div class="map-block">
                    <div class="map" id="map">
                        <!--Google map in Iframe-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15884.48521652411!2d95.31360394396357!3d5.549028647911351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040374934a943ab%3A0xbabe816ca4be1e2f!2sMasjid%20Raya%20Baiturrahman!5e0!3m2!1sid!2sid!4v1622734536961!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>   
                    </div>
                </div>
                <div class="info">
                    <div class="contact-blocks">
                        <div class="block">
                            <h3 class="_title">Contact us</h3>
                            <div class="_text">
                                <a href="#" class="tel">1009 678 456</a>
                                <a href="mailto:digistrict@yandex.ru">digistrict@yandex.ru</a>
                            </div>
                        </div>
                        <div class="block">
                            <h3 class="_title">Address</h3>
                            <div class="_text">
                                1355 Digistrict St, Suite 909 San, Francisco, <br>CA 10001 United States
                            </div>
                        </div>
                    </div>
                    <div class="write-comment">
                        <h3 class="title">Tell Us Your Message</h3>
                        @if( Session::get('success') == 5)
                            <div class="info">
                                <div class="contact-blocks">

                                <div class="block" style="width:100%;background-color: aliceblue;margin-bottom:40px">
                                    <div class="item" >
                                        <div class="_title" style="color: green">Berhasil !</div>
                                            <div class="_text">
                                            Pesan Kamu Telah Kami Terima !
                                            </div>
                                        </div>                    
                                  </div>
                                </div>
                            </div>
                        @endif
                        <form class="form" method="POST" action="{{Route('tambahPesan')}}">
                            @csrf
                            <textarea required name="isi" class="textarea" placeholder="Message*"></textarea>
                            <div>
                                <input type="text" required name="nama_lengkap" placeholder="Name *" class="input">
                                <input type="number" required placeholder="Nomor Telfon" name="no_hp" class="input">
                            </div>
                            <button style="height: 44px;
                            background: #004EFF;
                            font-size: 14px;
                            font-weight: 600;
                            color: #fff;
                            width: 100%;
                            margin-top: 2%;" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection