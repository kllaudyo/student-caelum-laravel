<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Minha Loja</a>
            </div>
            @if (!Auth::guest())
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Produtos<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/Produtos">Lista produtos</a></li>
                            <li><a href="/Produto">Adiciona produto</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="categoria-formulario.php">Adiciona Categoria</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="active">Bem vindo <strong>{{ Auth::user()->name }}</strong></a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Sair
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
            @endif
        </div>
    </div>
</nav>