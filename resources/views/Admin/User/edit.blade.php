@extends('Admin.default')
@section('judul') Edit Data {{$data->nama}} @endsection
@section('konten')

<form action="{{route('EditUserProses', $data->id)}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <label>Nama Pengguna</label>
            <input type="text" class="form-control" name="nama" id="nama" required  value="{{$data->nama}}">
            
           <div class="row">
               <div class="col-md-6">
                <label class="mt-3">Email Pengguna</label>
                <input type="text" class="form-control" name="email" required value="{{$data->email}}" >
                
               </div>
               <div class="col-md-6">
              
                <label class=" mt-3">Nomor Ponsel</label>
                <input type="text" class="form-control" name="phone" required value="{{$data->phone}}" >
                
               </div>
           </div>
           <label class=" mt-3">Alamat</label>
                <input type="text" class="form-control" name="alamat" required value="{{$data->alamat}}" >
                

            <label class=" mt-3">Jenis Kelamin</label>
            <fieldset class="form-group form-control">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="radio">
                            <input type="radio" name="gender" id="jenis_kelamin1" value="L" checked>
                            <label for="jenis_kelamin1">
                                Pria
                            </label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="gender" id="jenis_kelamin2" value="P">
                            <label for="jenis_kelamin2">
                                Wanita
                            </label>
                        </div>
                        
                    </div>
                </div>
            </fieldset>                                    
            <label class=" mt-3">Password</label>
            <input type="password" class="form-control" name="password" placeholder="******" >       
             <!-- Content goes Here -->
       
        
            
        </div>
        <div class="card-footer ml-auto mr-3 mt-3" style="border: none" >
            <button href="" class="btn btn-success m-r-5 buttons">
                <i class="anticon anticon-check-circle buttonsize"></i>
            </button>
        </div>
    </div>
</form>

        
@endsection