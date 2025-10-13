<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo ($_REQUEST["Civility"] . "." . " " . $_REQUEST["lname"] . " " . $_REQUEST["fname"])   ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo ($_REQUEST["Adress"])    ?></h6>
            <p class="card-text">
            <p><?php echo ("<strong>E-mail : </strong>" . $_REQUEST["E-mail"] . "<br>");
                echo ("<strong>Phone-Number : </strong>" . $_REQUEST["Phone-Number"] . "<br>");
                echo ("<strong>Home-Phone: </strong>" . $_REQUEST["Home-Phone"] . "<br>");
                $Skills = $_REQUEST["Skills"];
                echo ("<strong>Skills : </strong><br>");
                for ($i = 0; $i < count($Skills); $i++) {
                    echo ($Skills[$i] . "  ");
                }
                $Hobbies = $_REQUEST["Hobbies"];
                echo ("<br>");
                echo ("<strong>Hobbies : </strong><br>");
                for ($i = 0; $i < count($Hobbies); $i++) {
                    echo ($Hobbies[$i] . "  ");
                } ?></p>
            </p>
        </div>
    </div>
    <?php echo ("<strong>Your Informations</strong> :  " . $_REQUEST["Civility"] . "." . " " . $_REQUEST["lname"] . " " . $_REQUEST["fname"] . " " . "<br>");
    echo ("<strong>Your Adress : </strong>" . $_REQUEST["Adress"] . "<br>");
    echo ("<strong>E-mail : </strong>" . $_REQUEST["E-mail"] . "<br>");
    echo ("<strong>Phone-Number : </strong>" . $_REQUEST["Phone-Number"] . "<br>");
    echo ("<strong>Home-Phone: </strong>" . $_REQUEST["Home-Phone"] . "<br>");
    $Skills = $_REQUEST["Skills"];
    echo ("<strong>Skills : </strong><br>");
    for ($i = 0; $i < count($Skills); $i++) {
        echo ($Skills[$i] . "  ");
    }
    $Hobbies = $_REQUEST["Hobbies"];
    echo ("<br>");
    echo ("<strong>Hobbies : </strong><br>");
    for ($i = 0; $i < count($Hobbies); $i++) {
        echo ($Hobbies[$i] . "  ");
    }
    ?>//
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>