@extends('backend.layout.app')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>unit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">unit</a></li>
              <li class="breadcrumb-item active">Edit unit</li>
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
                <h3 class="card-title">Edit unit Form</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('unit.update',$unit->id) }}" method="post">
                @method('PUT')
                @csrf
               
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="unit Name">unit Name</label>
                    <input type="text" name="name" class="form-control" value="{{$unit->name}}" placeholder="Enter unit Name">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="unit Name">Short Name</label>
                    <input type="text" name="short_name" class="form-control" value="{{$unit->short_name}}" placeholder="Enter Short Name">
                    @error('short_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>

              <div class="form-group">
                <label for="status">unit Status</label>
                <select name="status" id="status" class="form-control">
                  <option selected value="{{$unit->status}}">{{ $unit->status? 'Active' : 'Deactive'}}</option>
                    <option value="1">Active</option>
                    <option value="0">DeActive</option>
                </select>
              </div>
              @error('status')
              <div class="text-danger">{{ $message }}</div>
          @enderror
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection