@extends('Admin.default')
@section('judul') Edit Produk {{$data->nama_product}}  @endsection
@section('konten')

<div class="card">
    <div class="card-header">
        <h1 class="card-title">
            Preview Foto Product
        </h3>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach ($foto as $item)
                <div class="col-md-4">
                    <img class="img-fluid" src="/storage/product/{{$item->nama_file}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>

<form action="{{Route('editProdukProses', $data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Edit Produk
            </h1>
        </div>
        <div class="card-body">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="nama_product" required value="{{$data->nama_product}}">
            
           <div class="row">
               <div class="col-md-6">
                <label class="mt-3">Harga</label>
                <input type="number" class="form-control" name="harga" required value="{{$data->harga}}">
                
               </div>
               <div class="col-md-6">
              
                <label class=" mt-3">Stok</label>
                <input type="number" class="form-control" name="stok" required value="{{$data->stok}}">
                
               </div>
           </div>
         
           <label>Kategory</label>
           <input type="text" class="form-control" name="kategori" required placeholder="kategori">
           <div style="
           width: 100%;
           margin-top: 0.25rem;
           font-size: 80%;
           color: #28a745;">
            Pisahkan Dengan Spasi
          </div>
            <label class=" mt-3">Status Product</label>
            <fieldset class="form-group form-control">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="radio">
                            <input type="radio" name="status" id="jenis_kelamin1" value="Tersedia" checked>
                            <label for="jenis_kelamin1">
                                Tersedia
                            </label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="status" id="jenis_kelamin2" value="Habis">
                            <label for="jenis_kelamin2">
                                Habis
                            </label>
                        </div>
                        
                    </div>
                </div>
            </fieldset>       
            <label for="" class="mt-3">Foto Produk</label>
            <input type="file" class="form-control" multiple accept="image/*" name="gambar[]">
       
            <label class=" mt-3">Deskripsi</label>   
            <textarea name="deskripsi" class="ckeditor" cols="50" rows="50" id="ckeditor">
                {{$data->deskripsi}}
            </textarea>     

            
        </div>
        <div class="card-footer ml-auto mr-3 mt-3" style="border: none" >
            <button href="" class="btn btn-success m-r-5 buttons">
                <i class="anticon anticon-check-circle buttonsize"></i>
            </button>
        </div>
    </div>
</form>

        
@endsection
@section('script')
    <script src="{{Asset('ckeditor/ckeditor.js')}}"></script>
@endsection