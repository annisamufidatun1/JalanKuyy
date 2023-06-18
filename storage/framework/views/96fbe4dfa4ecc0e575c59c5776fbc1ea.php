<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        
        <style>
        </style>
        <title>Jalan Kuy</title>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap');
        body{
            background-image: url(https://anima-uploads.s3.amazonaws.com/projects/646ef81c13d928b5889b2011/releases/646ef9cd3b467f42f9c2d46e/img/20008474-6230278-3.png);
            background-position: 50% 50%;
            background-size: cover;
            height: 1117px;
            position: relative;
            width: 1728px;
        }
        #backgroudform{
            position: absolute;
            width: 1016px;
            left: 300px;
            /* top: 160px; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #FFFFFF;
            border-radius: 50px;
        }
        .title{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 60px;
            line-height: 90px;
            display: flex;
            align-items: center;
            text-align: center;
            color: #333333;
        }
        .label{
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 25px;
        }
        .form-control{
            border: 1px solid #666666;
            border-radius: 12px;
            height: 56px;
        }
        .tombol{
            position: absolute;
            width: 648px;
            height: 76px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 22px;
            line-height: 33px;
            text-align: center;
            color: #FFFFFF;
            background: #FD7B46;
            border-radius: 40px;
            border: none;
            outline: none;
        }
        .under-text{
            font-family: 'Poppins';
            font-style: normal;
            font-size: 14px;
            display: flex;
            align-items: center;
            color: #666666;
        }
        .desc{
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 18px;
            display: flex;
            align-items: center;
            color: #666666;
            flex: none;
            order: 2;
            flex-grow: 0;
        }
        ::placeholder{
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
            color: rgba(102, 102, 102, 0.6);
        }
        #under-text{
            font-family: 'Poppins';
            font-style: normal;
            font-size: 16px;
            line-height: 30px;
            color: #666666;
            text-align:center;
            margin-top: 100px;
        }
        #up-text{
            font-family: 'Poppins';
            font-style: normal;
            font-size: 16px;
            line-height: 30px;
            color: #666666;
            text-align:center;
            margin-top: 20px;
        }
        #link{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            text-decoration-line: underline;
            color: #666666;
        }
        #icon-password{
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            text-align: right;
            color: rgba(102, 102, 102, 0.8);
        }
        .formlogin{
            margin-left:184px;
            margin-right:184px;
            margin-top:30px;
        }
        </style>

    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div id="backgroudform">
            <?php echo e($slot); ?>

        </div>
        
        </div>
    </body>
</html>


<?php /**PATH C:\xampp\htdocs\dbjalankuy\resources\views/layouts/guest.blade.php ENDPATH**/ ?>