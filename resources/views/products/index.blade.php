<!DOCTYPE html>
<html>
<head>
 <title>Products</title>
</head>
<body>
<div>
 @inject('productPresenter', 'MyBlog\Presenters\MoneyFormatInterface')
 @foreach($products as $product)
  <div>
   <h2>{{ $product->name  }}</h2>
   <h2>{{ $productPresenter->showMoney($product->price) }}</h2>
   <h2>{{ $product->stock }}</h2>
  </div>
  <hr>
 @endforeach
</div>
</body>
</html>