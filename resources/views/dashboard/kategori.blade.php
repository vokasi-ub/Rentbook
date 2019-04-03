@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar Buku</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/kategori" method="GET">

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Search</button>
                </div>
                <!-- /btn-group -->
                
                <input type="text" class="form-control" name="cari" placeholder="Cari Data">
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">List Daftar Buku</h3>
       
            </div>
            <div class="box-body">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                Tambah Data
              </button>
              <div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
              </div>
              <div class="modal-body">
              <form method="post" action="{{route('kategori.store')}}" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Id Jenis</label>
                  

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_jenis" id="inputEmail3" placeholder="Id Jenis">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                  

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" id="inputEmail3" placeholder="Judul Buku">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>
                  

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun_terbit" id="inputEmail3" placeholder="Tahun terbit">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Halaman</label>
                  

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="halaman" id="inputEmail3" placeholder="Halaman">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Penulis</label>
                  

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" id="inputEmail3" placeholder="Penulis">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok</label>
                  

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok" id="inputEmail3" placeholder="Stok">
                  </div>
                </div>
            
              </div>
              
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
            
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        </form>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                <th>Id Jenis</th>
                <th>Judul</th>
                <th>Tahun terbit</th>
                <th>Halaman</th>
                <th>Penulis</th>
                <th>Stok</th>
                 <th>Aksi</th>

                
             @foreach($kategori as $kategori)
                 <tr>
                  <td>{{$kategori->id_jenis}}</td>
                  <td>{{$kategori->judul}}</td>
                  <td>{{$kategori->tahun_terbit}}</td>
                  <td>{{$kategori->halaman}}</td>
                  <td>{{$kategori->penulis}}</td>
                  <td>{{$kategori->stok}}</td>

                     <td>
                     <a href="/datakategori/edit/{{ $kategori->id_buku }}">Edit</a> | 
                     <a href="/datakategori/destroy/{{ $kategori->id_buku }}">Hapus</a></td>
    </tr>
  @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  
    <!-- /.content -->
@endsection