@extends('layouts/hotel_linen/master')

@section('title', 'Detail Users')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Detail Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('user_update_save', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="col-sm-12 col-md-3">First name</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->first_name }}</div>
                            </div>
                        </div>    
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                          <div class="row">
                              <label class="col-sm-12 col-md-3">Last name</label>
                              <div class="col-sm-12 col-md-1">:</div>
                              <div class="col-sm-12 col-md-8"> {{ $data->last_name }}</div>
                          </div>
                      </div>  
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Linen center</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->linen_center }}</div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Laundry plant</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->laundry_plant }}</div>
                            </div>
                        </div>    
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Phone</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->phone }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                          <div class="row">
                              <label class="col-sm-12 col-md-3">Email</label>
                              <div class="col-sm-12 col-md-1">:</div>
                              <div class="col-sm-12 col-md-8"> {{ $data->email }}</div>
                          </div>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <a href="{{ route('user_index') }}" class="btn bg-primary" style="width: 200px;">
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