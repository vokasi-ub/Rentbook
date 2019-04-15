<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/buku" method="GET">

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
          @extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Buku</h1>
<br>
     
    
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              <a href="buku"> Lihat Semua Data</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>Id buku</th>
                <th>Id jenis</th>
                <th>Judul</th>
                <th>Tahun terbit</th>
                <th>Halaman</th>
                <th>Penulis</th>
                <th>Stok</th>
             @foreach($buku as $buku)
                 <tr>
                 <td>{{$buku->id_buku}}</td>
                  <td>{{$buku->id_jenis}}</td>
                  <td>{{$buku->judul}}</td>
                  <td>{{$buku->tahun_terbit}}</td>
                  <td>{{$buku->halaman}}</td>
                  <td>{{$buku->penulis}}</td>
                  <td>{{$buku->stok}}</td>
                   
                     <td><a href="">Edit</a> | <a href="">Hapus</a></td>
    </tr>
                   @endforeach
            </tbody>
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  @else
   <div class="card-panel red darken-3 white-text">Oops.. Data Tidak Ditemukan</div>
@endif
    <!-- /.content -->
@endsection

