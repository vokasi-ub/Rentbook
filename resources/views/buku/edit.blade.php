@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar Buku</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($buku as $p)
            <form class="form-horizontal" action="/databuku/update" method="post" enctype="multipart/form-data" >
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id_buku" value="{{ $p->id_buku }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Jenis </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_jenis" value="{{ $p->id_jenis }}" placeholder="Id buku">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" value="{{ $p->judul }}" placeholder="judul">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">tahun terbit</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun_terbit" value="{{ $p->tahun_terbit }}" placeholder="tahun terbit">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">halaman</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="halaman" value="{{ $p->halaman }}" placeholder="halaman">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">penulis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" value="{{ $p->penulis }}" placeholder="penulis">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">stok</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok" value="{{ $p->stok }}" placeholder="stok">
                  </div>
                </div>

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="gambarbuku" value="{{ $p->gambarbuku }}" placeholder="stok">
                  </div>
                </div>

                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
            @endforeach
          </div>
        </section>
        

    <!-- /.content -->
  
    <!-- /.content -->
@endsection