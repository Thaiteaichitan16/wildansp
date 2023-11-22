@extends('Layout')
@section('lyt')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div class="header"> 
                      <h1 class="page-header">
                           Tambah Spp
                      </h1>

      </div>
          <form action="{{url('/admin/spnambah')}}" method="post">
              @csrf
          <div id="page-inner"> 
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Tambah Spp
                      </div>
                      <div class="card-body">
                          @if (session('pesan'))
                              <div class="alert alert-primary" role="alert">
                                  {{session('pesan')}}
                                </div>
                              @endif
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-12">
                                  <form role="form">
                                      <div class="form-group">
                                          <label>Tahun</label>
                                          <input type="number" class="form-control" name="tahun" placeholder="tahun">
                                          @error('tahun')
                                          <div class="form-text">
                                              {{$message}}
                                          </div>
                                          @enderror
                                      </div>
                                      <div class="form-group">
                                          <label>Nominal</label>
                                          <input type="number" class="form-control" name="nominal" placeholder="nominal">
                                          @error('nominal')
                                          <div class="form-text">
                                              {{$message}}
                                          </div>
                                          @enderror
                                      </div>
                                      <button class="btn btn-default">Tambah</button>
                                      <button class="btn btn-default" type="reset" ><a href="{{url('/admin/spp')}}">Batal</a></button>
                                  </form>
                              </div>
                              <!-- /.col-lg-6 (nested) -->
                              
                              <!-- /.col-lg-6 (nested) -->
                          </div>
                          <!-- /.row (nested) -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>
          </div>
           <!-- /. PAGE INNER  -->
@endsection