@extends('Layout.app')
@section('content')
<div class="container">
    <h1>Add Product</h1>
    <form action="{{ route('product.add' )}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
        </div>
        <div class="form-group">
            <label for="link">Link :</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Enter Link">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" rows="4" name="description"
                placeholder="Enter product description"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name='img' class="form-control-file" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>

<footer class="footer_section">
    <div class="container">
        <p>
            All Products
        </p>
    </div>
</footer>
<div class="container">
    <h1>Product Management</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Image</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productData as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td><img src="{{asset('uploads/product/'.$product->image)}}" alt="Product Img" width="50px"
                        height="50px" /></td>
                <td><a href="#">{{$product->link}}</a></td>
                <td>
                    <a class="" href="#">Edit</a> ||
                    <a class="" href="#">Delete</a>

                </td>

            </tr>
            @endforeach

            <!-- Add more rows for other products -->
        </tbody>
    </table>
</div>







@endsection