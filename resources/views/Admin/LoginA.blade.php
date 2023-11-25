<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap Styles-->
     <link href="/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
     <link href="/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
     <link href="/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <!-- Custom Styles-->
     <link href="/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
    <title>Document</title>
    <style>
        body{
            width: 50%;
            margin: 50vh;

        }
        h1{
            text-align: center;
            padding: 40px 10px;
        }
    </style>
</head>
<body>
    <div class="card text-center">
        <div class="card-header">
         <h1>LOGIN</h1>
        </div>
        <div class="card-body">
            <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Username</label>
                  <input type="email" id="form2Example1" class="form-control" />
                  
                </div>
              
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                  <input type="password" id="form2Example2" class="form-control" />
                 
                </div>
              
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                      <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                  </div>
              
                  <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>
              
                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
              
                <!-- Register buttons -->
                <div class="text-center">
                  <p>Not a member? <a href="#!">Register</a></p>
                </div>
              </form>
        </div>
      </div>
   
</body>
</html>