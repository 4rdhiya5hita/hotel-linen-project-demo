@extends('layouts/hotel_linen/master')

@section('title', 'Detail Hotel Transaction')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Hotel Transaction</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Detail Hotel Transaction</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('hotel_transaction_update_save', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="col-sm-12 col-md-3">Trans code</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->trans_code }}</div>
                            </div>
                        </div>   
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Trans date</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->trans_date }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Hotel code</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->hotel_code }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Hotel name</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->hotel_name }}</div>
                            </div>
                        </div>
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Clean</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->clean }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Soil</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->soil }}</div>
                            </div>
                        </div> 
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Stain</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->stain }}</div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Torn</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->torn }}</div>
                            </div>
                        </div>    
                        
                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Tran status</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->trans_status }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Delivery status</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->delivery_status }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Discard</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->discard }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Treatment</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->treatment }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Request linen</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->request_linen }}</div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 2px solid #aba09f;">
                            <div class="row">
                                <label class="col-sm-12 col-md-3">Driver</label>
                                <div class="col-sm-12 col-md-1">:</div>
                                <div class="col-sm-12 col-md-8"> {{ $data->driver }}</div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <a href="{{ route('hotel_transaction_index') }}" class="btn bg-primary" style="width: 200px;">
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