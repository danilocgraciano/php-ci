<?php $this->load->view('commons/header')?>

<?php if($formErrors){?>
    <div class="alert alert-danger" role="alert">
        <?=$formErrors?>
    </div>
<?php }else{ 
    if($this->session->flashdata('success_msg')) {?>
    <div class="alert alert-success" role="alert">
        <?=$this->session->flashdata('success_msg')?>
    </div>
<?php } } ?>



<div class="container-fluid">
    <h5 class="mt-2">
        Fale Conosco
    </h5>

    <form method="POST" action="<?=base_url('fale-conosco')?>">

        <div class="row">
            <div class="form-group col-md-12 col-lg-8">
                <label class="control-label required" for="nome">Nome</label>
                <input type="text" class="form-control form-control-sm" id="nome" name="nome" value="<?=set_value('nome')?>" autofocus required>
            </div>

            <div class="form-group col-md-12 col-lg-8">
                <label class="control-label required" for="email">Email</label>
                <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="email@example.com" value="<?=set_value('email')?>">
            </div>

            <div class="form-group col-md-12 col-lg-8">
                <label class="control-label required" for="assunto">Assunto</label>
                <input type="text" class="form-control form-control-sm" id="assunto" name="assunto" value="<?=set_value('assunto')?>">
            </div>

            <div class="form-group col-md-12 col-lg-8">
                <label class="control-label required" for="mensagem">Mensagem</label>
                <textarea class="form-control form-control-sm" id="mensagem" name="mensagem" rows="10"><?=set_value('mensagem')?></textarea>
            </div>

            <div class="form-group col-md-12 col-lg-8">
                <button type="submit" class="btn btn-primary " >Enviar</button>
            </div>


        </div>
    </form>
</div>

<?php $this->load->view('commons/footer')?>