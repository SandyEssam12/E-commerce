<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="mb-3">Create Product</h1>
    
    <form action="{{route('product.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="" > Product Name :</label>
            <input type="text" name="name" placeholder="Product name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

            <br>

        <div class="mb-3">
            <label for="" > Product Price :</label>
            <input type="text" name="price" placeholder="product price">

            @error('product price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
            <br>

        <!-- <div class="mb-3">
            <label for="" > Product image :</label>            
            <input type="file" name="image"placeholder="image">
        </div> -->

            <br>
   
        <div class="mb-3">
            <label for="" > Category Id :</label>
            <input type="text" name="category_id"placeholder="category id">
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

            <br>

        <!-- <div class="mb-3">
                <label for="" > User Id :</label>
                <input type="text" name="user_id"placeholder="user id">
                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div> -->
        
            <br>

        <input type="submit" >

    </form>
</body>
</html>
