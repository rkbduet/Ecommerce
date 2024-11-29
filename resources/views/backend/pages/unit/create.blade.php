@extends('backend.layout.app')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Unit</a></li>
              <li class="breadcrumb-item active">Add Unit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Unit Form</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('unit.store')}}">
                @csrf
                @method('POST')
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="name">Unit Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Unit Name">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="short_name">Short Name</label>
                    <input type="text" name="short_name" class="form-control" placeholder="Enter Short Name">
                    @error('short_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection