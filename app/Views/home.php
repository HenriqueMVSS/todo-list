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
<table class="table table-striped table-sm">
    <thead class="thead-light">
        <tr>
            <th>col 1</th>
            <th>col 2</th>
            <th>col 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>col 1</td>
            <td>col 2</td>
            <td>col 3</td>
        </tr>
        <tr>
            <td>col 1</td>
            <td>col 2</td>
            <td>col 3</td>
        </tr>
        <tr>
            <td>col 1</td>
            <td>col 2</td>
            <td>col 3</td>
        </tr>
    </tbody>
</table>

N.º de itens: 0
<hr>
<footer class="container">
    <div class="row">
        <div class="col text-center">
            TODO List &copy; <?= date('Y') ?>
        </div>
    </div>
</footer>
<?= $this->endSection()?>