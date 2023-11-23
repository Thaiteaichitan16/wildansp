@extends('Layout')
@section('lyt')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Edit Siswa
            </h1>

        </div>
        <form action="{{ url('/admin/sedit/'.$editsis->nisn) }}" method="post">
            @csrf
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Siswa
                            </div>
                            <div class="card-body">
                                @if (session('pesan'))
                                    <div class="alert alert-primary" role="alert">
                                        {{ session('pesan') }}
                                    </div>
                                @endif
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>NISN</label>
                                                    <input type="text" class="form-control" name="nisn"
                                                        placeholder="nisn" value="{{ $editsis->nisn }}">
                                                    @error('nisn')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>NIS</label>
                                                    <input type="text" class="form-control" name="nis"
                                                        placeholder="nis" value="{{ $editsis->nis }}">
                                                    @error('nis')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="nama" value="{{ $editsis->nama }}">
                                                    @error('nama')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>ID Kelas</label>
                                                    <select class="form-control" name="id_kelas">
                                                        @foreach ($datakelas as $item)
                                                            <option value="{{ $item->id_kelas }}">{{$item->nama_kelas}}-{{$item->kompetensi_keahlian}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('id_kelas')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input type="text" class="form-control" name="alamat"
                                                        placeholder="alamat" value="{{ $editsis->alamat }}">
                                                    @error('alamat')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>No Telp</label>
                                                    <input type="text" class="form-control" name="no_telp"
                                                        placeholder="no telp" value="{{ $editsis->no_telp }}">
                                                    @error('no_telp')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>ID Spp</label>
                                                    <select class="form-control" name="id_spp">
                                                        @foreach ($dataspp as $item)
                                                            <option value="{{ $item->id_spp }}">{{$item->tahun}}-{{$item->nominal}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('id_spp')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                
                                                <button class="btn btn-default">Simpan</button>
                                                <button class="btn btn-default" type="reset"><a
                                                        href="{{ url('/admin/siswa') }}">Batal</a></button>
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
