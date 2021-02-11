@extends('layouts.back_app')


@section('title')
    Products
@endsection


@section('back_content')

                                               @if(empty($process))
<div class="container">
    <div class="card">
        <div class="card-header">
            Products
        </div>
        <div class="card-header">
            <a href="{{route('add_product',['process'=>'add'])}}" class="btn btn-block btn-link bg-primary btn-lg">Add Products</a>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">

@foreach($products as $product)
                    <div class="col-md-3">
                        <!-- Widget: user widget style 2 -->
                        <div class="card card-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-warning">
                                <div class="widget-user-image">
                                    <img class="img-circle elevation-2" src="<?php echo str_replace('public','',url('/'))."storage/app/".json_decode($product->img)[0]; ?>" alt="">
                                </div>
                                <!-- /.widget-user-image -->
                                <h3 class="widget-user-username"> {{$product->name}}</h3>
                                <a class="float-right" href="{{route('edit_product',['process' => 'edit','id'=>$product->id])}}"><i class="fas fa-edit text-black-50"></i></a>
                                <a class="float-right" href="{{route('delete_product',['id'=>$product->id])}}"><i class="fas fa-trash text-black-50"></i></a>
                            </div>
                            <div class="card-footer p-0">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Category <span class="float-right badge bg-primary">{{$product->product_belong_to_category['name']}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            itms <span class="float-right badge bg-info">{{count($product->product_has_many_itm)}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            the number of transcation  <span class="float-right badge bg-success">12</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Followers <span class="float-right badge bg-danger">842</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>


@endforeach
                </div>
            </div>
        </div>
    </div>

</div>

                                            @elseif($process == 'add')
{{-- ===================================star errrror name============================================ --}}
{{-- ===================================star errrror name============================================ --}}
@if ($errors->any())

    <div class="container mt-3">
        <div class="row">
            @foreach ($errors->all() as $error)
                <div class="col-md-3">
                    <div class="card bg-primary">
                        <div class="card-header">
                            <h3 class="card-title">Notify</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{$error}}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            @endforeach

        </div>
    </div>
@endif
{{-- ===================================end errrrorrre name============================================ --}}
{{-- ===================================end errrrorrre name============================================ --}}







<div class="container">
   <div class="row">
       <div class="col-sm-12 mt-5">
           <!-- general form elements -->
           <div class="card card-primary">
               <div class="card-header">
                   <h3 class="card-title">Add products</h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
               <form role="form" action="{{route('insert_product')}}" method="POST" enctype="multipart/form-data" >
                   <div class="card-body">
@csrf
                       <div class="form-group">
                           <label for="exampleInputEmail1">product name</label>
                           <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
                       </div>

                       <div class="form-group">
                           <label for="exampleInputEmail1">product description</label>
                           <textarea type="" name="product_description" class="form-control" id="exampleInputEmail1" placeholder="Enter category description"></textarea>
                       </div>
                       <div class="form-group">
                           <div class="custom-file">
                               <input type="file" name="img_product" class="custom-file-input" id="customFile">
                               <label class="custom-file-label" for="customFile">Choose file</label>
                           </div>
                       </div>

                       <div class="form-group">
                           <label>Select</label>

                           <select class="form-control" name="category_id">
                               @foreach(\App\Category::get() as  $category)
                                   <option value="{{$category->id}}">{{$category->name}}</option>
                               @endforeach
                           </select>
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
</div>




                                             @elseif($process == 'edit')


{{-- ===================================end errrrorrre name============================================ --}}
@if(Session::has('message_edit_product'))
   <div class="container mt-4">
       <div class="row">
           <div class="col-md-12">
               <div class="card bg-primary">
                   <div class="card-header">
                       <h3 class="card-title">Success</h3>

                       <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                           </button>
                       </div>
                       <!-- /.card-tools -->
                   </div>
                   <!-- /.card-header -->
                   <div class="card-body">
                       {{Session::get('message_edit_product')}}
                   </div>
                   <!-- /.card-body -->
               </div>
               <!-- /.card -->
           </div>
       </div>
   </div>

@endif
{{-- ===================================end errrrorrre name============================================ --}}






   {{-- ===================================star errrror name============================================ --}}
   @if ($errors->any())

       <div class="container mt-3">
           <div class="row">
               @foreach ($errors->all() as $error)
                   <div class="col-md-3">
                       <div class="card bg-primary">
                           <div class="card-header">
                               <h3 class="card-title">Notify</h3>

                               <div class="card-tools">
                                   <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                   </button>
                               </div>
                               <!-- /.card-tools -->
                           </div>
                           <!-- /.card-header -->
                           <div class="card-body">
                               {{$error}}
                           </div>
                           <!-- /.card-body -->
                       </div>
                       <!-- /.card -->
                   </div>
               @endforeach

           </div>
       </div>
   @endif
   {{-- ===================================end errrrorrre name============================================ --}}




<div class="container">
<div class="row">
   <div class="col-sm-12 mt-5">
       <!-- general form elements -->
       <div class="card card-primary">
           <div class="card-header">
               <h3 class="card-title">Add products</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form role="form" action="{{route('edit_insert_product')}}" method="post" enctype="multipart/form-data">
               @csrf
               <input type="hidden" value="{{$product->id}}" name="id">

               <div class="card-body">

                   <div class="form-group">
                       <label for="exampleInputEmail1">product name</label>
                       <input type="text" name="product_name" value="{{$product->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
                   </div>

                   <div class="form-group">
                       <label for="exampleInputEmail1">product description</label>
                       <textarea type="" name="product_description"  class="form-control" id="exampleInputEmail1" placeholder="Enter category description">{{$product->description}}</textarea>
                   </div>

                   <div class="input-group">
                       <div class="custom-file">
                           <input type="file" name="img_product" class="custom-file-input" id="exampleInputFile">
                           <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                       </div>
                       <div class="input-group-append">
                           <span class="input-group-text" id="">
                               <img class="img-size-32" src="<?php echo str_replace('public','',url('/'))."storage/app/".json_decode($product->img)[0]; ?>">
                           </span>
                       </div>
                   </div>




                   <div class="form-group">
                       <label>Category</label>

                       <select class="form-control" name="category_id">

                           <option value="{{$product->category_id}}">{{\App\Category::find($product->category_id)->name}}</option>

                       @foreach(\App\Category::get() as  $category)
                               <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                       </select>

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
</div>



@endif

@endsection


