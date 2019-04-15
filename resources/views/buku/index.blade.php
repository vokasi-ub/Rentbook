@extends('template.master')
@section('content')
<!-- /.row -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            </div>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
          <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                
        <tr>
            <th> Id Jenis </th>
            <th> Judul </th>
            <th> Tahun terbit </th>
            <th> Halaman </th>
            <th> Stok </th>
            <th> Aksi </th>
  </tr> 
        @foreach($buku as $row)
        <tr>
            
                <th>{{ $row->id_buku }}</th>
                <th>{{ $row->id_jenis }}</th>
                <th>{{ $row->judul }}</th>
                <th>{{ $row->tahun_terbit }}</th>
                <th>{{ $row->halaman }}</th>
                <th>{{ $row->penulis }}</th>
                <th>{{ $row->stok }}</th>
             
                <th> 
                    <a href="/id/edit/{{$row->id_buku}}">Edit</a>
                    <a href="/id/hapus/{{$row->id_buku}}">Hapus</a>
        </tr>
        @endforeach
              </table>
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
@endsection
