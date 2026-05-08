<!DOCTYPE html>
<html>
<head>
    <title>Login | AKADEMIK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body{
        margin:0;
        font-family:'Segoe UI', sans-serif;
        background:#f4f6f9;
    }

    .container-login{
        display:flex;
        height:100vh;
    }

    /* LEFT */
    .left{
        width:35%;
        background:linear-gradient(180deg,#0d3b66,#1d4e89);
        color:white;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        padding:40px;
    }

    .left img{
        width:200px;
        margin-bottom:20px;
    }

    .left h1{
        font-size:48px;
        letter-spacing:5px;
        margin-top:20px;
    }

    .left p{
        font-size:22px;
    }

    /* RIGHT */
    .right{
        width:65%;
        display:flex;
        justify-content:center;
        align-items:center;
        background:white;
        position:relative;
    }

    .login-box{
        width:420px;
    }

    .login-box h2{
        font-weight:bold;
        color:#0d3b66;
        margin-bottom:10px;
    }

    .login-box p{
        color:gray;
        margin-bottom:30px;
    }

    .form-control{
        height:50px;
        border-radius:8px;
    }

    .btn-login{
        background:#1d4e89;
        color:white;
        width:100%;
        height:50px;
        border:none;
        border-radius:8px;
        font-size:18px;
        transition:0.3s;
    }

    .btn-login:hover{
        background:#0d3b66;
    }

    .footer{
        position:absolute;
        bottom:20px;
        left:40px;
        color:white;
        font-size:14px;
    }

    .bg-campus{
        position:absolute;
        bottom:0;
        right:0;
        width:400px;
        opacity:0.08;
    }
    </style>
</head>

<body>

<div class="container-login">

    <!-- LEFT -->
    <div class="left">

        <img src="akademik.png">

        <h1>AKADEMIK</h1>

        <p>Sistem Informasi Akademik</p>

        <div class="footer">
            © 2026 AKADEMIK V2.
        </div>

    </div>

    <!-- RIGHT -->
    <div class="right">

        <div class="login-box">

            <h2>Selamat Datang</h2>

            <p>
                Silakan masuk untuk melanjutkan ke Sistem Informasi Akademik
            </p>

            <form method="POST" action="login_submit.php">

                <div class="mb-3">
                    <label>Username</label>

                    <input type="text"
                           name="username"
                           class="form-control"
                           required>
                </div>

                <div class="mb-4">
                    <label>Password</label>

                    <input type="password"
                           name="pass"
                           class="form-control"
                           required>
                </div>

                <button class="btn-login">
                    Log In
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>