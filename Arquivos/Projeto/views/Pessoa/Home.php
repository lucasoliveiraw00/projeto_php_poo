<div class="container">

  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active load" id="nav-home-tab" data-toggle="tab" href="#nav-PessoaFisica" role="tab" aria-controls="nav-PessoaFisica" aria-selected="true">
        <img src="<?= BASE; ?>assets/icons/person1.png" width="21" height="21">
        Pessoa Física
      </a>
      <a class="nav-item nav-link load" id="tab-lista-fisica" data-toggle="tab" href="#nav-ListaPessoaFisica" role="tab" aria-controls="nav-ListaPessoaFisica" aria-selected="true">
        <img src="<?= BASE; ?>assets/icons/person1.png" width="21" height="21">
        Lista
      </a>
      <a class="nav-item nav-link load" id="nav-PessoaJurídica-tab" data-toggle="tab" href="#nav-PessoaJurídica" role="tab" aria-controls="nav-profile" aria-selected="false">
        <img src="<?= BASE; ?>assets/icons/person2.png" width="21" height="21">
        Pessoa Jurídica
      </a>
      <a class="nav-item nav-link load" id="tab-listajuridica" data-toggle="tab" href="#nav-ListaPessoaJuridica" role="tab" aria-controls="nav-profile" aria-selected="false">
        <img src="<?= BASE; ?>assets/icons/person2.png" width="21" height="21">
        Lista
      </a>
    </div>
  </nav>

  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-PessoaFisica" role="tabpanel" aria-labelledby="nav-PessoaFisica-tab">
        <div class="card">
          <div class="card-body fundo">
            <div class="content">
              <?php $this->loadView('Pessoa/Formulario/Cadastro/PessoaFisica');?>
            </div>
          </div>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-ListaPessoaFisica" role="tabpanel" aria-labelledby="nav-ListaPessoaFisica-tab">
        <div class="card">
          <div class="card-body fundo">
            <div class="content">
              <?php $this->loadView('Pessoa/Lista/PessoaFisica');?>
            </div>
          </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="nav-PessoaJurídica" role="tabpanel" aria-labelledby="nav-PessoaJurídica-tab">
        <div class="card">
          <div class="card-body fundo">
            <div class="content">
              <?php $this->loadView('Pessoa/Formulario/Cadastro/PessoaJuridica');?>
            </div>
          </div>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-ListaPessoaJuridica" role="tabpanel" aria-labelledby="nav-ListaPessoaJuridica-tab">
        <div class="card">
          <div class="card-body fundo">
            <div class="content">
              <?php $this->loadView('Pessoa/Lista/PessoaJuridica');?>
            </div>
          </div>
        </div>
    </div>

  </div>
</div>

<script>
$(function () {
  $('#myTab li:last-child .load').tab('show')
});    
</script>