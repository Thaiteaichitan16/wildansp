@extends('Layout')
@section('lyt')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div class="header"> 
                      <h1 class="page-header">
                           Transaksi
                      </h1>

      </div>
          <form action="{{url('/admin/bayar')}}" method="post">
              @csrf
          <div id="page-inner"> 
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Pembayaran Spp
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
                                        <label>Nama Siswa</label>
                                        <select class="form-control" name="nisn">
                                            @foreach ($datasiswa as $item)
                                                <option value="{{ $item->nisn }}">{{$item->nisn}}-{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                        @error('nisn')
                                            <div class="form-text">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                      <div class="form-group">
                                          <label>Tanggal Bayar</label>
                                          <input type="date" class="form-control" name="tgl_bayar" placeholder="Tanggal Bayar">
                                          @error('tgl_bayar')
                                          <div class="form-text">
                                              {{$message}}
                                          </div>
                                          @enderror
                                      </div>
                                      <div class="form-group">
                                        <label>Bulan Dibayar</label>
                                        <select class="form-control" name="bulan_dibayar">
                                           <option value="januari">Januari</option>
                                           <option value="februari">Februari</option>
                                           <option value="maret">Maret</option>
                                           <option value="april">April</option>
                                           <option value="mei">Mei</option>
                                           <option value="juni">Juni</option>
                                           <option value="juli">Juli</option>
                                           <option value="agustus">Agustus</option>
                                           <option value="september">September</option>
                                           <option value="oktober">Oktober</option>
                                           <option value="november">November</option>
                                           <option value="desember">Desember</option>
                                        </select>
                                        @error('bulan_dibayar')
                                            <div class="form-text">
                                                {{ $message }}
                                            </div>
                                        @enderror
                            </div>
                                      <div class="form-group">
                                          <label>Tahun Dibayar</label>
                                          <input type="text" class="form-control" name="tahun_dibayar" placeholder="Tahun diBayar">
                                          @error('tahun_dibayar')
                                          <div class="form-text">
                                              {{$message}}
                                          </div>
                                          @enderror
                                      <div class="form-group">
                                                    <label>ID Spp</label>
                                                    <select class="form-control" name="id_spp">
                                                        @foreach ($datasp as $item)
                                                            <option value="{{ $item->id_spp }}">{{$item->tahun}}-{{$item->nominal}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('id_spp')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Bayar</label>
                                            <input type="number" class="form-control" name="jumlah_bayar" placeholder="jumlah bayar">
                                            @error('jumlah_bayar')
                                            <div class="form-text">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                      <button class="btn btn-default">Tambah</button>
                                      <button class="btn btn-default" type="reset" ><a href="{{url('/admin')}}">Batal</a></button>
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