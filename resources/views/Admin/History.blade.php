@extends('Layout')
@section('lyt')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Data Siswa
                  </h1>
    {{-- table--}}
    <div id="page-inner"> 
               
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Tabel Data Siswa
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID Pembayaran</th>
                            <th>Nama Petugas</th>
                            <th>Nama Siswa</th>
                            <th>Tanggal Bayar</th>
                            <th>Bulan dibayar</th>
                            <th>Tahun dibayar</th>
                            <th>Tahun/Nominal</th>
                            <th>Jumlah dibayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ye as $data)
                        <tr class="odd gradeX">
                            <td>{{$data->id_pembayaran}}</td>
                            <td>{{$data->petugas->nama_petugas}}</td>
                            <td>{{$data->siswa->nama}}</td>
                            <td>{{$data->tgl_bayar}}</td>
                            <td>{{$data->bulan_dibayar}}</td>
                            <td>{{$data->tahun_dibayar}}</td>
                            <td>{{$data->spp->tahun}}-{{$data->spp->nominal}}</td>
                            <td>{{$data->jumlah_dibayar}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                </div>
            </div>
           
        </div>
        <!--End Advanced Tables -->
       
    </div>
</div>
</div>
</div>
</div>
   <!-- /. ROW  -->
@endsection