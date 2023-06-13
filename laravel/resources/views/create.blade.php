<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

        <form action="addbook" method="post"> 
            @csrf
            <input type="text" name="title" placeholder="title">
            <input type="text" name="price" placeholder="price">
            <input type="text" name="author" placeholder="author">
            <textarea name="description" cols="30" rows="10"> description</textarea>
            <input type="submit" name="submit" value="save">

        </form>

   </div>   
</body>
</html>