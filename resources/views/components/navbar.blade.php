<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">

        <li @if($paginaCorrente=="home") class="nav-item active font-weight-bold" @else class="nav-item" @endif>
          <a class="nav-link" href="/">Inicial<span class="sr-only">(current)</span></a>
        </li>

        <li @if($paginaCorrente=="produtos") class="nav-item active font-weight-bold" @else class="nav-item" @endif>
            <a class="nav-link" href="/produtos">Produtos</a>
        </li>

        <li @if($paginaCorrente=="categorias") class="nav-item active font-weight-bold" @else class="nav-item" @endif>
            <a class="nav-link" href="/categorias">Categorias</a>
        </li>

        <li @if($paginaCorrente=="clientes") class="nav-item active font-weight-bold" @else class="nav-item" @endif>
            <a class="nav-link" href="/clientes">Clientes</a>
        </li>
        
      </ul>     
    </div>
  </nav>