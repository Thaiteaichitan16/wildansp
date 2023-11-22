@extends('Layout')
@section('lyt')
    <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
            <div class="header"> 
                          <h1 class="page-header">
                              Dashboard <small>Pembayaran Spp</small>
                          </h1>
                           
                                      
          </div>
              <div id="page-inner">
  
                  <!-- /. ROW  -->
  
                  <div class="row">
                      <div class="col-md-3 col-sm-12 col-xs-12">
                          <div class="panel panel-primary text-center no-boder blue">
                              <div class="panel-left pull-left blue">
                                  <i class="fa fa-eye fa-5x"></i>
                                  
                              </div>
                              <div class="panel-right">
                                  <h3>10,253</h3>
                                 <strong> Daily Visits</strong>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-12 col-xs-12">
                          <div class="panel panel-primary text-center no-boder blue">
                                <div class="panel-left pull-left blue">
                                  <i class="fa fa-shopping-cart fa-5x"></i>
                                  </div>
                                  
                              <div class="panel-right">
                              <h3>33,180 </h3>
                                 <strong> Sales</strong>
  
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-12 col-xs-12">
                          <div class="panel panel-primary text-center no-boder blue">
                              <div class="panel-left pull-left blue">
                                  <i class="fa fa fa-comments fa-5x"></i>
                                 
                              </div>
                              <div class="panel-right">
                               <h3>16,022 </h3>
                                 <strong> Comments </strong>
  
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-12 col-xs-12">
                          <div class="panel panel-primary text-center no-boder blue">
                              <div class="panel-left pull-left blue">
                                  <i class="fa fa-users fa-5x"></i>
                                  
                              </div>
                              <div class="panel-right">
                              <h3>36,752 </h3>
                               <strong>No. of Visits</strong>
  
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  
               
                  
              
          
              
                  
                 
                  
                  <!-- /. ROW  -->
  
         
                  
                  
                  
                  <div class="row">
                      <div class="col-md-4 col-sm-12 col-xs-12">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  Tasks Panel
                              </div>
                              <div class="panel-body">
                                  <div class="list-group">
  
                                      <a href="#" class="list-group-item">
                                          <span class="badge">7 minutes ago</span>
                                          <i class="fa fa-fw fa-comment"></i> Commented on a post
                                      </a>
                                      <a href="#" class="list-group-item">
                                          <span class="badge">16 minutes ago</span>
                                          <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                      </a>
                                      <a href="#" class="list-group-item">
                                          <span class="badge">36 minutes ago</span>
                                          <i class="fa fa-fw fa-globe"></i> Invoice 653 has paid
                                      </a>
                                      <a href="#" class="list-group-item">
                                          <span class="badge">1 hour ago</span>
                                          <i class="fa fa-fw fa-user"></i> A new user has been added
                                      </a>
                                      <a href="#" class="list-group-item">
                                          <span class="badge">1.23 hour ago</span>
                                          <i class="fa fa-fw fa-user"></i> A new user has added
                                      </a>
                                      <a href="#" class="list-group-item">
                                          <span class="badge">yesterday</span>
                                          <i class="fa fa-fw fa-globe"></i> Saved the world
                                      </a>
                                  </div>
                                  <div class="text-right">
                                      <a href="#">More Tasks <i class="fa fa-arrow-circle-right"></i></a>
                                  </div>
                              </div>
                          </div>
  
                      </div>
                      <div class="col-md-8 col-sm-12 col-xs-12">
  
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  Data Petugas
                              </div> 
                              <div class="panel-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered table-hover">
                                          <thead>
                                            <tr>
                                                <th>ID Petugas</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama Petugas</th>
                                                <th>Level</th>
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
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  Data Spp
                              </div> 
                              <div class="panel-body">
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered table-hover">
                                          <thead>
                                            <tr>
                                                <th>ID SPP</th>
                                                <th>Tahun</th>
                                                <th>Nominal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($yo as $data)
                                            <tr class="odd gradeX">
                                                <td>{{$data->id_spp}}</td>
                                                <td>{{$data->tahun}}</td>
                                                <td>{{$data->nominal}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
  
                      </div>
                  </div>
                  <!-- /. ROW  -->
@endsection