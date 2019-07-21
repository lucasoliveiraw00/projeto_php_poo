<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Projeto</title>

	<link rel="stylesheet" href="<?= BASE; ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= BASE; ?>assets/css/adminlte.css">
 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <script src="<?= BASE; ?>assets/js/jquery.min.js"></script>
  <script src="<?= BASE; ?>assets/plugins/inputmask/dist/jquery.inputmask.bundle.js"></script>

  <link rel="stylesheet" href="<?= BASE; ?>assets/plugins/datatables2/dataTables.bootstrap4.min.css">

  <script src="<?= BASE; ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= BASE; ?>assets/js/buscacep.js"></script> 
  <script src="<?= BASE; ?>assets/js/configProjeto.js"></script> 

  <script src="<?= BASE; ?>assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
  <script src="<?= BASE; ?>assets/plugins/datepicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>
  <link rel="stylesheet" href="<?= BASE; ?>assets/plugins/datepicker/css/bootstrap-datepicker3.css">  

</head>

<body class="color-body">
<div class="container">
  <div class="row mt-5">
    <div class="col-sm-8 offset-md-2">
      <div class="card">
        <div class="card-body">
          <?php $this->loadView($viewName, $viewData); ?>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script src="<?= BASE; ?>assets/js/bootstrap-inputmask.min.js"></script> 
<script src="<?= BASE; ?>assets/js/validarform.js"></script> 

<script src="<?= BASE; ?>assets/plugins/datatables2/jquery.dataTables.min.js"></script>
<script src="<?= BASE; ?>assets/plugins/datatables2/dataTables.bootstrap4.min.js"></script>