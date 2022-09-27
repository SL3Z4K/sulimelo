<?php
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $errors = "";
        if(trim($_POST['email']) == ""){
            $errors .= "Az eamil cím kitöltése kötelező!<br>";
        }else{
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $errors .= "Az email cím hibás!<br>";
            }
        }

        if(trim($_POST['password']) == "" || strlen($_POST['password'])<8 ){
            $errors .= "A jelszó üres vagy nincs meg a 8 karakter!";
        }

        if($errors == ""){
            $sql = "SELECT fid,nev,email,auth, password 
            FROM felhasznalok
            WHERE email ='".mysqli_real_escape_string($dbConn,$_POST['email'])."' LIMIT 1;";
            $res = mysqli_query($dbConn,$sql);
            $user = mysqli_fetch_array($res);
        }else{
            echo $errors;
        }
    }
?>

<form method="POST">
    <label for="email">E-mail cím: </label>
    <input type="email" name="email" id="email"><br>

    <label for="password">Jelszo: </label>
    <input type="password" name="password" id="password"><br>


    <button type="submit" name="loginBtn">Bejelentkezés</button>


</form>