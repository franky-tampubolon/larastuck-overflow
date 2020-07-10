@extends('template.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">list pertanyaan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container container-fluid">
        <div class="row">
            <div class="col">                
                <div class="float-right btn btn-outline-primary rounded-pill mt-4">
                    <a href="/question/create">Add Question</a>
                </div>
                <h1> Daftar Pertanyaan</h1>
                <p class="text-muted">1200 pertanyaan</p>
            </div>
        </div>
        <hr>
        @foreach ($datas as $data)
        <div class="row">
            <div class="col-lg-2">
                <div class="card-body text-center">
                    <div class="text-center">0</div>
                    <span> Votes </span>
                </div>
                <div class="card-body text-center">
                    <div class="text-center">0</div>
                    <span> Answers </span>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <a href="">
                        <h3 class="">{{$data->judul}}</h3>
                    </a>
                    <p class="card-text">
                      {{$data->isi}}
                    </p>
                    <a href="#" class="btn btn-primary btn-sm">Tag 1</a>
                    <a href="#" class="btn btn-primary btn-sm">Tag 2</a>
                    <div class="mt-1">
                        <a href="">echo nama user yang punya pertanyaan</a>
                        <p class="text-muted">echo created at pertanyaan</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /.col-md-8 -->
        </div>
        <hr>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection