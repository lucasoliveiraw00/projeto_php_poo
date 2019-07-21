<h3 ><b>Cadastro </b> Pessoa Física</h3><br>
<form  name="form1" id="form1" method="POST" action="<?= BASE; ?>Pessoa/ValidarDadosPesoaFisica" enctype="multipart/form-data" >
  <div class="row">
      <div class="form-group col-md-4"> 
        <label for="nome">Nome:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Preencher" required  >
        </div> 
        <span class="hidden msg-error invalido-nome">Preencher o Campo Nome.
      </div>
      <div class="form-group col-md-4"> 
        <label for="cpf">CPF:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Preencher" required  >
        </div> 
        <span class="hidden msg-error invalido-cpf">Preencher o Campo CPF.
      </div>
      <div class="form-group col-md-4"> 
        <label for="rg">RG:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="rg" id="rg" placeholder="Preencher" required  >
        </div> 
        <span class="hidden msg-error invalido-rg">Preencher o Campo RG.
      </div>
      <div class="form-group col-md-4"> 
        <label for="sexo">Sexo:</label>  
        <div class="input-group mb-3">  
          <select class="form-control" name="sexo" id="sexo">
            <option value="" selected>Selecionar</option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
          </select>
        </div> 
        <span class="hidden msg-error invalido-sexo">Preencher o Campo Sexo.
      </div>
      <div class="form-group col-md-4"> 
        <label for="datanac">Data de Nacimento:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control"  name="datanac" id="datanac" placeholder="Preencher" data-date-end-date="0d" readonly required >
          <div class="input-group-append">
            <span alert-tooltip="tooltip" title="Click para Selecionar" class="input-group-text pointer" id="datenac"><i class="far fa-calendar-alt"></i></span>
          </div>
        </div>
        <span class="hidden msg-error invalido-datanac">Preencher o Campo Data. 
      </div> 
      <div class="form-group col-md-4"> 
        <label for="telefone">Telefone:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Preencher" required  >
        </div> 
        <span class="hidden msg-error invalido-telefone">Preencher o Campo Telefone.
      </div>
      <div class="form-group col-md-4"> 
        <label for="cep">Cep:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control"  name="cep" id="cep" placeholder="Preencher" required >
          <div class="input-group-append">
            <span alert-tooltip="tooltip" title="Click para buscar cep" class="input-group-text pointer">
            <a class="btn-cep pointer" onCLick="window.open('http://www.buscacep.correios.com.br/sistemas/buscacep/','_blank');"><i class="fas fa-search"></i></a></span>
          </div>
        </div>
        <span class="hidden msg-error invalido-cep">Preencher o Campo Cep. 
      </div>
      <div class="form-group col-md-4"> 
        <label for="cidade">Cidade:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Preencher" required  >
        </div> 
        <span class="hidden msg-error invalido-cidade">Preencher o Campo Telefone.
      </div>
      <div class="form-group col-md-4"> 
        <label for="uf">Estado:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="uf" id="uf" placeholder="Preencher" required  >
        </div> 
        <span class="hidden msg-error invalido-uf">Preencher o Campo Estado.
      </div>
      <div class="form-group col-md-4"> 
        <label for="bairro">Bairro:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Preencher" required  >
        </div> 
        <span class="hidden msg-error invalido-bairro">Preencher o Campo Bairro.
      </div>
      <div class="form-group col-md-4"> 
        <label for="endereco">Endereço:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Preencher" required  >
        </div> 
        <span class="hidden msg-error invalido-endereco">Preencher o Campo Endereço.
      </div>
      <div class="form-group col-md-4"> 
        <label for="numero">Numero de Endereço:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="numero" id="numero" placeholder="Preencher" required  >
        </div> 
        <span class="hidden msg-error invalido-numero">Preencher o Campo Nº de Endereço.
      </div>
  </div>
  <div class="card-footer">
    <button type="submit" id="submit1"  class="btn btn-primary ">Salvar</button>
  </div>
</form>

<script>
  $("input[id*='cpf']").inputmask({
    mask: ['999.999.999-99'],
    keepStatic: true
  });

  $("input[id*='telefone']").inputmask({
    mask: ['(99) 9999-9999'],
    keepStatic: true
  });

  $("input[id*='cep']").inputmask({
    mask: ['99999-999'],
    keepStatic: true
  });

  $("input[id*='uf']").inputmask({
    mask: ['AA'],
    keepStatic: true
  });

  let $datanac = $('#datanac');
  $datanac.datepicker({
    language: 'pt-BR',
    format: 'dd/mm/yyyy',
    autoclose: true,
    todayHighlight: true,
    clearBtn: true
  }).data('datepicker');


  $('#datenac').on('click', function() {
    $datanac.show();
    $datanac.focus();
  }); 
</script>