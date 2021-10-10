<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
    <div class="row">
<div class="col-md-6">
<div class="alert alert-primary">It works</div>
<img src="{{asset('hh.png')}}">
</div>

    </div>
    </div>
    <div class="container">
    <div class="row">
<div class="col-md-12">
<form action="/createproduct" method="POST" enctype="multipart/form-data">
<div class="col-md-12">
<div class="alert alert-danger">
<!--to show errors of empty data-->
<ul>
@foreach($errors->all() as $error)
<li>
{{$error}}
</li>
@endforeach
</ul>
</div>  
</div>
<!--to add post in leraleval i must add this-->
{{csrf_field()}}
Product Name:
<input type="text" name="p_name" id="">
Product Price:
<input type="text" name="p_price" id="">

Product IMAGE:
<input type="file" name="myimage" id="">
<input type="submit" value="Create Product">
</form>
    </div>
    </div>
</body>
</html>