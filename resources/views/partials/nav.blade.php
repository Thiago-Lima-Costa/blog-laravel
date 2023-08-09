<div class="container">

    <div class="navbar-header">
         <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon icon-bar"></span>
              <span class="icon icon-bar"></span>
              <span class="icon icon-bar"></span>
         </button>
         <a href="index.html" class="navbar-brand">Meu Blog</a>
    </div>
    <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('posts') }}">Postagens</a></li>
              <li><a href="gallery.html">Galeria</a></li>
              <li><a href="about.html">Sobre Mim</a></li>
              <li><a href="contact.html">Contato</a></li>
               
               @if (auth()->guest())
                    <li><a href="{{ route('login') }}">Entrar</a></li>
               @else
                    <li><p>Olá {{ auth()->user()->firstName }}</p></li>
                    <li><a href="{{ route('logout') }}"> | Sair</a></li>
               @endif

         </ul>
    </div>

</div>