<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="container">

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="input-group">

                <div class="custom-file">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-input">Choose file</label>
                </div>
            
            </div>
            {{-- <pre>
                {{ var_dump($categories) }}
            </pre> --}}
            <div class="input-group">
                <select name="Categories"> 
                    @foreach ($categories as $category)  

                        <option value="{{ $category->id }}">{{ $category->text }}</option>
    
                    @endforeach
                </select> 
            </div>

            <div class="form-group">

                <label>Titel</label>
                <input type="text" class="form-control" placeholder="Enter Title">

            </div>

            <div class="form-group">

                <label>Text</label>
                <input type="text" class="form-control" placeholder="Enter Text">

            </div>
   







    </div>


</body>
</html>