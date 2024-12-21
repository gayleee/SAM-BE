<?php include 'connect.php'; ?>

<!DOCTYPE html>
<!-- saved from url=(0064)https://www.w3schools.com/w3css/tryw3css_templates_architect.htm -->
<html lang="en" data-bs-theme="light">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Torres</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./W3.CSS Template_files/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="icon" type="image/x-icon" href="Images/logo.png">
  <script src="https://unpkg.com/scrollreveal"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap');
    html, body{
        font-family: "Carrois Gothic SC", serif;
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }
    h5, p{
        font-family: "Alegreya Sans", serif;
        color: #777;
    }
    #hero{
        background-image: url(Images/mindHeadQuarters1.png);
        background-size: cover; 
        background-position: center; 
        width: 100%;
        height: 100vh;
        display: block;
        overflow:hidden;
    }
    .blurBg{
        background: rgba( 255, 255, 255, 0.2 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 4px );
        -webkit-backdrop-filter: blur( 4px );
        border-radius: 8px;
        padding: 24px;
        border: 1px solid rgba( 255, 255, 255, 0.18 );
    }
    .card img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .navbar .nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    @media (max-width: 575px){
        .content{
            text-align: center;
        }
        .navbar .nav{
            flex-direction: column;
            justify-content: center;
        }
        .navbar-brand .form-check{
            text-align: center;
        }
        @media (max-width: 190px){
            #brand{
                display: none;
            }
        }
    }
  </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top bg-body-tertiary">
        <div class="container-fluid nav">
            <a class="navbar-brand align-items-center" href="#" id="brand">
                <img src="Images/logo.png" alt="logo" style="width:48px; height:48px;">
                <strong>Inside Out PHP</strong>
            </a>
            <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="themeToggle">
            <label class="form-check-label" for="themeToggle">
                <i class="bi bi-sun" id="themeIcon"></i>
            </label>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center vh-100">
                    <div class="blurBg">
                        <h1 class="text-light text-center"><strong>Inside Out Themed website</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <div class="w3-container w3-padding-32 m-5 d-flex flex-column justify-content-center align-items-center text-center" id="about">
        <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16"><strong>Islands</strong></h1>
        <h5 class="text-secondary">Interests and loved ones</h5>
        <p class="mt-3">The Islands of Personality represent the unique aspects of who I am, each powered by core memories—cherished moments 
        that have profoundly shaped my identity. These core memories capture pivotal experiences, filled with joy, sadness, 
        excitement, and growth, serving as the foundation for the traits, values, and passions that define me. Each island tells 
        a story, reflecting the milestones and meaningful connections that have left a lasting impact on my journey through life.
        </p>
    </div>

    <!-- Gallery Section -->
    <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 1";
        $islandResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($islandResult)) {
    ?>

    <div class="w3-row-padding w3-grayscale m-5 content">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="row">
                <h1><strong><?php echo $row ['name']?></strong></h1>
                <h5 class="text-secondary mb-3"><?php echo $row ['shortDescription']?></h5>
                <p class="mb-3"><?php echo $row ['longDescription']?></p>

            <?php
                $getImgQuery = "SELECT * FROM `islandContents` WHERE `islandOfPersonalityID` = ".$row['islandOfPersonalityID'];
                $imgResult = executeQuery($getImgQuery);

                while ($row = mysqli_fetch_array($imgResult)) {
            ?>

                <div class="col-lg-3 col-md-12 mb-3">
                    <div class="card h-100" style="flex-grow:1;">
                        <img src="<?php echo $row ['image']?>" alt="John">
                    </div>
                </div>

            <?php 
            }
            ?>
    </div>

    <?php 
    }
    ?>

    <?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 2";
        $islandResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($islandResult)) {
    ?>

    <div class="w3-row-padding w3-grayscale my-5 content">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="row">
                <h1><strong><?php echo $row ['name']?></strong></h1>
                <h5 class="text-secondary mb-3"><?php echo $row ['shortDescription']?></h5>
                <p class="mb-3"><?php echo $row ['longDescription']?></p>

            <?php
                $getImgQuery = "SELECT * FROM `islandContents` WHERE `islandOfPersonalityID` = ".$row['islandOfPersonalityID'];
                $imgResult = executeQuery($getImgQuery);

                while ($row = mysqli_fetch_array($imgResult)) {
            ?>

                <div class="col-lg-3 col-md-12 mb-3">
                    <div class="card h-100" style="flex-grow:1;">
                        <img src="<?php echo $row ['image']?>" alt="John">
                    </div>
                </div>

            <?php 
            }
            ?>
    </div>

    <?php 
    }
    ?>

<?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 3";
        $islandResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($islandResult)) {
    ?>

    <div class="w3-row-padding w3-grayscale my-5 content">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="row">
                <h1><strong><?php echo $row ['name']?></strong></h1>
                <h5 class="text-secondary mb-3"><?php echo $row ['shortDescription']?></h5>
                <p class="mb-3"><?php echo $row ['longDescription']?></p>

            <?php
                $getImgQuery = "SELECT * FROM `islandContents` WHERE `islandOfPersonalityID` = ".$row['islandOfPersonalityID'];
                $imgResult = executeQuery($getImgQuery);

                while ($row = mysqli_fetch_array($imgResult)) {
            ?>

                <div class="col-lg-3 col-md-12 mb-3">
                    <div class="card h-100" style="flex-grow:1;">
                        <img src="<?php echo $row ['image']?>" alt="John">
                    </div>
                </div>

            <?php 
            }
            ?>
    </div>

    <?php 
    }
    ?>

<?php
        $getQuery = "SELECT * FROM `islandsOfPersonality` WHERE islandOfPersonalityID = 4";
        $islandResult = executeQuery($getQuery);

        while ($row = mysqli_fetch_array($islandResult)) {
    ?>

    <div class="w3-row-padding w3-grayscale my-5 content">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="row">
                <h1><strong><?php echo $row ['name']?></strong></h1>
                <h5 class="text-secondary mb-3"><?php echo $row ['shortDescription']?></h5>
                <p class="mb-3"><?php echo $row ['longDescription']?></p>

            <?php
                $getImgQuery = "SELECT * FROM `islandContents` WHERE `islandOfPersonalityID` = ".$row['islandOfPersonalityID'];
                $imgResult = executeQuery($getImgQuery);

                while ($row = mysqli_fetch_array($imgResult)) {
            ?>

                <div class="col-lg-3 col-md-12 mb-3">
                    <div class="card h-100" style="flex-grow:1;">
                        <img src="<?php echo $row ['image']?>" alt="John">
                    </div>
                </div>

            <?php 
            }
            ?>
    </div>

    <?php 
    }
    ?>

    <!-- Footer -->
    <!-- <footer class="text-center" style="background-color: #0d0d0d; padding: 24px;">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    </footer> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
        ScrollReveal().reveal('.card', { delay: 500 });

        var themeIcon = document.getElementById("themeIcon");
        var bgImage = document.getElementById("hero");

        var theme = document.getElementById("themeToggle").addEventListener('click', () =>{
            if (document.documentElement.getAttribute('data-bs-theme') == 'light'){
            document.documentElement.setAttribute('data-bs-theme', 'dark')
            bgImage.style.backgroundImage="url('Images/mindHeadQuarters_night.png')";
            themeIcon.className = "bi bi-moon";
        } else{
            document.documentElement.setAttribute('data-bs-theme', 'light')
            bgImage.style.backgroundImage="url('Images/mindHeadQuarters1.png')";
            themeIcon.className = "bi bi-sun";
        }
        });
  </script>

</body>
</html>