@extends('Layout')
@section('lyt')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Dashboard <small>Pembayaran Spp</small>
                  </h1>
    {{-- table--}}
    <div id="page-inner"> 
               
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Tabel Data Petugas
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID Petugas</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama Petugas</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ya as $data)
                        <tr class="odd gradeX">
                            <td>{{$data->id_petugas}}</td>
                            <td>{{$data->username}}</td>
                            <td>{{$data->password}}</td>
                            <td>{{$data->nama_petugas}}</td>
                            <td>{{$data->level}}</td>
                            <td class="center">
                                <a href="{{url('edit/'.$data->id_petugas)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                <a href="hapus/{{$data->id_petugas}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                   <a class="btn btn-primary" href="{{url('admin/nambah')}}" role="button">Tambah</a>
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