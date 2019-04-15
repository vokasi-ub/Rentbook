@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>RENTBOOK</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="">

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Search</button>
                </div>
                <!-- /btn-group -->
                
                <input type="text" class="form-control" name="keyword" placeholder="Cari Data">
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Daftra Jenis Buku</h3>
       
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
              
              <form method="post" action="{{route('transaksi.store')}}" >
              {{csrf_field()}}

             
              
              <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Id Buku</label>
                <div class="col-sm-9">                  
									<select class="form-control" name="id_buku" class="select2me">
                  @foreach($id_buku as $buk)
                    <option value="{{ $buk->id_buku }}">{{ $buk->id_buku }}</option>	
                    @endforeach									
                  </select>
                  
								</div>
                  
                
                  <label for="inputEmail3" class="col-sm-3 control-label">Tgl Pinjam</label>
                  

                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tgl_pinjam" id="inputEmail3" placeholder="Tanggal pinjam">
                  
                  </div>
                 
                </div>
                <label for="inputEmail3" class="col-sm-3 control-label"> Status Pinjam</label>
                  

                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="status_pinjam" id="inputEmail3" value="Dipinjam">
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
               <th>Id Transaksi</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status pinjam</th>
                
                 <th>Aksi</th>

              
             @foreach($transaksi as $transaksi)
                 <tr>
                 <td>{{$transaksi->id}}</td>
                  <td>{{$transaksi->buku->judul}}</td>
                  <td>{{$transaksi->tgl_pinjam}}</td>
                  <td>{{$transaksi->tgl_kembali}}</td>
                  <?php if($transaksi->tgl_kembali == null) {?>                  
                  <td><span class="btn btn-danger btn-sm">{{$transaksi->status_pinjam}}</span></td>
                  <?php } else {?>
                  <td><span class="btn btn-success btn-sm">{{$transaksi->status_pinjam}}</span></td>
                  <?php } ?>
                   
                     <td>
                     <a href="/datatransaksi/edittransaksi/{{ $transaksi->id }}">Edit</a> | 
                     <a href="/datatransaksi/destroy/{{ $transaksi->id }}"onClick="return confirm('Are you sure want to delete?')">Hapus</a></td>
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