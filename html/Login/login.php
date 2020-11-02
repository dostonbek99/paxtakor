<?php

$con = mysqli_connect('localhost', 'root', '', 'paxtakor');

if (isset($_POST['submit'])) {


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

    if (empty($_POST['pass'])) {
        echo "Parolingizni kiriting!!!";
        die();
    } else {
        $Pass = $_POST['pass'];
        if (!preg_match("/^[0-9]*$/", $Pass)) {
            echo "Parolingizga faqat 0-9  bo'lgan so'zlar va belgilarni kiriting!!!";
            die();
        }
    }
};

$sql = "INSERT INTO login(email,parol) VALUES('$Email','$Pass')";

$result = mysqli_query($con, $sql);
if ($result) {
    echo "Ma'lumot bazaga saqlandi!!!";
} else {
    echo "Ma'lumot bazaga saqlanmadi!!!";
}

header('Refresh:2; url=../index.html');
?>

   