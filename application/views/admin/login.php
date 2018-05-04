<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
        
        .main{
         margin-top: 70px;
}

h1.title { 
        font-size: 50px;
        font-family: 'Passion One', cursive; 
        font-weight: 400; 
}

hr{
        width: 10%;
        color: #fff;
}

.form-group{
        margin-bottom: 15px;
}

label{
        margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
         background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow:0px 6px 6px 5px rgba(0, 0, 0, 0.3);

}

.main-center{
         margin-top: 20px;
         margin: 0 auto;
         max-width: 330px;
    padding: 40px 40px;

}

.login-button{
        margin-top: 5px;
}

.login-register{
        font-size: 11px;
        text-align: center;
}



  </style>
</head>
<body>

        <div class="container">
                        <div class="row main">
                                <div class="panel-heading">
                       <div class="panel-title text-center">
                                       <h1 class="title"> CWT SPORTS</h1>
                                       <hr />
                               </div>
                    </div> 
                                <div class="main-login main-center">
                                        <form class="form-horizontal" method="post" action="#">
                                                <div class="form-group">
                                                        <label for="username" class="cols-sm-2 control-label">Username</label>
                                                        <div class="cols-sm-10">
                                                                <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <label for="password" class="cols-sm-2 control-label">Password</label>
                                                        <div class="cols-sm-10">
                                                                <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                                        <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="form-group ">
                                                        <button type="button" class="btn btn-primary btn-lg btn-block login-button">Sign in</button>
                                                </div>
                                                <div class="login-register">
                                            <a href="create_account.php">Create account</a> or <a href="reset_password.php">reset password</a>
                                         </div>
                                        </form>
                                </div>
                        </div>
                </div>


</body>
</html>
