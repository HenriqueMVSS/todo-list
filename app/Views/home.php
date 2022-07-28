<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo')?>

<header class="container d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="p-3">Compras da manhã</h3>
        </div>
        
        <div class="p-2 col-14 input-group">
            <input class="form-control" type="text" placeholder="Your task"><a href="<?=  site_url('main/newItem')?>" class="btn btn-primary">Adicionar</a>            
        </div>
       
    </div>
</header>
<hr>

<?php if(count($items) == 0) : ?>
    <p>Não foram encontrados registros.</p>
<?php else:?>
    <table class="table table-striped table-sm">
    <thead class="thead-light">
        <tr>
            <th colspan="3" class="text-center">Item</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($items as $item) :?>
        <tr>
            <td class="text-center"> <?= $item->item?> </td>
        </tr>
      <?php endforeach;?>
    </tbody>
</table>


<p> N.º de itens: <strong></strong><?= count($items)?> </p>
<?php endif;?>
<hr>
<footer class="container">
    <div class="row">
        <div class="col text-center">
            TODO List &copy; <?= date('Y') ?>
        </div>
    </div>
</footer>
<?= $this->endSection()?>