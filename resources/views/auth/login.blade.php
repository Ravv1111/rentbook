<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register </title>
    <Link rel="stylesheet" href="{{asset('assets\css\login.css')}}">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
  </head>
 <body>
  
      <div class="wrapper text-">
         <div class="title-text">
            <div class="title signup">
               Login
            </div>
            
         </div>
         <div class="form-container">
            <div class="container">
               
               <input type="radio" name="slide" id="signup">
               
               <label for="signup" class="slide signup"></label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               
               <form action="{{ route('login.auth') }}" method="POST" class="signup">
                @csrf
                  <div class="field">
                     <input type="nama" placeholder="Name" name="nama" required>
                  </div>
                  <div class="field">
                     <input type="email" placeholder="Email" name="email" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="field">
                    
                    
               
                  
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input href= "main" type="submit" value="Submit">
                     
                  </div>
               </form>
            </div>
         </div>
      </div>
      
   </body>
</html>
    
  
  
  
  
  <!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>