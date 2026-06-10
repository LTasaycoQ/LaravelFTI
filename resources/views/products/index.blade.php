<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <title>LARAVEL PRUEBA</title>
</head>
<body>

    <div class="container--login">
        <div class="container--img">
           
        </div>

        <div class="login--content" id="login-form">
            <h2 class="login-tittle__inicio">Sign up</h2>
            <form class="login-form_style" action="">
                <div class="input--group">
                <label class="form-label" for="user">email or username</label>
                <input id="user" class="form-control" type="text" placeholder="Name">
                </div>
                <div class="input--group">
                <label class="form-label" for="password">Password</label>
                <input id="password" class="form-control" type="password" placeholder="Password">
                </div>
                <div class="container--btn-login">
                <button type="submit" class="form-control__btn-login">Log in</button>
                </div>
            </form>

        </div>

            <script>
                document.getElementById('login-form').addEventListener('submit', function(event) {
                    event.preventDefault();
                    
                    const user = document.getElementById('user').value;
                    const password = document.getElementById('password').value;
                    
                    if(user === 'admin' && password === 'admin123') {
                        window.location.href = '/dashboard';
                    } else {
                        alert('Complete los campos');
                    }

                });
            </script>
    </div>

    <style>
        *{
            margin:0;
            padding:0;
            top:0;
            
        }
        body{
            font-family: 'Raleway', sans-serif;
        }

        .login-tittle__inicio{
            font-size: 2.7rem;
            font-weight: 600;
            color: #22384b;
            margin-bottom: 1rem;
        }

        .login-form_style{
            width: 50%;
            gap:18px;
            display: flex;
            flex-direction: column;
        }

        .form-label{
            font-size: 0.9rem;
            color: #22384b;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .container--img{
            background-image: url('https://res.cloudinary.com/dlgeap8h0/image/upload/v1781105098/iStock-2210631585_ef4mer.jpg');
            background-size: cover;
            background-position: center;
        }

        .container--login{
            width: 100%;
            display: flex;
            flex-direction: row;
            position: fixed;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .input--group{
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        .form-control{
            font-size: 0.9rem;
            height: 35px;
            padding: 0.5rem;
            border-radius: 1rem;
            outline: none;
            border: 1px solid #ccc;
        }
        .container--img{
            width: 50%;
            height: 100%;
        }

        .login--content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 50%;
        }

        .container--btn-login{

            width: 100%;
            align-items: center;
            text-align: center;
            display: flex;            justify-content: center;
        }

        .form-control__btn-login{
            background-color: #22384b;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 1rem;
            outline: none;
            width: 100%;
            border-radius: 1rem;
            height: 50px;            
        }

    </style>
</body>
</html>