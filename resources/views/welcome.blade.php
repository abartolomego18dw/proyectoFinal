<!DOCTYPE html>
<html>
    <head>
        <title>Comanimals</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/estilo.css')}}">
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ffa408;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{asset('assets/img/logo.png')}}"width="30%"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand text-white font-weight-bold" href="#">Comanimals</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link text-white font-weight-bold" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link text-white font-weight-bold" href="#">Link</a>
                </li>
                
              </ul>
              
            </div>
          </nav>
          
          <div class="jumbotron jumbotron-fluid"style="text-align:center; background-color: #fff5d9;">
            <div class="container">
              <h1 class="display-4 text-uppercase ">Comanimals</h1>
              <p class="lead">¿Estas buscando un nuevo amigo o necesitas un lugar para dejar a tu animal? Visitanos</p>
            </div>
          </div>

          <div id="demo" class="carousel slide" data-ride="carousel">
  
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('assets/img/imagen3.jpg')}}" alt="" width="800" height="200">
                 
              </div>
              <div class="carousel-item ">
                <img src="{{asset('assets/img/imagen1.jpg')}}" alt="" width="800" height="200">
                  
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/img/imagen2.jpg')}}" alt="" width="800" height="200">
                
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

          <div class="d-flex">
            <div class="p-5 flex-fill">
              <img src="{{asset('assets/img/andoni.jpeg')}}"  class="rounded-circle" alt="" width="200" height="200"> 
              <h3>Andoni Bartolomé</h3>
              <p>Coordinador</p>
            </div>
            <div class="p-5 flex-fill">
              <img src="{{asset('assets/img/valdes.jpeg')}}"  class="rounded-circle" alt="" width="200" height="200"> 
              <h3>Jon Valdes Diaz</h3>
              <p>Asistente de direccion</p>
            </div>
            <div class="p-5 flex-fill">
              <img src="{{asset('assets/img/xabi.jpeg')}}"  class="rounded-circle" alt="" width="200" height="200"> 
              <h3>Xabier jacob Gonzalez</h3>
              <p>Tecnico especialista</p>
            </div>
            
</div>

<div class=formulario>
  <h1>CONTACTA CON NOSOTROS</h1>
  <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post" action="">
            @csrf
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email</label>
                <input class="form-control" name="email" id="email" type="email" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Comentario</label>
                <input class="form-control" type="text" name="comentario" id="comentario" rows="5" placeholder="Comentario" required="required" data-validation-required-message="Por favor, escriba un comentario.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
            </div>
          </form>
</div>


<footer class="page-footer font-small blue">

  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> comanimals.org</a>
  </div>

</footer>
      

          
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

