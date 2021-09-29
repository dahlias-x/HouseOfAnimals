<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
     <ul>
        @foreach ($articles as $article)  
        <li>
            <b>{{$article->title}}</b>
            <h4>{{$article->text}}</h4><br>
            <h5>More Information:</h5>
            <h5>{{$article->likes}}</h5>
            <h3>{{$article->pictures}} - created by {{$article->user_id}}</h3>   
            <hr><br>
        </li>
        @endforeach
    </ul>
   


</body>
</html>