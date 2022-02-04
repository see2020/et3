<?php

?>
<!doctype html>
<html lang="ru">
<head>
	<!-- Обязательные метатеги -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_PATH?>/bootstrap-5.1.3/css/bootstrap.min.css" >-->
	<link href="<?php echo ASSETS_PATH?>/bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo ASSETS_PATH?><!--/css/bs.css" />-->

	<title>title</title>

    <style>
        body {
            padding-bottom: 0px;
        }

        /* верхнее меню*/
        .navbar {
            margin-bottom: 10px;
        }

        /* раздел настроек */
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .et-cfg-head{
            height: 5vh !important;
            min-height: 1.5em;
            overflow: hidden;
        }
        .et-cfg-body{
            height: 10vh;
            min-height: 1em;
            overflow: hidden;
        }

    </style>
</head>
<body>

<main>
<?php echo $headmenu; ?>
<?php echo $content; ?>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">footer</span>
    </div>
</footer>
<!-- Дополнительный JavaScript; выберите один из двух! -->
<!-- Вариант 1: Bootstrap в связке с Popper -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
<script src="<?php echo ASSETS_PATH?>/bootstrap-5.1.3/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Вариант 2: Bootstrap JS отдельно от Popper
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>