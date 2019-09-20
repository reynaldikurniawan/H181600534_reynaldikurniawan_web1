

<table style="border">
  <tr>
    <th>fieldname</th>
    <th>type</th>
    <th>size</th>
    <th>description</th>
  </tr>
  @foreach($kategori as $kategori)
  <tr>
    <td>{{$kategori->fielname}}</td>
    <td>{{$kategori->type}}</td>
    <td>{{$kategori->size}}</td>
    <td>{{$kategori->description}}</td>

  </tr>
  <tr>
 
    <td>{{$kategori->fielname}}</td>
    <td>{{$kategori->type}}</td>
    <td>{{$kategori->size}}</td>
    <td>{{$kategori->description}}</td>

  </tr>
  @endforeach
</table> 

