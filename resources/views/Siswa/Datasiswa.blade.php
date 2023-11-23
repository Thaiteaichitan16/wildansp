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
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Tahun/Nominal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($yi as $data)
                        <tr class="odd gradeX">
                            <td>{{$data->nisn}}</td>
                            <td>{{$data->nis}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->kelas->nama_kelas}}-{{$data->kelas->kompetensi_keahlian}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->no_telp}}</td>
                            <td>{{$data->spp->tahun}}-{{$data->spp->nominal}}</td>
                            <td class="center">
                                <a href="{{url('/admin/sedit/'.$data->nisn)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                <a href="shapus/{{$data->nisn}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                   <a class="btn btn-primary" href="{{url('admin/snambah')}}" role="button">Tambah</a>
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