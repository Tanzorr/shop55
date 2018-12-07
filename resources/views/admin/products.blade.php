<table>
    <tr>
        <td colspan="4" align="right">
    </tr>

    <tr>
        <th>Product Name </th>
        <th>Product Code </th>
        <th>Product Category </th>
        <th>Product Price </th>
        <th></th>
    </tr>

    @foreach($data as $product)
    <tr>
        <td>{{$product->pro_name}}</td>
        <td>{{$product->pro_code}}</td>
        <td>{{$product->cats['cat_name']}}</td>
        <td>{{$product->pro_price}}</td>
        <td><a href="/admin/editProduct/{{$product->id}}">Edit</a></td>
    </tr>
        @endforeach
</table>