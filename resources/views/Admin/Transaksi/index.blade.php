@extends('Admin.default')
@section('judul') Daftar Transaksi @endsection
@section('konten')

<div class="card">

    <div class="card-body">

        <table id="data-table" class="table table-bordered text-center align-middle">
            <thead>
                <tr>
                    <th rowspan="2" class="align-middle">#</th>
                    <th rowspan="2" class="align-middle">Nama User</th>
                    <th rowspan="2" class="align-middle">TRX ID</th>
                    <th rowspan="2" class="align-middle">Total</th>
                    <th rowspan="2" class="align-middle">Status</th>
                    <th colspan="2" class="align-middle">Aksi</th>
                </tr>
                <tr>
                    <th>Detail</th>
                    <th>Hapus</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($transaksi as $item)

                <tr>
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td>{{$item->nama_lengkap}}</td>
                    <td>#ORD-{{$item->id}}</td>
                    <td>{{$item->total}}</td>
                    <td>{{$item->status}}</td>
                    <td>

                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#Modalke-{{$item->id}}">
                            <i class="anticon anticon-zoom-in buttonsize"></i>
                        </button>

                    </td>
                    <td>
                        <form action="{{Route('deleteTransaksi', $item->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger  buttons">
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

@foreach ($transaksi as $item)
<div class="modal fade bd-example-modal-lg" id="Modalke-{{$item->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4">Detail Transaksi #ORD-{{$item->id}}</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div id="invoice" class="p-h-30">
                            <div class="m-t-15 lh-2">
                                <div class="inline-block">
                                    <img class="img-fluid" src="{{Asset('enlink-assets//images/logo/logo.png')}}"
                                        alt="">
                                    {{-- <address class="p-l-10">
                                            <span class="font-weight-semibold text-dark">Enlink, Inc.</span><br>
                                            <span>9498 Harvard Street</span><br>
                                            <span>Fairfield, Chicago Town 06824</span><br>
                                            <abbr class="text-dark" title="Phone">Phone:</abbr>
                                            <span>(123) 456-7890</span>
                                        </address> --}}

                                </div>
                                <div class="float-right">
                                    <h2>INVOICE</h2>
                                </div>
                            </div>
                            <div class="row m-t-20 lh-2">
                                <div class="col-sm-9">
                                    <h3 class="p-l-10 m-t-10">Penerima:</h3>
                                    <address class="p-l-10 m-t-10">
                                        <span class="font-weight-semibold text-dark">{{$item->nama_lengkap}}</span><br>
                                        <span>{{$item->alamat}}</span><br>
                                        <span>{{$item->kabupaten}}, {{$item->provinsi}}, {{$item->kode_pos}} </span>
                                    </address>
                                </div>
                                <div class="col-sm-3">
                                    <div class="m-t-80">
                                        <div class="text-dark text-uppercase d-inline-block">
                                            <span class="font-weight-semibold text-dark">Invoice :</span></div>
                                        <div class="float-right"> #ORD-{{$item->id}}</div>
                                    </div>
                                    <div class="text-dark text-uppercase d-inline-block">
                                        <span class="font-weight-semibold text-dark">Date :</span>
                                    </div>
                                    <div class="float-right">
                                        {{date('Y-m-d', strtotime($item->created_at) )}}
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID Produk</th>
                                                    <th>Items</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @php
                                                    $produkID = explode(",", $item->product_id)
                                               @endphp

                                            @foreach ($produkID as $ID)
                                                @foreach ($produk as $produc)
                                                    @if ($ID == $produc->id)
                                                    <tr>  
                                                        <th>{{$produc->id}}</th>
                                                        <td>{{$produc->nama_product}}</td>
                                                        <td>Rp {{number_format($produc->harga,0,'.','.')}}</td>
                                                    </tr>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row m-t-30 lh-1-8">
                                        <div class="col-sm-12">
                                            <div class="float-right text-right">
                                                <h3><span class="font-weight-semibold text-dark">Total :</span>
                                                    Rp {{number_format($item->total,0,'.','.')}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30 lh-2">
                                        <div class="col-sm-12">
                                            <div class="border-bottom p-v-20">
                                                <p class="text-opacity"><small>In exceptional circumstances, Financial
                                                        Services can provide an urgent manually processed special
                                                        cheque. Note, however, that urgent special cheques should be
                                                        requested only on an emergency basis as manually produced
                                                        cheques involve duplication of effort and considerable staff
                                                        resources. Requests need to be supported by a letter explaining
                                                        the circumstances to justify the special cheque payment.</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-v-20">
                                        <div class="col-sm-6">
                                            <img class="img-fluid text-opacity m-t-5" width="100"
                                                src="{{Asset('enlink-assets//images/logo/logo.png')}}" alt="">
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <small><span class="font-weight-semibold text-dark">Phone:</span> (123)
                                                456-7890</small>
                                            <br>
                                            <small>support@themenate.com</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{Route('updateTransaksi', $item->id)}}" method="POST">
                    @csrf

                    @if ($item->status == "TRF" || $item->status == "Pending")
                        <input type="hidden" name="status" value="TRF-Diterima">
                    @elseif($item->status == "TRF-Diterima")
                        <input type="hidden" name="status" value="Selesai">
                    @endif

                    @if ($item->status == "Selesai")
                    <button class="btn btn-default btn-block" type="button">Pesanan Telah Selesai</button>
                    @else
                    <button type="submit" class="btn btn-success  buttons">
                        <i class="anticon anticon-check-circle buttonsize"></i>
                    </button>
                    @endif
                </form>
                <form action="{{Route('deleteTransaksi', $item->id)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger  buttons">
                        <i class="anticon anticon-delete buttonsize"></i>
                    </button>
                </form>
              
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
