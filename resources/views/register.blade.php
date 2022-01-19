<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>

<body class= "d-flex flex-row">
        <div class="card d-flex align-items-center" style="background-color:rgb(17, 24, 40); width: 50%; height: 100vh;">  
          @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
          @endif
          @if(Session::has('fail'))
            <div class="alert alert-danger">
              <h6>There were error(s) with your submition</h6>
              <ul style="list-style: circle">
                <li>{{Session::get('fail')}}</li>
                <li>{{Session::get('fail1')}}</li>
              </ul>
            </div>
          @endif
            <div class="card-body text-light "style="margin: 20vh 0vh 20vh 0vh">
              
              <form enctype="multipart/form-data" action="/register" method="POST">
              @csrf
              <h2 class="card-title">Register Page</h2>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="formGroupExampleInput" style="width: 20vw ">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput2" name="email" style="width: 20vw ">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Password</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" name="password" style="width: 20vw">
              </div>
                <button class="btn btn-lg btn-primary mb-3" style="width: 20vw" type="submit">Sign Up</button>
              </form>
              <div class="text-primary d-flex justify-content-end ">
                <a href="/login" style="text-decoration: none">Already have an account?</a>
              </div>
            </div>
          </div>
          <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2014/08/08/263329_universitas-bina-nusantara_665_374.jpg" style="width: 50%" alt="ain't available">
            
          
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>