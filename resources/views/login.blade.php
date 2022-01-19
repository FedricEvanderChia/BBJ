<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class= "d-flex flex-row" >

  <div class="card d-flex align-items-center" style="background-color:rgb(17, 24, 40); width: 50%; height: 100vh;">
    <div class="card-body text-light" style="margin: 25vh 0vh 25vh 0vh">
      

      <form action="/auth" method="POST">
        @csrf
        <h2 class="card-title">Login Page</h2>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="formGroupExampleInput" style="width: 20vw ">
      </div>
      
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password</label>
        <input type="password" class="form-control" id="formGroupExampleInput2" name="password" style="width: 20vw">            
      </div>       

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" name="remember_me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary" style="width: 20vw" type="submit">Sign In</button>
      </form>
      <div class="text-primary d-flex justify-content-end mt-3">
        <a href="/register" style="text-decoration: none">Don't have an account?</a>
      </div>

              
    </div>
  </div>
    <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2014/08/08/263329_universitas-bina-nusantara_665_374.jpg" style="width: 50%" alt="ain't available">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>