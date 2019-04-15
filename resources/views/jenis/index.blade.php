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
            <th> Jenis </th>
            
  </tr> 
        @foreach($jenis as $row)
        <tr>
            
                <th>{{ $row->id_jenis}}</th>
                <th>{{ $row->jenis }}</th>
                
             
                <th> 
                    <a href="/id_jenis/edit/{{$row->id_jenis}}">Edit</a>
                    <a href="/id_jenis/hapus/{{$row->id_jenis}}">Hapus</a>
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
