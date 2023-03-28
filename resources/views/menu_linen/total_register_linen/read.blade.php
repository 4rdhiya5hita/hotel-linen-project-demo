@extends('layouts/hotel_linen/master')

@section('title', 'Detail Register Linen')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Register Linen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Detail Register Linen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('register_linen_update_save', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Date</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->register_date }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Code</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->template_code }}</div>
                            </div>
                        </div>    
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Name</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->template_name }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Linen type</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->linen_type }}</div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Total</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->total }}</div>
                            </div>
                        </div>    
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Size</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->size }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Supplier</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->supplier }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Color</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->color }}</div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <a href="{{ route('register_linen_index') }}" class="btn bg-primary" style="width: 200px;">
                          <i class="mr-1 fa fa-arrow-left"></i>
                          Back
                        </a>

                    </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </form>    
  </div>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection