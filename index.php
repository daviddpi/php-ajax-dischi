<?php 

include_once __DIR__ . '/db/dataBase.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <title>Php ajax dischi</title>
</head>
<body>
    <div class="container">
        <div class="row gy-2">
            <div class="col-12 text-center mb-5">
                <h1>Spotify</h1>
            </div>
            <?php //var_dump($dischi);?>
            <?php foreach($dischi as $disco){?>
                <?php foreach($disco as $album){?>

                    <div class="col-4 text-center p-5">
                        <img src="<?php echo $album["poster"]?>">
                        <h2>
                            <?php echo $album["title"]; ?>
                        </h2>
                        <h3>
                            <?php echo $album["author"]; ?>
                        </h3>
                        <h5> 
                            <?php echo $album["genre"]; ?>
                        </h5>
                        <p>
                            <?php echo $album["year"]; ?>
                        </p>
                        
                    </div>
                
                <?php }; ?>
                
            
            <?php }; ?>
            
        </div>
    </div>
</body>
</html>