<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="<?=base_url()?>">Home <span class="sr-only">(Página atual)</span></a>
                
                <?php if($this->session->userdata('logged')){?>

                    <a class="nav-item nav-link" href="<?=base_url('my-urls')?>">Minhas URLs</a>
                    <a class="nav-item nav-link" href="<?=base_url('update-password')?>">Alterar Senha</a>
                    <a class="nav-item nav-link" href="<?=base_url('logout')?>">Sair</a>

                <?php } else {?>

                    <a class="nav-item nav-link" href="<?=base_url('login')?>">Login/Cadastro</a>
                    
                <?php } ?>
        </div>
    </div>
</nav>