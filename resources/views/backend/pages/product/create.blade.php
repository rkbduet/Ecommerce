@extends('backend.layout.app')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Product</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
                <h3 class="card-title">Add Product Form</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('category.store')}}">
                @csrf
                @method('POST')
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="Category Name">Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="Slug">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter Product Name">
                    @error('slug')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="description">Product description</label>
                    <textarea type="text" name="description" class="form-control" placeholder="Enter Product Description">
                   
                    </textarea>
                      @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="category">Product Category</label>
                    <select name="category" class="form-control">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                      
                    </select>
                    @error('category')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="unit_price">Product Unit Price</label>
                    <input type="text" name="unit_price" class="form-control" placeholder="Enter Product Price">
                    @error('unit_price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="stock_quanity">Stock Quanity</label>
                    <input type="number" name="stock_quantity" class="form-control" placeholder="Enter Product Name">
                    @error('stcok_quanitity')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Enter Product Image">
                    @error('image')
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
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection