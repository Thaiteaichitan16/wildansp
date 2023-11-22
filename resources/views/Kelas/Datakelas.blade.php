@extends('Layout')
@section('lyt')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Data Kelas
                  </h1>
    {{-- table--}}
    <div id="page-inner"> 
               
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Tabel Data Kelas
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($yu as $data)
                        <tr class="odd gradeX">
                            <td>{{$data->id_kelas}}</td>
                            <td>{{$data->nama_kelas}}</td>
                            <td>{{$data->kompetensi_keahlian}}</td>
                            <td class="center">
                                <a href="{{url('/admin/kedit/'.$data->id_kelas)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                <a href="khapus/{{$data->id_kelas}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                   <a class="btn btn-primary" href="{{url('admin/knambah')}}" role="button">Tambah</a>
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