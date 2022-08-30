<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    <script src></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Mi primer CRUD</title>
</head>
<body>
  <h1 class="titulo">Ingreso de Post</h1>
   <br>
   <br>




    
   <form class="form" action="{{route('post.store')}}" method="post">
    @csrf

    @if(session('status'))
        <div class="alert alert-success">
          {{session('status')}}

        </div>

    @endif


    <label for="">Titulo</label>
    <input type="text" name="title"> <br><br>
    @error('title')
    <small class="text-danger">{{$message}}</small>
    @enderror

    <label for="">Url Corta</label>
    <input type="text" name="slug"> <br><br>
    @error('slug')
    <small class="text-danger">{{$message}}</small>
    @enderror

    <label for="">Contenido</label>
    <textarea name="content" ></textarea> <br><br>
    @error('content')
    <small class="text-danger">{{$message}}</small>
    @enderror

    <label for="">Descripcion</label>
    <textarea name="description" ></textarea> <br><br>
    
    
    
    
    <button type="submit" class="btn btn-green">
    Enviar
    </button>

   </form>
   <footer>
    <h1 class="titulo"> Derechos Reservados Erwin Lack 2022</h1>
   </footer>
</body>
</html>