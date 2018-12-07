<table>
    <tr>
        <td colspan="4" align="right"><b>Total:</b>{{App\Cats::count()}}</td>
    </tr>
    <tr>
        <th>Category Name </th>

        <th>Update</th>
    </tr>
    @foreach($data as $product)
        <tr>
            <td>{{$product->cat_name}}</td>

            <td><a href="/admin/editProduct/{{$product->id}}">Edit</a></td>
        </tr>
    @endforeach
</table>