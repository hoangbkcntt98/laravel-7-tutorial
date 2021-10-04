<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Links</title>
</head>
<body>
    <h1>This is all links:</h1>
    <div class="container">
        <div class="content">
            <div class="flex-center">
        
                @foreach ($links as $link)
                    <div><a href={{$link->url}}>{{$link->title}}</a></div>
                @endforeach
            </div>
        </div>
    </div>
    <button><a href="/links/create">Create a Link</a></button>

</body>
</html>