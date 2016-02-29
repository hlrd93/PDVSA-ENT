<?php include_once("../config/init.php"); ?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="../inicio/index.php"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#chuto"><i class="fa fa-fw fa-arrows-v"></i> Chuto <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="chuto" class="collapse">
                <li>
                    <a href="../chuto/registrar_chutos.php"><i class="fa fa-fw fa-table"></i> Registrar Chuto</a>
                </li>
                <li>
                    <a href="../chuto/actualizar_chutos.php"><i class="glyphicon glyphicon-edit"></i> Actualizar Chuto</a>
                </li>
                <li>
                    <a href="../chuto/listar_chutos.php"><i class="glyphicon glyphicon-list"></i> Listar Chutos</a>
                </li>
                <li>
                    <a href="../chuto/transferidos_chutos.php"><i class="glyphicon glyphicon-transfer"></i> Chutos Transferidos</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#cisterna"><i class="fa fa-fw fa-arrows-v"></i> Cisterna <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="cisterna" class="collapse">
                <li>
                    <a href="../cisterna/registrar_cisternas.php"><i class="fa fa-fw fa-table"></i> Registrar Cisterna</a>
                </li>
                <li>
                    <a href="../cisterna/actualizar_cisternas.php"><i class="glyphicon glyphicon-edit"></i> Actualizar Cisterna</a>
                </li>
                <li>
                    <a href="../cisterna/listar_cisternas.php"><i class="glyphicon glyphicon-list"></i> Listar Cisternas</a>
                </li>
                <li>
                    <a href="../cisterna/transferidos_cisternas.php"><i class="glyphicon glyphicon-transfer"></i> Cisternas Transferidas</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#camiontanque"><i class="fa fa-fw fa-arrows-v"></i> Camion Tanque <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="camiontanque" class="collapse">
                <li>
                    <a href="../camion_tanque/registrar_camion_tanque.php"><i class="fa fa-fw fa-table"></i> Registrar Camion Tanque</a>
                </li>
                <li>
                    <a href="../camion_tanque/actualizar_camion_tanque.php"><i class="glyphicon glyphicon-edit"></i> Actualizar Camion Tanque</a>
                </li>
                <li>
                    <a href="../camion_tanque/listar_camion_tanque.php"><i class="glyphicon glyphicon-list"></i> Listar Camiones Tanque</a>
                </li>
                <li>
                    <a href="../camion_tanque/transferidos_camion_tanque.php"><i class="glyphicon glyphicon-transfer"></i> Camion Tanque Transferidos</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#conductor"><i class="fa fa-fw fa-arrows-v"></i> Conductor <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="conductor" class="collapse">
                <li>
                    <a href="../conductor/registrar_conductor.php"><i class="fa fa-fw fa-table"></i> Registrar Conductor</a>
                </li>
                <li>
                    <a href="../conductor/actualizar_conductor.php"><i class="glyphicon glyphicon-edit"></i> Actualizar Conductor</a>
                </li>
                <li>
                    <a href="../conductor/listar_conductor.php"><i class="glyphicon glyphicon-list"></i> Listar Conductores</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>