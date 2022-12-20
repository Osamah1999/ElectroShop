@extends('admin.layouts')
@section('head')
@endsection
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Create Products</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create New Products</h6>
        </div>

        <div class="card-body">
            <div class="row">
                <form action="{{ route('admin.update',$product->id) }}" method="GET" enctype="multipart/form-data">
                   @method('PUT') 
                    @csrf
                    

                    Product name: <input type="text" name="name" class="form-control" value="{{$product->name}}"> <br>
                    Product description: <input type="text" name="description" class="form-control" value="{{$product->description}}"> <br>
                    Product price: <input type="number" name="price" class="form-control" value="{{$product->price}}"> <br>
                    Product quantity: <input type="number" name="quantitiy" class="form-control" value="{{$product->quantitiy}}"> <br>
                    Product image: <input type="file" name="image" class="form-control" value= <img src="images2/{{$product->image}}" height="100" width="100"> <br>
                    <input type="hidden" type="text" name="category_id" value="{{$product->category->id}}">
                    {{-- Product Category : --}}
                    {{-- <select name="category_id" class="form-control" value="{{ $product->name }}"> --}}
                        {{-- @foreach ($product as $pro)
                            <option>{{ $pro->category->name }}</option>
                        @endforeach --}}

                       

                    </select>
                    <br>
                    <input type="submit" value="Store" class="btn btn-success">
                    <a href="{{ route('admin.update', $product) }}" class="btn btn-warning">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
