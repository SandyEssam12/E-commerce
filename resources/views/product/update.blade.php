<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="mb-3">Update Product</h1>
    
    <br>
    <form action="{{route('product.edit',$product->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="" > Product Name :</label>
            <input type="text" name="name" value="{{$product->name}}">
        </div>
        <br>
        <div>
            <label for="" > Product Price :</label>
            <input type="text" name="price" value="{{$product->price}}">
        </div>
        
        <br>
        <div>
            <label for="" > Category Id :</label>
            <input type="text" name="category_id" value="{{$product->category_id}}">
        </div>
        <input type="submit" >

    </form>
</body>
</html>
