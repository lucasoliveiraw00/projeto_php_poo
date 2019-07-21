<h3 ><b>Lista </b> Pessoa Física</h3><br>
<div class="table-responsive">
  <table id="example1" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th class="text-center">Opções</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($this->Listar("Fisica") as $listar):?>
        <tr>
          <td><?php echo $listar['nome']?></td>
          <td><?php echo $listar['cpf']?></td>
          <td><?php echo $listar['telefone']; ?></td>
          <td class="text-center">
            <a class="btn btn-outline-primary btn-sm"  href="<?php echo BASE; ?>Pessoa/Fisica/<?php echo $listar['id'];?>" ><i class="fas fa-edit" ></i></a>
          </td>
        </tr>
      <?php endforeach; ?> 
    </tbody>
  </table>
</div>