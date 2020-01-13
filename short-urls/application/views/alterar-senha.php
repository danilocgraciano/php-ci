<?php $this->load->view('commons/header')?>

<div class="container-fluid">

    <div class="mt-5 d-flex justify-content-center">

        <div class="row">

            <?php echo form_open('update-password'); ?>

                <div class="form-group col-md-12 col-lg-12">
                    <h5>Alterar Senha</h5>
                </div>

                <div class="form-group col-md-12 col-lg-12">
                    <?=$user->email?>
                </div>

                <div class="form-group col-md-12 col-lg-12">
                    <input type="password" class="form-control" placeholder="Nova Senha" name="passw" required/>
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-primary ">Alterar</button>
                </div>

            </form>

        </div>
            
    </div>

    <div class="mt-5 row justify-content-center">

        <?php if($error){ ?>
            <?=$error?>
        <?php } ?>

        <?php if($success){ ?>
            <?=$success?>
        <?php } ?>
    </div>

</div>

<?php $this->load->view('commons/footer')?>