@extends('admin.layouts')
@section('head')

@endsection
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Create Products</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create New Products</h6>
        </div>

        <div class="card-body">
            <div class="row">
            <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                Product name: <input type="text" name="name" class="form-control"> <br>
                Product description: <input type="text" name="description" class="form-control"> <br>
                Product price: <input type="number" name="price" class="form-control"> <br>
                Product quantity: <input type="number" name="quantitiy" class="form-control"> <br>
                Product image: <input type="file" name="image" class="form-control"> <br>
                Product Category :
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <br>
                <input type="submit" value="Store" class="btn btn-success">
                <a href="{{route('admin.index')}}" class="btn btn-warning">Cancel</a>
            </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection