<?php $this->load->view('commons/header')?>

<div class="container-fluid">

    <div class="mt-5 d-flex justify-content-center">
        <h5>ENCURTE E COMPARTILHE</h5>
    </div>

    <div class="mt-2 d-flex justify-content-center">
        <h6><small class="text-muted">URL menor, TEXTO maior.</small></h6>
    </div>

    <?php echo form_open(''); ?>
            <div class="row mt-5 d-flex justify-content-center">
                <label class="col-md-8 col-md-offset-2">
                    <input type="text" class="form-control" id="name" name="address" placeholder="URL" autofocus>
                </label>
                <label class="col-md-2">
                    <button type="submit" class="btn btn-primary">Encurtar</button>
                </label>
            </div>

            <div class="mt-5 row justify-content-center">
            
                <?php echo validation_errors(); ?>

                <?php if($short_url){ ?>
                    <p class="text-center"><a href="<?=$short_url?>" target="_blank"><?=$short_url?></a></p>
                <?php } ?>
            </div>
    </form>

</div>
<?php $this->load->view('commons/footer')?>