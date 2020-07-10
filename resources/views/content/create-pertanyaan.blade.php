@extends('template.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Buat Pertanyaan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Buat Pertanyaan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/question" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="judul">Judul Pertanyaan</label>
                  <input type="text" name="judul" class="form-control" id="judul">
                </div>
                <div class="form-group">
                  <label for="isi">Isi Pertanyaan</label>
                  <input type="text" name="isi" class="form-control" id="isi">
                </div>
                <div class="form-group">
                    <label for="tag">Tag Pertanyaan</label>
                    <input type="text" name="tag" class="form-control" id="tag">
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
  </div>
@endsection