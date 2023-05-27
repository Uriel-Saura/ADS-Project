<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/catalogo.css')}}">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <title>Catalogo</title>
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
          <a href="{{url('home/')}}">
              <i class='bx bx-home' ></i>
            <span class="links_name">Home</span>
          </a>
           <span class="tooltip">Home</span>
        </li>
        <li>
          <a href="{{url('catalogo/')}}">
            <i class='bx bxs-book-content'></i>
            <span class="links_name">Catalogo</span>
          </a>
          <span class="tooltip">Catalogo</span>
        </li>
       <li>
         <a href="#">
          <i class='bx bxs-circle'></i>
           <span class="links_name"></span>
         </a>
         <span class="tooltip"></span>
       </li>
       <li>
         <a href="#">
          <i class='bx bxs-circle'></i>
           <span class="links_name"></span>
         </a>
         <span class="tooltip"></span>
       </li>
       <li>
         <a href="#">
          <i class='bx bxs-circle'></i>
           <span class="links_name"></span>
         </a>
         <span class="tooltip"></span>
       </li>
       <li>
         <a href="#">
          <i class='bx bxs-circle'></i>
           <span class="links_name"></span>
         </a>
         <span class="tooltip"></span>
       </li>
       <li>
        <a href="#">
         <i class='bx bxs-circle'></i>
          <span class="links_name"></span>
        </a>
        <span class="tooltip"></span>
      </li>
       </li>
       <li>
         <a href="#">
          <i class='bx bxs-circle'></i>
           <span class="links_name"></span>
         </a>
         <span class="tooltip"></span>
       </li>
       <li class="profile">
           <div class="profile-details">
             <img src="{{asset('/images/Logo.png')}}" alt="Logo">
             <div class="name_job">
               <div class="name">{{auth()->user()->name}}</div>
               <div class="job">Admin</div>
             </div>
           </div>
           <a href="/logout">
            <i class='bx bx-log-out' id="log_out"></i>
            <span class="links_name">Log Out</span>
          </a>
       </li>
      </ul>
    </div>
      <section class="home-section">
        <div class="text">Catalogo de Conceptos</div>
        <div class="catalogo">
            <button class="new"><a href="{{url('catalogo/create')}}">Nuevo Regristro</a></button>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Clave</th>
                        <th>Tipo</th>
                        <th>Area</th>
                        <th>Caracteristicas</th>
                        <th>Costo por m2</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catalogo as $catalogo)
                    <tr>
                        <td>{{$catalogo->id}}</td>
                        <td>{{$catalogo->Clave}}</td>
                        <td>{{$catalogo->Tipo}}</td>
                        <td>{{$catalogo->Area}}m2</td>
                        <td>{{$catalogo->Caracteristicas}}</td>
                        <td>${{$catalogo->Costo}}</td>
                        <td><a href="{{url('catalogo/'.$catalogo->id.'/edit')}}">Editar</a></td>
                        <td>
                            <form action="{{url('catalogo/'.$catalogo->id)}}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script src="{{asset('/js/home.js')}}"></script>
    @endauth
    @guest
    <p>Para ver el contenido <a href="/login">incia sesion </p>    
    @endguest
</body>
</html>