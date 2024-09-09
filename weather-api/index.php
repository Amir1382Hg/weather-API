<?php
   require_once "weatherApi.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <section class="container banner">
            <div class="row content">
                <div class="col-md-6 title-box">
                    <h3>Find Weather Forecast</h3>
                    <p>This site helps you get the weather of any city (:</p>
                    <form class="input-group mb-3 search-box" action="index.php" action="GET" onsubmit="showCardContainer();">
                        <input type="text" class="form-control" placeholder="Search" name="city" id = "city">
                        <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <p class="error"><?=$error?></p>
                </div>
                <div class="col-md-6 card-container">
                    <?php if(isset($data)){ ?>
                    <div class="weather-card">
                        <div class="weather-icon"><i class="bi bi-cloud-sun-fill"></i></div>
                        <div class="weather-des">
                            <h5><?= $data->name ." | ". $data->sys->country;?></h5>
                            <h4><?=$data->main->temp."°C";?></h4>
                            <span><?=$data->weather[0]->main ." | wind speed: ". $data->wind->speed;?></span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
</body>

<script>
    function showCardContainer() {
        const cardContainer = document.querySelector('.weather-card');
        cardContainer.style.display = 'flex'; 
    }
</script>


</html>

