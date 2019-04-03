@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Kategori</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($kategori as $p)
            <form class="form-horizontal" action="/datakategori/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id_buku" value="{{ $p->id_buku }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Jenis </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_jenis" value="{{ $p->id_jenis }}" placeholder="Id Jenis">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" value="{{ $p->judul }}" placeholder="Judul">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun terbit</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun_terbit" value="{{ $p->tahun_terbit }}" placeholder="Tahun terbit">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Halaman</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="halaman" value="{{ $p->halaman }}" placeholder="Halaman">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Penulis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" value="{{ $p->penulis }}" placeholder="Penulis">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stok</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok" value="{{ $p->stok }}" placeholder="Stok">
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
          </div>
        </section>
        @endforeach

    <!-- /.content -->
  
    <!-- /.content -->
@endsection