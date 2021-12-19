@extends('Admin.default')
@section('judul') Slider  @endsection
@section('konten')

<div class="card">
    <div class="ml-auto mr-3 mt-3">
        <a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#search-drawer">
            <i class="anticon anticon-plus buttonsize"></i>
        </a>
    </div>
    <div class="card-body">
       
        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr >
                    <th rowspan="2" class="align-middle">Gambar</th>
                    <th rowspan="2"  class="align-middle">Judul </th>
                    <th rowspan="2" class="align-middle">Kategori 1</th>
                    <th rowspan="2" class="align-middle">Kategori 2</th>
                    <th rowspan="2" class="align-middle">Link Tujuan</th>
                    <th colspan="1" class="align-middle">Aksi</th>
                </tr>
                <tr>
                    <th>hapus</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($Slider  as $item)
              @php
                $kategori1Explode = explode("|", $item->categori1);
                $kategori1 = "<a href='{$kategori1Explode[0]}'>{$kategori1Explode[1]}</a> ";
                
                $kategori2Explode = explode("|", $item->categori2);
                $kategori2 = "<a href='{$kategori2Explode[0]}'>{$kategori2Explode[1]}</a> ";
              @endphp
                <tr>
                    <td>
                        <a href="/storage/Slider/{{$item->image}}" target="_blank">
                            <img src="/storage/Slider/{{$item->image}}" height="120px" width="120px" alt="">
                        </a>
                    </td>
                    <td>{{$item->judul}}</td>
                    <td>{!! $kategori1 !!}</td>
                    <td>{!! $kategori2 !!}</td>
                    <td>{{$item->link}}</td>

                    <td>
                        <form action="{{Route('sliderDelete', $item->id)}}" method="POST">
                            @csrf
                            <button href="" class="btn btn-danger  buttons">
                                <i class="anticon anticon-delete buttonsize"></i>
                            </button>
                        </form>
                        
                    </td>
                    
                </tr>
              @endforeach
            </tbody>
            
        </table>
    </div>
</div>

                     <div class="modal modal-right fade search" id="search-drawer">
                        <div class="modal-dialog">
                           
                                    <div class="modal-content">
                                         <form action="{{route('tambahSlider')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                
                                        <div class="modal-header justify-content-between align-items-center">
                                            <h5 class="modal-title">Tambah Slider </h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body scrollable">
                                            <input type="hidden" value="Customer" name="role">

                                            <label>Judul</label>
                                            <input type="text" class="form-control" name="judul" id="judul" required placeholder="Judul Slider">
                                            
                                            <label class="mt-3">A href Kategori 1</label>
                                            <input type="text" class="form-control" name="categori1" required value="Link|Anchor">
                                                <div style="width: 100%;margin-top: 0.25rem;font-size: 80%;color: #28a745;">
                                                   Pisahkan Link & Anchor Menggunakan |
                                                    Format : link|Anchor
                                                  </div>

                                            <label class=" mt-3">A href Kategori 2</label>
                                            <input type="text" class="form-control" name="categori2" required value="Link|Anchor">
                                            <div style="width: 100%;margin-top: 0.25rem;font-size: 80%;color: #28a745;">
                                                Pisahkan Link & Anchor Menggunakan |
                                                 Format : link|Anchor
                                               </div>
                                            <label class=" mt-3">Link Tujuan</label>
                                            <input type="text" class="form-control" name="link" required placeholder="Alamat">
                                            
                                            <label class=" mt-3">Gambar</label>
                                            <input type="file" class="form-control" name="gambar" required>
                                            
                                     
                                        </div>
                                        <div class="modal-footer">
                                            <button href="" class="btn btn-success m-r-5 buttons">
                                                <i class="anticon anticon-check-circle buttonsize"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
@endsection