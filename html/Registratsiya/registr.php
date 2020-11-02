<?php

$con = mysqli_connect('localhost', 'root', '', 'paxtakor');

if (isset($_POST['submit'])) {
    if (empty($_POST['familiya'])) {
        echo "Familiyangizni kiriting!!!";
        die();
    } else {
        $Familiya = $_POST['familiya'];
        if (!preg_match("/^[a-zA-Z]*$/", $Familiya)) {
            echo "Familiyangizga faqat a-z A-Z bo'lgan so'zlarni kiriting!!!";
            die();
        }
    }
    if (empty($_POST['ism'])) {
        echo "Ismingizni kiriting!!!";
        die();
    } else {
        $Ism = $_POST['ism'];
        if (!preg_match("/^[a-zA-Z]*$/", $Ism)) {
            echo "Ismingizga faqat a-z A-Z   bo'lgan so'zlar kiriting!!!";
            die();
        }
    }
    if (empty($_POST['tugulgan'])) {
        echo "Tug'ulgan sanangizni  kiriting!!!";
        die();
    } else {
        $Tugulgan = $_POST['tugulgan'];
        if (!preg_match("/^[0-9.]*$/", $Tugulgan)) {
            echo "Tugulgan sanagizga faqat 0-9 . sonlarni kiriting!!!";
            die();
        }
    }

    if (empty($_POST['email'])) {
        echo "Emailingizni kiriting!!!";
        die();
    } else {
        $Email = $_POST['email'];
        if (!preg_match("/^[a-zA-Z0-9.@]*$/", $Email)) {
            echo "Emailingizga faqat a-z A-Z . @  bo'lgan so'zlar va belgilarni kiriting!!!";
            die();
        }
    }

};

$sql = "INSERT INTO registratsiya(familya,ism,tugulgan_sana,email) VALUES('$Familiya','$Ism','$Tugulgan','$Email')";

$result = mysqli_query($con, $sql);
if ($result) {
    echo "Ma'lumot bazaga saqlandi!!!";
} else {
    echo "Ma'lumot bazaga saqlanmadi!!!";
}

header('Refresh:2; url=../index.html');
?>

   