
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Elitte Guide</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css1/tooplate.css">
</head>
<body id="login">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-r">
                    <center>
                    <h3 class="mt-0 text-white font-weight-light">Forgot Password ?</h3> 
                    </center>
</div>            
    <div class="container">
        <div class="row tm-register-row tm-mb-35">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-l">
                <form action="forgotgetemail.php" method="post" class="tm-bg-black p-5 h-100">
                    <div class="input-field">
                        <input placeholder="Enter Your Email" id="email" name="email" type="email" required>
                    </div>
                        <button type="submit"name="add" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Recovery</button>
                    </div>
                </form>
            </div>

        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12 text-center">
                <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
                    Copyright &copy; 2019 Elitte Institute of Engineering and Management.All right reserved
                    
                  
                </p>
            </div>
        </footer>


    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>
