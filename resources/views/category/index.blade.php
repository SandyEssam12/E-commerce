<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Categories</title>
</head>
<body>
    <fieldset>
        <legend>
            Categories
        </legend>
        <table>
       <thead>
        <tr>
            <th> Category Id</th>
            <th>Category Name</th>
            <th>Actions</th>
        </tr>
       </thead>
       <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>
              {{$category->id}}
            </td>
            <td>
                {{$category->name}}
              </td>
              <td>
                <form action="{{route('category.show',$category->id)}}">

                    <Button> View</Button>
                </form>
            </td>
        </tr>

        @endforeach

       </tbody>
        </table>
    </fieldset>


</body>
</html>
