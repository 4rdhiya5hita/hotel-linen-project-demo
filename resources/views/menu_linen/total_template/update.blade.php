@extends('layouts/hotel_linen/master')

@section('title', 'Update Total Linen Template')

@section('content')

<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Total Linen Template</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Update Total Linen Template</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form action="{{ route('template_update_save', $data->id) }}" method="POST" enctype="multipart/form-data">
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

                        <div class="form-group">
                            Linen Code
                            <input class="form-control form-control-sm" name="linen_code" type="text" placeholder="-- hotel code --" value="{{ $data->linen_code }}">
                        </div>
                        @error('linen_code')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Template Name
                            <input class="form-control form-control-sm" name="template_name" type="text" placeholder="-- template name --" value="{{ $data->template_name }}">
                        </div>    
                        @error('template_name')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Linen Type
                            <select class="selectpicker form-control form-control-sm" name="linen_type" id="linen_type" data-live-search="true">
                                @foreach($linen_type as $item)
                                    <option value="{{ $item->id }}"
                                        @if($data->id_linen_type == $item->id)
                                            {{'selected="selected"'}}
                                        @endif
                                        >
                                        {{ $item->linen_code }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('linen_type')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Size
                            <input class="form-control form-control-sm" name="size" type="text" placeholder="-- size --" value="{{ $data->size }}">
                        </div>    
                        @error('size')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Color
                            <input class="form-control form-control-sm" name="color" type="text" placeholder="-- color --" value="{{ $data->color }}">
                        </div>    
                        @error('color')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Supplier
                            <input class="form-control form-control-sm" name="supplier" type="text" placeholder="-- supplier --" value="{{ $data->supplier }}">
                        </div>    
                        @error('supplier')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <div class="col-sm-12 col-md-6">

                        <div class="form-group">
                            Max Cycle
                            <input class="form-control form-control-sm" name="max_cycle" type="text" placeholder="-- max cycle --" value="{{ $data->max_cycle }}">
                        </div>
                        @error('max_cycle')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Sew By
                            <input class="form-control form-control-sm" name="sew_by" type="text" placeholder="-- sew by --" value="{{ $data->sew_by }}">
                        </div>
                        @error('sew_by')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                      
                        <div class="form-group">
                            Ownership
                            <input class="form-control form-control-sm" name="ownership" type="text" placeholder="-- ownership --" value="{{ $data->ownership }}">
                        </div>    
                        @error('ownership')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Quarter
                            <input class="form-control form-control-sm" name="quarter" type="text" placeholder="-- quarter --" value="{{ $data->quarter }}">
                        </div>    
                        @error('quarter')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Year
                            <input class="form-control form-control-sm" name="year" type="date" placeholder="-- year --" value="{{ $data->year }}">
                        </div>    
                        @error('year')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            Linen Condition
                            <input class="form-control form-control-sm" name="linen_condition" type="text" placeholder="-- linen condition --" value="{{ $data->linen_condition }}">
                        </div>    
                        @error('linen_condition')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror

                    </div>

                    <div class="col-sm-12 col-md-6">
                        <button type="submit" class="btn bg-success" style="width: 200px;">
                            <i class="mr-1 fas fa-save"></i>
                            Save
                        </button>
                        <a href="{{ route('template_index') }}" class="btn bg-primary" style="width: 200px;">
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