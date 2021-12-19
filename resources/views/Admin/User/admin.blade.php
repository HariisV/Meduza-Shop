@extends('Admin.default')
@section('judul') Daftar Admin  @endsection
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
                    <th rowspan="2"  class="align-middle">Nama </th>
                    <th rowspan="2" class="align-middle">Email</th>
                    <th colspan="2" class="align-middle">Aksi</th>
                </tr>
                <tr>
                    <th>hapus</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($user as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <form action="{{route('hapusUserProses', $item->id)}}" method="POST">
                            @csrf
                            <button href="" class="btn btn-danger  buttons">
                                <i class="anticon anticon-delete buttonsize"></i>
                            </button>
                        </form>
                        
                    </td>
                    <td>
                            <a href="{{route('EditUser', $item->id)}}" class="btn btn-primary m-r-5 buttons">
                                <i class="anticon anticon-edit buttonsize"></i>
                            </a>
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
                                         <form action="{{route('tambahUserProses')}}" method="POST">
                                            @csrf
                                
                                        <div class="modal-header justify-content-between align-items-center">
                                            <h5 class="modal-title">Tambah User (Admin) </h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body scrollable">
                                            <input type="hidden" value="Admin" name="role">
                                            <label>Nama Pengguna</label>
                                            <input type="text" class="form-control" name="nama" id="nama" required placeholder="Nama Pengguna">
                                            
                                            <label class="mt-3">Email Pengguna</label>
                                            <input type="text" class="form-control" name="email" required placeholder="Email Pengguna">
                                            
                                            <label class=" mt-3">Nomor Ponsel</label>
                                            <input type="text" class="form-control" name="phone" required placeholder="Nomor Hp">
                                            
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
                                            <input type="password" class="form-control" name="password" required placeholder="Password">
                                            <!-- Content goes Here -->
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