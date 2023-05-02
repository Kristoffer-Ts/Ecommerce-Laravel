<!DOCTYPE html>
<html>
<head>
	<title>user Page</title>
</head>
<body>
	<h1>This is user Page</h1>
	<p>Welcome to the user page. This page is only accessible for user only.</p>

	<ul>
        @foreach ($products as $product)
            <li>Nama: {{ $product->nama_barang }}</li>
            <li>Harga: {{ $product->harga }}</li>
            <li>Stock: {{ $product->stock }}</li>
            <li>Description: {{ $product->description }}</li>
            <br>
        @endforeach
    </ul>

</body>
</html>