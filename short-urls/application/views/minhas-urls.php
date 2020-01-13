<?php $this->load->view('commons/header')?>

<div class="container-fluid">

    <div class="mt-5 d-flex justify-content-center">

        <div class="row">
            <h5>Minhas URLs</h5>

            <?php if($urls){?>
                <table class="table table-striped table-hover table-sm">

                    <?php foreach($urls as $url){?>
                        <tr>
                            <td>
                                <a href="<?=base_url($url->code)?>" target="_blank">
                                    <?=base_url($url->code)?>
                                </a>
                            </td>
                            <td><?=$url->address?></td>
                        </tr>
                    <?php } ?>
                </table>

            <?php }else{ ?>
                <p>Nenhuma URL encurtada.</p>
            <?php } ?>

        </div>
            
    </div>

    <div class="mt-5 row justify-content-center">

        <?php if($error){ ?>
            <?=$error?>
        <?php } ?>

    </div>

</div>

<?php $this->load->view('commons/footer')?>