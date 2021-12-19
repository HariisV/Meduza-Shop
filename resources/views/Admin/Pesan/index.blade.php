@extends('Admin.default')
@section('judul') Daftar Pesan  @endsection
@section('konten')

<div class="card">
  
    <div class="card-body">
       
        <table class="table table-bordered text-center align-middle">
            <thead>
                <tr >
                    <th class="align-middle">#</th>
                    <th class="align-middle">Nama Pengirim</th>
                    <th class="align-middle">Nomor Telfon</th>
                    <th class="align-middle">ISI</th>
                    <th class="align-middle">Aksi</th>
                </tr>
                
            </thead>
            <tbody>
              @foreach ($pesan  as $item)
             
                <tr>
                  <td>
                      {{$loop->iteration}}
                  </td>
                  <td>{{$item->nama_lengkap}}</td>
                  <td>{{$item->no_hp}}</td>
                  <td>{{$item->isi}}</td>


                    <td>
                        <form action="{{Route('pesanHapus', $item->id)}}" method="POST">
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
@endsection