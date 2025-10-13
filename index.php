<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Info Personel</h3>
    <form action="welcome.php" method="post" enctype="multipart/form-data">
        <label for="Civility">Civility:</label><br>
        <input type="text" id="Civility" name="Civility"><br><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="Adress">Adress:</label><br>
        <textarea name="Adress" id="Adress" placeholder="Rue..,......" style="width: 200px;height:50px"></textarea><br><br>
        <h3>Infos Do Contacts</h3><br>
        <label for="E-mail">E-mail:</label><br>
        <input type="email" name="E-mail" id="E-mail"><br><br>
        <label for="Phone-Number">Phone Number:</label><br>
        <input type="tel" name="Phone-Number" id="Phone-Number"><br><br>
        <label for="Home-Phone">Home Phone:</label><br>
        <input type="tel" name="Home-Phone" id="Home-Phone"><br><br>
        <h3>Skills</h3>
        <label for="Php">Php</label>
        <input type="checkbox" name="Skills[]" id="Php" value="Php">
        <label for="Html">Html</label>
        <input type="checkbox" name="Skills[]" id="Html" value="Html">
        <label for="Css">Css</label>
        <input type="checkbox" name="Skills[]" id="Css" value="Css">
        <label for="Sql">Sql</label>
        <input type="checkbox" name="Skills[]" id="Sql" value="Sql">
        <label for="Nosql">Nosql</label>
        <input type="checkbox" name="Skills[]" id="Nosql" value="Nosql">
        <label for="Laravel">Laravel</label>
        <input type="checkbox" name="Skills[]" id="Laravel" value="Laravel">
        <label for="Javascript">Javescript</label>
        <input type="checkbox" name="Skills[]" id="Javascrip" value="Javascript"><br><br>
        <h3>Hobbies</h3>
        <label for="Traveling">Traveling</label>
        <input type="checkbox" name="Hobbies[]" id="Traveling" value="Traveling">
        <label for="Swimming">Swimming</label>
        <input type="checkbox" name="Hobbies[]" id="Swimming" value="Swimming">
        <label for="Soccer">Soccer</label>
        <input type="checkbox" name="Hobbies[]" id="Soccer" value="Soccer">
        <label for="Basketball">Basketball</label>
        <input type="checkbox" name="Hobbies[]" id="Basketball" value="Basketball"><br><br>
        <label for="Profile">Upload Your Profile Picture</label><br>
        <input type="file" name="Profile" id="Profile"><br><br>
        <button type="submit">submit</button>
    </form>
</body>

</html>