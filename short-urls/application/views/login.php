<?php $this->load->view('commons/header')?>

<div class="container-fluid">
    <div class="mt-5 d-flex justify-content-center">

        <div class="row">
            <div class="col-sm">

                <h5>Login</h5>

                <?php echo form_open('login'); ?>
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label" for="email">Email</label>
                        <input type="text" class="form-control form-control-sm" id="login_email" name="email" value="<?php echo set_value('email'); ?>" autofocus required>
                    </div>

                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label" for="passw">Password</label>
                        <input type="password" class="form-control form-control-sm" id="login_passw" name="passw" value="<?php echo set_value('passw'); ?>" required>
                    </div>

                    <div class="col">
                        <button type="submit" class="btn btn-primary ">Entrar</button>
                    </div>
                </form>

            </div>
            <div class="col-sm">
                
                <h5>Cadastre-se</h5>

                <?php echo form_open('user/register'); ?>
                    
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label" for="name">Nome</label>
                        <input type="text" class="form-control form-control-sm" id="register_name" name="name" value="<?php echo set_value('name'); ?>">
                    </div>

                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label" for="email">Email</label>
                        <input type="text" class="form-control form-control-sm" id="register_email" name="email" value="<?php echo set_value('email'); ?>" required>
                    </div>

                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label" for="passw">Password</label>
                        <input type="password" class="form-control form-control-sm" id="register_passw" name="passw" value="<?php echo set_value('passw'); ?>" required>
                    </div>

                    <div class="col">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-5 row justify-content-center">

        <?php if($error){ ?>
            <?=$error?>
        <?php } ?>
    </div>

</div>

<?php $this->load->view('commons/footer')?>