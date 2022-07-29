<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo')?>

<header class="container d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="p-3">Compras da manhã</h3>
        </div>
    </div>
    
</header>
<hr>

<?php
helper('form');
echo form_open('main/create')
?>
    <div class="p-2 col-5 offset-4 form-group d-flex">
        <input name="task" id="task" class="form-control mr-1 text-center" type="text" placeholder="Digite seu item" required><button type="submit" class="btn btn-primary">Adicionar</button>            
    </div>
<?= form_close();?>

<?php if(count($items) == 0) : ?>
    <p class="text-center">Não foram encontrados registros.</p>
<?php else:?>
    <table class="table table-striped table-sm">
    <thead class="thead-light">
        <tr>
            <th colspan="3" class="text-center">Itens</th>
            <!-- <th></th> -->
        </tr>
    </thead>
    <tbody>
      <?php foreach($items as $item) :?>
        <tr>
            <td class="text-center"> <?= $item->item?> </td>
            <td>&nbsp;</td>
            <td class="text-center">
                <?php if(empty($item->finished_at)) :?> 
                    <a href="<?= site_url('main/taskComplete/'. $item->id_item)?>" class="btn-sm btn-primary mx-2 text-decoration-none"> 
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    </a>  
                <?php else:?>  
                    <span class="btn-sm btn-success mx-2 "> <i class="fa fa-refresh" aria-hidden="true"></i></span>
                <?php endif;?>    
                <a href="<?= site_url('main/delete/'. $item->id_item)?>" class="btn-sm btn-danger mx-2 text-decoration-none">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
      <?php endforeach;?>
    </tbody>
</table>

<p> N.º de itens: <strong></strong><?= count($items)?> </p>
<?php endif;?>

<?= $this->endSection()?>