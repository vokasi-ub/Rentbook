@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar Jenis</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($jenis as $p)
            <form class="form-horizontal" action="/datajenis/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis" value="{{ $p->jenis }}" placeholder="Nama Jenis">
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