<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Our Products are :
    </h1>

    @foreach ($currentProducts as $oneProduct)
        <h3>
            {{ $oneProduct->name }}
            <li>{{ $oneProduct->weight }}</li>
            <li>{{ $oneProduct->description }}</li>
        </h3>
    @endforeach
</body>
</html>