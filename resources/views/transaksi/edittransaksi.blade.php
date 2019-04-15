@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar transaksi</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($transaksi as $p)
            <form class="form-horizontal" action="/datatransaksi/update" method="post">
               {{ csrf_field() }}
               <div class="box-body">
               <div class="form-group">
               <input type="hidden" name="id" value="{{ $p->id }}">
                  <label for="inputEmail3" class="col-sm-3 control-label">Status Pinjam </label>
                  <div class="col-sm-9">
                  <select name="status_pinjam" class="form-control">
                    <option value="Kembali"> Kembali</option>
                  </select> 
                  </div>
                  
                  <input type="hidden" class="form-control" name="id_buku" value="{{$p->id_buku}}">
                  <input type="hidden" class="form-control" name="stok" value="{{$p->stok}}">
                  <br>
                  <label for="inputEmail3" class="col-sm-3 control-label">Tgl Kembali</label>                  
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tgl_kembali" id="inputEmail3" placeholder="Tanggal pinjam">
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