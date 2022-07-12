<?php
    function temp() {
        $temp = floor(rand(0,30)) - 5;
        if ($temp < 6) {
            $src="https://cdn.pixabay.com/photo/2017/02/15/11/15/wintry-2068298__340.jpg";
            echo "<br> ${temp}c <br> The weather is very cold";
            echo "<img src='$src' alt=''>";
        } else if ($temp < 11) {
            $src="https://media.istockphoto.com/photos/hanami-cherry-blossom-street-at-night-petals-falling-in-the-ground-picture-id1388979395?b=1&k=20&m=1388979395&s=170667a&w=0&h=hU2iL3ngd8SbgVyCUVudCvJ8ZzV9OKdXldzr40MecB0=";
            echo "<br> ${temp}c <br> The weather is cold";
            echo "<img src='$src' alt=''>";
        }else if ($temp < 16) {
            $src="https://cdn.pixabay.com/photo/2014/12/04/14/46/magnolia-trees-556718__340.jpg";
            echo "<br> ${temp}c <br> The weather is pleasant";
            echo "<img src='$src' alt=''>";
        }else if ($temp < 20) {
            $src="https://media.istockphoto.com/photos/beautiful-meadow-field-with-fresh-grass-and-yellow-dandelion-flowers-picture-id1301592082?b=1&k=20&m=1301592082&s=170667a&w=0&h=i3f9oPDdUoEQ9FE-vD2VQyQ9T-v2ODr-VIKrGDu3Tfw=";
            echo "<br> ${temp}c <br> The weather is warm";
            echo "<img src='$src' alt=''>";
        }
        else {
            $src="https://media.istockphoto.com/photos/dirt-road-perspective-viewchile-picture-id1367720437?b=1&k=20&m=1367720437&s=170667a&w=0&h=95a0S1H2lMVQJ5Bq6tK2rIPGuMLwAw3WL4jGSf-t9qE=";
            echo "<br> ${temp}c <br> The weather is hot";
            echo "<img src='$src' alt=''>";
            
        }
        return [$src, $temp];
    }
    $result = temp();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<div class="card" style="width: 18rem;">
               <img src="<?php echo $result[0] ?>" class="card-img-top" alt="...">
               <div class="card-body">
                <h5 class="card-title"><?php echo $result[1]."c" ?></h5>
                </div>
            </div>
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>