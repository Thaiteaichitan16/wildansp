<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        * {
            font-family: 'poppins', sans serif;
        }

        body {
            background: linear-gradient(120deg, #a5dee5,#ffffff);
            background-size: cover;
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }

        .bok1 {
            width: 350px;
            display: flex;
            flex-direction: column;
            padding: 0 15px 0 15px;
        }

        header {
            color: black;
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 10px 0 10px 0;
        }
        .input-button {
            display: flexbox;
            justify-content: left , right;
            padding: 0 15px 0 15px; 
            
        }

        .input {
            
            height: 45px;
            width: 100%;
            border: none;
            outline: none;
            border-radius: 10px;
            color: black;
            margin-top: 7px;
            padding: 0 0 0 50px;
            background: rgba(255, 255, 255, 0.189);
        }

        ::-webkit-input-placeholder {
            color: black;
        }

        .sumbit {
            border: none;
            border-radius: 30px;
            font-size: 15px;
            height: 45px;
            outline: none;
            width: 100px;
            background: (255, 255, 255, 0, 7);
            cursor: pointer;
            transition: .3s;
        }

        .submit:hover {
            box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
        }
        .button {
            border-radius: 5px;
            font-size: 10px;
            height: 20px;
            width: 100px;
            background: (255, 255, 255, 0, 7);
            cursor: pointer;
            transition: .3s;
        }

        .button:hover {
            box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
        }

        .bottom {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            font-size: small;
            color: #a5dee5;
            margin-top: 10px;
        }


        label a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="box1">
            <div class="top-header">
                <form action="" method="post">
                    @csrf
                    <header>Login Siswa</header>
            </div>

            <div class="input-field">
                <input type="text" class="input" placeholder="Username" name="username" required>

                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" name="password" required>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Login">
                </div>
                <div class="input-button">
                    <button class="button" value="Siswa"><a href="{{url('/admin/logsis')}}" style="color: black">siswa</a></button>
                    <button class="button" value="Petugas"><a href="{{url('/admin/logpet')}}" style="color: black">petugas</a></button>
                  </div>
                <div class="buttom">
                    <div class="left">
                        <input type="checkbox" id="check">
                        <label for="check">Remember me</label>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>