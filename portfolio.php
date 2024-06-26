<!--
███╗░░░███╗██╗██╗░░░░░░█████╗░███╗░░██╗░█████╗░░██████╗░██████╗
████╗░████║██║██║░░░░░██╔══██╗████╗░██║██╔══██╗██╔════╝██╔════╝
██╔████╔██║██║██║░░░░░███████║██╔██╗██║██║░░██║╚█████╗░╚█████╗░
██║╚██╔╝██║██║██║░░░░░██╔══██║██║╚████║██║░░██║░╚═══██╗░╚═══██╗
██║░╚═╝░██║██║███████╗██║░░██║██║░╚███║╚█████╔╝██████╔╝██████╔╝
╚═╝░░░░░╚═╝╚═╝╚══════╝╚═╝░░╚═╝╚═╝░░╚══╝░╚════╝░╚═════╝░╚═════╝░
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titel-->
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="content/favicon_milan.png">

    <!--Link met CSS-->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/reviews.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--Link met JS-->
    <script src="scripts/review.js" defer></script>
<body>
    <!--De navbar include-->
    <?php include("includes/navbar.php") ?>
    
    <!--Portfolio info-->
    <div class="portinfo">
        <img src="content/portinfo_logo.png" alt="">
        <h1>Mijn portfolio</h1>
        <div class="blokkies">
            <div class="gempro">
                <img src="content/vinkie.png" alt="">
                <p>1+ Gemaakte projecten</p>
            </div>
            <div class="erv">
                <img src="content/ervaring_logo.png" alt="">
                <p>10+ Maanden ervaring</p>
            </div>
        </div>
    </div>

    <div class="projecten1">
        <h1>Projecten gemaakt in 2024</h1>
        <hr class="lijntje3">
        <?php include("includes/projecten2024.php") ?>
    </div>

    <!--De footer include-->
    <?php include("includes/footer.php") ?>
</body>
</html>