<!--<a href="?controle=pessoa&acao=listar">-->
<!--    Listar-->
<!--</a>-->
<!--<a href="?controle=pessoa&acao=editar">-->
<!--    Editar-->
<!--</a>-->
<!--<a href="?controle=pessoa&acao=deletar">-->
<!--    Deletar-->
<!--</a>-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ConsultórioWeb</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""    ><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agendamentos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?controle=Agendamento&acao=cadastrar">Cadastrar</a></li>
                        <li><a href="?controle=Agendamento&acao=listar">Ver Agendamentos</a></li>
                        <li><a href="?controle=Agendamento&acao=buscar">Procurar Agendamento</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pacientes <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?controle=Paciente&acao=cadastrar">Cadastrar</a></li>
                        <li><a href="?controle=Paciente&acao=listar">Gerenciar</a></li>
                        <!--li role="separator" class="divider"></li>
                        <li><a href="#">Exemplo</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Exemplo</a></li-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Médicos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?controle=Medico&acao=cadastrar">Cadastrar</a></li>
                        <li><a href="?controle=Medico&acao=listar">Gerenciar</a></li>
                        <!--li role="separator" class="divider"></li>
                        <li><a href="#">Exemplo</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Exemplo</a></li-->
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="?controle=Usuario&acao=deslogar">Log-out</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>