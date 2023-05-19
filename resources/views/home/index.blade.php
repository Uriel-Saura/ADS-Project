<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/home.css')}}">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <title>Home</title>
</head>
<body>
    @auth
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-building-house icon'></i>
            <div class="logo_name">Obras Publicas</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
          <li>
            <a href="#">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
             <span class="tooltip">Dashboard</span>
          </li>
          <li>
           <a href="#">
             <i class='bx bx-user' ></i>
             <span class="links_name">User</span>
           </a>
           <span class="tooltip">User</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-chat' ></i>
             <span class="links_name">Messages</span>
           </a>
           <span class="tooltip">Messages</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-pie-chart-alt-2' ></i>
             <span class="links_name">Analytics</span>
           </a>
           <span class="tooltip">Analytics</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-folder' ></i>
             <span class="links_name">File Manager</span>
           </a>
           <span class="tooltip">Files</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-cart-alt' ></i>
             <span class="links_name">Order</span>
           </a>
           <span class="tooltip">Order</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-heart' ></i>
             <span class="links_name">Saved</span>
           </a>
           <span class="tooltip">Saved</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-cog' ></i>
             <span class="links_name">Setting</span>
           </a>
           <span class="tooltip">Setting</span>
         </li>
         <li class="profile">
             <div class="profile-details">
               <img src="{{asset('/images/Logo.png')}}" alt="Logo">
               <div class="name_job">
                 <div class="name">{{auth()->user()->name}}</div>
                 <div class="job">Admin</div>
               </div>
             </div>
             <i class='bx bx-log-out' id="log_out" ></i>
         </li>
        </ul>
      </div>
      <section class="home-section">
        <div class="text">Dashboard</div>
    </section>
    <script src="{{asset('/js/home.js')}}"></script>
    @endauth
    @guest
    <p>Para ver el contenido <a href="/login">incia sesion </p>    
    @endguest
</body>
</html>