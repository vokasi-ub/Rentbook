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
            <form action="/jenis" method="GET">

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
              <form method="post" action="{{route('jenis.store')}}" >
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                
                  
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>
                  

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis" id="inputEmail3" placeholder="Nama Jenis">
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
                <th>Jenis</th>
                
                 <th>Aksi</th>

                
             @foreach($jenis as $jenis)
                 <tr>
                  <td>{{$jenis->id_jenis}}</td>
                  <td>{{$jenis->jenis}}</td>
                  
                     <td>
                     <a href="/datajenis/editjenis/{{ $jenis->id_jenis }}">Edit</a> | 
                     <a href="/datajenis/destroy/{{ $jenis->id_jenis }}"onClick="return confirm('Are you sure want to delete?')">Hapus</a></td>
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