@extends('layouts.back_app')




@section('title')
    Category
@endsection




@section('back_content')



@if($process == 1 )
    {{-- ===================================end errrrorrre name============================================ --}}
    @if(Session::has('category_delete'))
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-success">
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
                            {{Session::get('category_delete')}}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    @endif
    {{-- ===================================end errrrorrre name============================================ --}}





<div class="container">
    <div class="card">
        <div class="card-header">Category</div>
            <a class="btn btn-link"><a href="{{route('add_category',['add'=>'add'])}}" class="btn btn-primary  btn-block btn-lg  " tabindex="-1" role="button" aria-disabled="true">Add category</a>
        <div class="card-body">
            <div class="row">

@foreach($categories as $category)

                    <div class="col-md-3">
                        @if( is_float($category->id/2) )
                            <div class="card bg-info">
                        @else
                            <div class="card bg-warning">
                        @endif

                            <div class="card-header">
                                <h3 style="" >
                                    {{$category->name}}
                                </h3>
                                <h6>
                                    <a href="{{route('edit_category',['process'=>'edit','id'=>$category->id])}}" ><i class="fas fa-edit text-black-50"></i></a>
                                    <a href="{{url('/delete-category',['id'=>$category->id])}}" ><i class="fas fa-trash-alt text-black-50"></i></a>
                                    <a href="#" class="link-black"> products {{count($category->products)}}</a>
                                </h6>

                            </div>
                            <div class="card-body"   style="max-height: 100px; overflow-x: hidden ; color: black">
                                {{$category->description}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                @endforeach


            </div>
        </div>
    </div>
</div>















@elseif($process === "add")


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
    @if(Session::has('category_new'))
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-success">
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
                        {{Session::get('category_new')}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
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
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('insert_category')}}" method="get">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">category name</label>
                                    <input type="text"  name="category" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">category description</label>
                                    <textarea type="" name="description"   class="form-control" id="exampleInputEmail1" placeholder="Enter category description"></textarea>
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








@elseif($process === "edit")

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
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('edit_insert_category')}}" method="get">
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">category name</label>
                            <input type="text"  name="category" value="{{$category->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">category description</label>
                            <textarea type="" name="description"   class="form-control" id="exampleInputEmail1" placeholder="Enter category description">{{$category->description}}</textarea>
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
