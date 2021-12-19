@extends('Admin.default')
@section('judul') Daftar Product  @endsection
@section('konten')

<div class="card">
    <div class="ml-auto mr-3 mt-3">
        <a href="{{route('Tambahproduct')}}" class="btn btn-success" >
            <i class="anticon anticon-plus buttonsize"></i>
        </a>
    </div>
    <div class="card-body">
       
        <table id="data-table" class="table table-bordered text-center align-middle">
            <thead>
                <tr >
                    <th rowspan="2" class="align-middle">#</th>
                    <th rowspan="2"  class="align-middle">Foto </th>
                    <th rowspan="2"  class="align-middle">Nama </th>
                    <th rowspan="2" class="align-middle">Harga</th>
                    <th rowspan="2" class="align-middle">Status</th>
                    <th rowspan="2" class="align-middle">Pengunjung</th>
                    {{-- <th rowspan="2" class="align-middle">Penghasilan</th> --}}

                    <th colspan="2" class="align-middle">Aksi</th>
                </tr>
                <tr>
                    <th>hapus</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($product as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <img height="70px" width="100px" src="storage/product/{{$item->photo}}" alt="">
                    </td>
                    <td>{{$item->nama_product}}</td>
                    <td>Rp. {{number_format($item->harga,0,'.','.')}}</td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->dilihat}}</td>
                    {{-- <td>0 - X</td> --}}
                    <td>
                        <form action="{{route('hapusProduct', $item->id)}}" method="POST">
                            @csrf
                            <button href="" class="btn btn-danger  buttons">
                                <i class="anticon anticon-delete buttonsize"></i>
                            </button>
                        </form>
                        
                    </td>
                    <td>
                            <a href="{{route('produkEdit', $item->id)}}" class="btn btn-primary m-r-5 buttons">
                                <i class="anticon anticon-edit buttonsize"></i>
                            </a>
                    </td>
                </tr>
              @endforeach
            </tbody>
            
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
          $('#data-table').DataTable( {
              "scrollX": true
          } );
      } );
  </script>          
@endsection
