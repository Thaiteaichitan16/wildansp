@extends('Layout')
@section('lyt')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Edit Petugas
            </h1>

        </div>
        <form action="{{ url('/admin/edit/'.$editpet->id_petugas) }}" method="post">
            @csrf
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Petugas
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
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="username" value="{{ $editpet->username }}">
                                                    @error('username')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="password" value="{{ $editpet->password }}">
                                                    @error('password')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Petugas</label>
                                                    <input type="text" class="form-control" name="nama_petugas"
                                                        placeholder="nama_petugas" value="{{ $editpet->nama_petugas }}">
                                                    @error('nama_petugas')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <select class="form-control" name="level"
                                                        value="{{ $editpet->level }}">
                                                        <option>Admin</option>
                                                        <option>Petugas</option>
                                                    </select>
                                                    @error('level')
                                                        <div class="form-text">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button class="btn btn-default">Simpan</button>
                                                <button class="btn btn-default" type="reset"><a
                                                        href="{{ url('/admin/petugas') }}">Batal</a></button>
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
