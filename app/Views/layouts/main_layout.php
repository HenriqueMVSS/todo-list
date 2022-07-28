<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css') ?>">
</head>
<body>
    
    <?= $this->renderSection('conteudo') ?>

    <hr>
    <footer class="container">
        <div class="row">
            <div class="col text-center">
                TODO List &copy; <?= date('Y') ?>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('assets/jquery.slim.min.js')?>"></script>
    <script src="<?= base_url('assets/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/bootstrap.min.js')?>"></script>

</body>
</html>