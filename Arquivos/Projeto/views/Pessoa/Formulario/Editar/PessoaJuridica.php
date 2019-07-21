<h3 ><b>Cadastro </b> Pessoa Jurídica</h3><br>
<form  name="form2" id="form2" method="POST" action="<?= BASE; ?>Pessoa/ValidarDadosPesoaJuridica/<?php echo $dados->id; ?>" enctype="multipart/form-data" >
  <div class="row">
      <div class="form-group col-md-4"> 
        <label for="razao_social">Razão Social:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="razao_social" id="razao_social" placeholder="Preencher" value="<?php echo $dados->razao_social; ?>"  >
        </div> 
        <span class="hidden msg-error invalidoform2-razao_social">Preencher o Campo Razão Social.
      </div>
      <div class="form-group col-md-4"> 
        <label for="nome_fantasia">Nome Fantasia:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia" placeholder="Preencher" required value="<?php echo $dados->nome_fantasia; ?>" >
        </div> 
        <span class="hidden msg-error invalidoform2-nome_fantasia">Preencher o Campo Nome Fantasia.
      </div>
      <div class="form-group col-md-4"> 
        <label for="cnpj">CNPJ:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control cnpj" name="cnpj" id="cnpj" placeholder="Preencher" required value="<?php echo $dados->cnpj; ?>" >
        </div> 
        <span class="hidden msg-error invalidoform2-cnpj">Preencher o Campo CNPJ.
      </div>
      <div class="form-group col-md-4"> 
        <label for="inscricao_esdadual">Inscrição Estadual:</label>  
        <div class="input-group mb-3">  
          <input type="number" class="form-control" name="inscricao_esdadual" id="inscricao_esdadual" placeholder="Preencher" required value="<?php echo $dados->inscricao_esdadual; ?>" >
        </div> 
        <span class="hidden msg-error invalidoform2-inscricao_esdadual">Preencher o Campo Inscrição Estadual.
      </div>
      <div class="form-group col-md-4"> 
        <label for="data_fundacao">Data de Fundação:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control"  name="data_fundacao" id="data_fundacao" placeholder="Preencher" data-date-end-date="0d" readonly required value="<?php echo $dados->data_fundacao; ?>" >
          <div class="input-group-append">
            <span alert-tooltip="tooltip" title="Click para Selecionar" class="input-group-text pointer" id="datefund"><i class="far fa-calendar-alt"></i></span>
          </div>
        </div>
        <span class="hidden msg-error invalidoform2-data_fundacao">Preencher o Campo Data. 
      </div> 
      <div class="form-group col-md-4"> 
        <label for="telefone">Telefone:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control telefone" name="telefone" id="telefone" placeholder="Preencher" required value="<?php echo $dados->telefone; ?>" >
        </div> 
        <span class="hidden msg-error invalidoform2-telefone">Preencher o Campo Telefone.
      </div>
      <div class="form-group col-md-4"> 
        <label for="cep">Cep:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control cep"  name="cep" id="cep2" placeholder="Preencher" required value="<?php echo $dados->cep; ?>" >
          <div class="input-group-append">
            <span alert-tooltip="tooltip" title="Click para buscar cep" class="input-group-text pointer">
            <a class="btn-cep pointer" onCLick="window.open('http://www.buscacep.correios.com.br/sistemas/buscacep/','_blank');"><i class="fas fa-search"></i></a></span>
          </div>
        </div>
        <span class="hidden msg-error invalidoform2-cep2">Preencher o Campo Cep. 
      </div>
      <div class="form-group col-md-4"> 
        <label for="cidade">Cidade:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="cidade" id="cidadeform2" placeholder="Preencher" required value="<?php echo $dados->cidade; ?>" >
        </div> 
        <span class="hidden msg-error invalidoform2-cidadeform2">Preencher o Campo Cidade.
      </div>
      <div class="form-group col-md-4"> 
        <label for="uf">Estado:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control uf" name="uf" id="ufform2" placeholder="Preencher" required value="<?php echo $dados->uf; ?>" >
        </div> 
        <span class="hidden msg-error invalidoform2-ufform2">Preencher o Campo Estado.
      </div>
      <div class="form-group col-md-4"> 
        <label for="bairro">Bairro:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="bairro" id="bairroform2" placeholder="Preencher" required value="<?php echo $dados->bairro; ?>" >
        </div> 
        <span class="hidden msg-error invalidoform2-bairroform2">Preencher o Campo Bairro.
      </div>
      <div class="form-group col-md-4"> 
        <label for="endereco">Endereço:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="endereco" id="enderecoform2" placeholder="Preencher" required value="<?php echo $dados->endereco; ?>" >
        </div> 
        <span class="hidden msg-error invalidoform2-enderecoform2">Preencher o Campo Endereço.
      </div>
      <div class="form-group col-md-4"> 
        <label for="numero">Numero de Endereço:</label>  
        <div class="input-group mb-3">  
          <input type="text" class="form-control" name="numero" id="numero" placeholder="Preencher" required value="<?php echo $dados->numEnd; ?>" >
        </div> 
        <span class="hidden msg-error invalidoform2-numero">Preencher o Campo Nº de Endereço.
      </div>
  </div>
  <div class="card-footer">
    <button type="submit" id="submit2" value="Cadastrar" class="btn btn-primary ">Salvar</button>
    <a class="btn btn-danger text-light" onclick="ExcluirPessoaJuridica('<?php echo $dados->id; ?>');" role="button">Excluir</a>
  </div>
</form>


<script>
  $(".telefone").inputmask({
    mask: ['(99) 9999-9999'],
    keepStatic: true
  });

  $(".cnpj").inputmask({
    mask: ['99.999.999/9999-99'],
    keepStatic: true
  });

  $(".cep").inputmask({
    mask: ['99999-999'],
    keepStatic: true
  });

  $(".uf").inputmask({
    mask: ['AA'],
    keepStatic: true
  });

  let $data_fundacao = $('#data_fundacao') ;

  $data_fundacao.datepicker({
    language: 'pt-BR',
    format: 'dd/mm/yyyy',
    autoclose: true,
    todayHighlight: true,
    clearBtn: true
  }).data('datepicker');


  $('#datefund').on('click', function() {
    $data_fundacao.show();
    $data_fundacao.focus();
  }); 
</script>