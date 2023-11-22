@extends('Layout')
@section('lyt')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Data Spp
                  </h1>
    {{-- table--}}
    <div id="page-inner"> 
               
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Tabel Data Spp
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID SPP</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($yo as $data)
                        <tr class="odd gradeX">
                            <td>{{$data->id_spp}}</td>
                            <td>{{$data->tahun}}</td>
                            <td>{{$data->nominal}}</td>
                            <td class="center">
                                <a href="{{url('/admin/spedit/'.$data->id_spp)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                <a href="sphapus/{{$data->id_spp}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                   <a class="btn btn-primary" href="{{url('admin/spnambah')}}" role="button">Tambah</a>
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