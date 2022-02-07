<?php 
use core\classes\Store;
?>
<div class="container-fluid navegacao bg-danger text-dark" >
    <div class="row">
        <div class="col-6 p-3 text-dark">
            <a href="?a=inicio">
                <h3><?= APP_NAME ?></h3>
            </a>
        </div>
        <div class="col-6 text-end p-3">

            <a href="?a=inicio" class="nav-item">Início</a>
            <a href="?a=loja" class="nav-item">Loja</a>
            <a href="?a=novo_cliente" class="nav-item">Cadastro Cliente</a>

            <!-- verifica se existe cliente na sessao -->
            <?php if(Store::clienteLogado()):?>
                
                <a href="" class="nav-item">A minha conta</a>
                <a href="" class="nav-item">Logout</a>                

            <?php else:?>
                
                <a href="" class="nav-item">Login</a>
                <a href="?a=novo_cliente" class="nav-item">Criar conta</a>

            <?php endif;?>

            <a href="?a=carrinho"><i class="fas fa-shopping-cart"></i></a>

            <span class="badge bg-warning"></span>
        </div>
    </div>
</div>