
<html>
<head>
   @include('layout.admin.header')
   @auth
            <!-- Show user information -->
            
       
        @endauth
</head>  
 
    <body>
<div class="container register">
 
          <div class="row">
            <div class="col-md-3 register-left">
             <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
        </div>

        <div class="col-md-9 register-right">
        
    
    @yield('content')
  
        
        </div>
        
        
        </div>
        <footer class="row">
       @include('layout.admin.footer')
       @yield('script')
   </footer>
</div>
</body>
</html>












