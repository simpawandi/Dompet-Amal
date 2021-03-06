<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
            <style>
            body{
                background-image: url("gambar.jpg");
            }
                a{
                text-decoration:none;
            }
            label{
                font-family:"Raleway", 'Lucida Sans';
                font-size: 12pt;
            }
            #forgot-pass{
                color: #45b6eb;
                font-family: "Raleway", sans-serif;
                font-size: 11pt;
                margin-top: 3px;
                text-align:right;
            }
            .form{
                align-items: right;
                display: flex;
                flex-direction: column;
            }
            .form-border{
                background: -webkit-linear-gradient(right,#298ce9, #aacfe0);
                height: 2px;
                width: 100%;
            }
            .form-content{
                background:#fbfbfb;
                border: none;
                outline:none;
                padding-top: 14 px;
            }
            #card {
                background: #fbfbfb;
                border-radius: 8px;
                box-shadow: 1px 2px 8px(0,0,243) ;
                height: 410px;
                margin: 6rem auto 8.1rem auto;
                width: 329px;
            }
            #card-content{
                padding: 12px 44px;
            }
            #card-tittle{
                font-family:"cambira",cochin;
                letter-spacing:4px;
                padding-bottom: 23px;
                padding-top: 13px;
                text-align;right;
            }
            .underline-tittle{
                background: -webkit-linear-gradient(right,#2aa7f0,#a0d1ee);
                height:2px;
                width:89px;
                margin:0.1rem auto 0 auto;
            }
            #signup{
                color: #2aa7f0;
                font-family:"Raleway", sans-serif;
                margin-top: 16px;
                font-size: 10pt;
                text-align: center;
            }
            #submit-btn{
                background: -webkit-linear-gradient(right, #2aa7f0, #2dbd6e);
                border: none;
                border-radius: 30px;
                height: 35px;
                width: 150px;
                margin: 0 auto;
                margin-top: 30px;
                transition: 0.25s;
                text-align: center;
            }
                </style>
            <body>
                <div id="card">
                <div id="card-content">
                    <div id="card-tittle">
                    <center>
                    <h2>LOGIN</h2>
                    <div class="underline-tittle"></div>
                    <h4>Masukan Username & Password</h4>
                    </center>
                    </div>
                    <form action="cek_login.php" method="POST" class="form">
                        <label for="Username" style="padding-top: 13px">&nbsp;Username</label>
                        <input
                        class="form-content"
                        type="text" name="username" placeholder="Masukkan username"/>
                        <div class="form-border"></div>

                        <label for="user-password" style="padding-top: 13px">&nbsp;Password</label>
                        <input
                        class="form-content"
                        type="password"
                        name="password"
                        />
                        <div class="form-border"></div>
                    <input id="submit-btn" type="submit"  value="LOGIN"/>
                </form>
                </div>
            </div>
        </body>
    </head>
</html>