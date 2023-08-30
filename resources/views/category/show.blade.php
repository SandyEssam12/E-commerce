<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Document</title>
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

        </tr>
       </thead>
       <tbody>
        <tr>
            <td>
              {{$category->id}}
            </td>
            <td>
                {{$category->name}}
              </td>

        </tr>

       </tbody>
        </table>
    </fieldset>
