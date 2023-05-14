<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs System</title>
</head>
<body>
   
    <h2>
        <a href="">
            <?= $blog->title ?>
        </a>
    </h2>
    <div>
        <?=$blog->body?>
    </div>
    <a href="/">Go Back</a>

</body>
</html>