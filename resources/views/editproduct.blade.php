<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Create Product | Product Store</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>

<body>
    <div class="links">
        <a href="{{ config('app.url')}}">Home</a>
    </div>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form action="{{ url('products/'.$product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <h1> Enter New Details of a product</h1>
                <div class="form-input">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-input">
                    <label>Description</label>
                    <input type="text" name="description" value="{{ $product->description }}">
                </div>
                <div class="form-input">
                    <label>Count</label>
                    <input type="number" name="count" value="{{ $product->count }}">
                </div>
                <div class="form-input">
                    <label>Price</label>
                    <input type="number" name="price" value="{{ $product->price }}">
                </div>
                <div>
                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>