<?php

include"konek.php";
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
    <link rel="stylesheet" href="TAlogin.css">
</head>

<body>

    <div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <h4>Bank information APP</h4>

                    <!-- Owl-Carousel -->

                    <div class="w3-col m6  w3-hide-small">
                        <img src="img/bg6.jpg" alt="Table Setting" width="500" height="350">
                    </div>
                </div>

                <div class="col login">

                    <form action="" method="post">
                        <div class="titles">
                            <h3> Login
                                <br> Bank information APP
                            </h3>

                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-input">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="pass" class="form-input">
                            <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                        </div>
                        <br><br>
                        <button type=" submit" name="login" class="btn btn-login">Login</button><br><br>
                        <a href="TAdaftar.php" button type="submit" class="btn btn-signup">Daftar</a>
                        <a href="index.html" button type=" submit " class="btn btn-signup ">Kembali</a>

                    </form>


                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

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

<?php





if (isset($_POST['login'])) {  
	//anti inject sql
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);

	//query login
	$sql_login = "SELECT * FROM tadaftar WHERE BINARY email='$email' AND pass='$pass'";
	$query_login = mysqli_query($conn, $sql_login);
	$data_login = mysqli_fetch_array($query_login,MYSQLI_BOTH);
	$jumlah_login = mysqli_num_rows($query_login);


	if ($jumlah_login ==1 ){
		session_start();
		$_SESSION["ses_email"]=$data_login["email"];
		$_SESSION["ses_username"]=$data_login["username"];
		$_SESSION["ses_instansi"]=$data_login["instansi"];
        $_SESSION["ses_telepon"]=$data_login["no_telepon"];
        $_SESSION["ses_pass"]=$data_login["pass"];
        echo "<script> window.alert('Anda Masuk');
            window.location = 'punyaadmin.php';
        </script>";
    }else{
    echo "<script>
        window.alert('Email atau Password yang Anda Masukkan Salah!');
        window.location = 'TAlogin.php';</script>";

		}
		}