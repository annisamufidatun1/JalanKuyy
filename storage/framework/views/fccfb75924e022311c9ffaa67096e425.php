<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error 404</title>
       <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    
    
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap');

    body{
        background: #ECEADD;
    }
    .konten{
        display: flex; justify-content: center; align-items: center; text-align: center;
        flex-direction: column;
        margin-top: 40px;
    }
    #satu{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 40px;
        color: #143362;
    }
    #dua{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 70px;
        color: #FD7B46;

    }
    #tiga{
        font-family: 'Lexend';
        font-style: normal;
        font-weight: 400;
        font-size: 25px;
        text-transform: lowercase;
        color: #666666;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-2">
                <a href="/dashboard" id="back" class="button">
            <iconify-icon icon="ion:arrow-back-circle" style="font-size: 60px; color: rgba(20, 51, 98, 0.7);; vertical-align:0px;"></iconify-icon>
            </a>
            </div>
            <div class="col-lg-10">
            </div>
        </div>
        <div class="row konten">

            <p id="satu"> EROR </p>
            <p id="dua"> <?php echo $__env->yieldContent('code'); ?> </p>
            <p id="satu"> <?php echo $__env->yieldContent('message'); ?></p>
            <p id="tiga">The page your are looking for doesn’t exist or some other error occured, go back to dashboard page</p>
        </div>
    </div>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\dbjalankuy\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions/views/minimal.blade.php ENDPATH**/ ?>