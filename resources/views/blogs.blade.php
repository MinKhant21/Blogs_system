<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs System</title>
</head>
<body>
   
   <?php foreach ($blogs as $blog) : ?>
        <h3>
            <a href="{{ url('/blogs/'.$blog->slug) }}">
                <?= $blog->title?> 
            </a>
        </h3>
        <div>
            <?= $blog->intro?>
        </div>
        
   <?php endforeach; ?>

</body>
</html>