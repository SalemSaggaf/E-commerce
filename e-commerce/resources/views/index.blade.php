<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>E-Commerce | @yield('title')</title>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
 
   <a class="navbar-brand" href="#" > اﻟﺼﻔﺤﺔ اﻟﺮﺋﻴﺴﻴﺔ</a>

     
         
         	<div class="container">
                 <form method="post" action="#"  class="form-inline" >
             
                    
                        
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-1" type="submit">Search</button>
                 </form>                
                        
            </div>

         @if(Auth::check()	)
         <div class="container">
            <div class="col-sm">
                <button class="btn btn-primary">{{Auth::user()->name}}</button>
                <a class="btn btn-primary" href="/logout">تسجيل الخروج</a>
                <a class="btn btn-primary" href="/product/create">sell item</a> 
            </div>
         </div>
          @else
            <div class="container">
                <div class="col-sm">
                    <a class="btn btn-primary" href="/login">الدخول</a>
                    <a class="btn btn-primary"  href="/register">التسجيل</a>
                </div>
            </div>
            @endif
 </nav>
 	@yield('content')
</body>
</html>