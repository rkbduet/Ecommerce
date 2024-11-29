@extends('backend.layout.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">All Products List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Product Name</th>
                  <th>Product code</th>
                  <th>product category</th>
                  <th>Unit</th>
                  <th>Sell Price</th>
                  <th>Stock Quanity</th>
                  <th>Status</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
@foreach ($products as $product)
    
<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->product_name}}</td>
    <td>{{$product->product_code}}</td>
    <td>{{$product->category->name}}</td>
    <td>{{$product->unit->name}}</td>
    <td>{{$product->sell_price}}</td>
    <td>{{$product->stock_quantity}}</td>
    <td> @if($product->status==1) {{"Active"}} @else {{"Deactive"}} @endif</td>
    <td> <a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-outline-success">Edit</a> 
     
      <form action="{{route('product.destroy',$product->id)}}" method="post" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="deleteConfirm"> Delete</i></button>
    </form>
      </td>
   
  </tr>
@endforeach
         </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection