<?php

$conn = mysqli_connect('localhost', 'root', '', 'tadaftar');

if (isset($_POST["uji"])){
   
        global $conn;
    
        $email =htmlspecialchars( $_POST["email"]);
        $username =htmlspecialchars( $_POST["username"]);
        $instansi =htmlspecialchars( $_POST["instansi"]);
        $noTelepon = htmlspecialchars($_POST["noTelepon"]);
        $password = htmlspecialchars($_POST["password"]);
    
        $query = "INSERT INTO tadaftar VALUES ('$email', '$username', '$instansi', '$noTelepon', '$password') ";
        mysqli_query($conn, $query);
        header('location: berhasill.html');
        return mysqli_affected_rows($conn);
    
}
	
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bank Information APP</title>


    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <!-- Custom Style-->
    <link rel="stylesheet" href="TAdaftar.css">
</head>

<body>

    <div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <h4>Bank information APP</h4>

                    <!-- Owl-Carousel -->

                    <div class="w3-col m6  w3-hide-small">
                        <img src="img/bg1.jpg" alt="Table Setting" width="500" height="350">
                    </div>
                </div>

                <div class="col login">

                    <form action="" method="post">
                        <div class="titles">
                            <h3> DAFTAR
                                <br> Bank information APP
                            </h3>

                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-input" name="email" required="">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Username" class="form-input" name="username" required="">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Instansi" class="form-input" name="instansi" require="">

                        </div>

                        <div class="form-group">
                            <input type="fa-instagram" placeholder="No. Telepon" class="form-input" name="noTelepon"
                                required="">

                        </div>

                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-input" name="password"
                                required="">
                            <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                        </div>

                        <button type=" submit " name="uji" class="btn btn-login ">Daftar</button>
                        <label><a class="link" href="punyaadmin.php"></a></label>
                        <div>
                            <span class="pull-ringht">
                                <a href="#" onclick="alert('silakan diingat kembali, kami tidak bisa bantu')">lupa
                                    password?</a>
                                <a href="TAlogin.php" button type="submit" class="btn btn-signup">
                                    Login</a>
                            </span>
                        </div>

                    </form>


                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin=" anonymous "></script>

    <script>
    $(document).ready(function() {

        $('.owl-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            items: 1
        });
    });
    </script>
</body>

</html>