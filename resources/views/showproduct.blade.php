<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table width="50%" border="1" align="center">
  <tr>
    <td align="center">Product Name</td>
    <td align="center">Product IMAGE</td>

</tr>
  <tr>
@foreach($products->all() as $item)
<td align="center">

{{$item->name}}
</td>
<td align="center">
  <img src="{{asset('images')}}/{{$item->img}}" width="70" hight="100">
</td>
</tr>
@endforeach
</table>
 
   
   
</body>
</html>