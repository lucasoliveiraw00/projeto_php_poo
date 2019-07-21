<h3 ><b>Lista </b> Pessoa Jurídica</h3><br>
<div class="table-responsive">
  <table id="example2" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Razão Social</th>
        <th>Nome Fantasia</th>
        <th>CNPJ</th>
        <th>Telefone</th>
        <th class="text-center">Opções</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($this->Listar("Juridica") as $listar):?>
        <tr>
          <td><?php echo $listar['razao_social']?></td>
          <td><?php echo $listar['nome_fantasia']?></td>
          <td><?php echo $listar['cnpj']?></td>
          <td><?php echo $listar['telefone']; ?></td>
          <td class="text-center">
            <a class="btn btn-outline-primary btn-sm"  href="<?php echo BASE; ?>Pessoa/Juridica/<?php echo $listar['id']; ?>" ><i class="fas fa-edit" ></i></a>
          </td>
        </tr>
      <?php endforeach; ?> 
    </tbody>
  </table>
</div>