@extends('Admin.default')
@section('judul') Metode Pembayaran  @endsection
@section('konten')

<div class="card">
    <div class="ml-auto mr-3 mt-3">
        <a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#search-drawer">
            <i class="anticon anticon-plus buttonsize"></i>
        </a>
    </div>
    <div class="card-body">
       
        <table id="data-table" class="table table-bordered text-center align-middle">
            <thead>
                <tr >
                    <th rowspan="2" class="align-middle">#</th>
                    <th rowspan="2"  class="align-middle">Judul </th>
                  
                    <th colspan="2" class="align-middle">Hapus</th>
                </tr>
              
            </thead>
            <tbody>
              @foreach ($mp as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->judul}}</td>
                    <td>
                        <form action="{{route('hapusMetodePembayaran', $item->id)}}" method="POST">
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
                     <form action="{{route('tambahMetodePembayaran')}}" method="POST" enctype="multipart/form-data">
                        @csrf
            
                    <div class="modal-header justify-content-between align-items-center">
                        <h5 class="modal-title">Tambah Metode Pembayaran </h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body scrollable">

                       
                        <label class=" mt-3">Judul</label>
                        <input type="text" class="form-control" name="judul" required placeholder="Nama">
                        
                        <label class=" mt-3">Deskripsi</label>   
                        <textarea name="isi" class="ckeditor" cols="30" rows="10" id="ckeditor"></textarea>     
            
                 
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
@section('script')
    <script src="{{Asset('ckeditor/ckeditor.js')}}"></script>
@endsection