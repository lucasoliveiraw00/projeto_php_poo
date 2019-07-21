<?php
class PessoaController extends controller {

        public function Index() {  
            $dados = array();

            $this->loadViewTemplate('Pessoa/Home', $dados);
        }

        public function Listar($tipo) {
            $dados = array();
            $ModelPessoa = new ModelPessoa();

            $PessoaFisica = $ModelPessoa->PessoaFisica();
            $PessoaJuridica = $ModelPessoa->PessoaJuridica(); 
                
                if ($tipo === "Fisica") {
                    return $PessoaFisica;
                    exit;
                }
                
                if ($tipo === "Juridica") {
                    return $PessoaJuridica;
                    exit;
                }

            
        }


        public function Fisica($id) {
            $dados = array();
            $ModelPessoa = new ModelPessoa();

            if ($result = $ModelPessoa->BuscarDadosPessoaFisica($id)) {
                
                $dados['dados'] = $result;
                $this->loadViewTemplate('Pessoa/Formulario/Editar/PessoaFisica', $dados);
            } else {
                echo '<script>alert("Ocorreu erro ao carregar a pagina !");history.back();</script>';
                exit;
            }

        }

        public function Juridica($id) {
            $dados = array();
            $ModelPessoa = new ModelPessoa();

            if ($result = $ModelPessoa->BuscarDadosPessoaJuridica($id)) {
                
                $dados['dados'] = $result;
                $this->loadViewTemplate('Pessoa/Formulario/Editar/PessoaJuridica', $dados);
            } else {
                echo '<script>alert("Ocorreu erro ao carregar a pagina !");history.back();</script>';
                exit;
            }

        }

        public function ValidarDadosPesoaFisica($id = null) {
            
            if (!empty( $_POST )) {
                $dados = array();
                $ModelPessoa = new ModelPessoa();
            
                $nome = $cpf = $rg = $sexo = $datanac = $telefone = $cep = $cidade = $uf = $bairro = $endereco = $numero = "";
            
                $dados = array();
                $ModelPessoa = new ModelPessoa();

                if ( isset ( $_POST["nome"] ) ) {
                    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["cpf"] ) ) {
                    $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["rg"] ) ) {
                    $rg = filter_input(INPUT_POST, "rg", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["sexo"] ) ) {
                    $sexo = filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["datanac"] ) ) {
                    $datanac = filter_input(INPUT_POST, "datanac", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["telefone"] ) ) {
                    $telefone = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["cep"] ) ) {
                    $cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["cidade"] ) ) {
                    $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["uf"] ) ) {
                    $uf = filter_input(INPUT_POST, "uf", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["bairro"] ) ) {
                    $bairro = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["endereco"] ) ) {
                    $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING);	
                }
                if ( isset ( $_POST["numero"] ) ) {
                    $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_STRING);	
                }

                if (empty ( $nome ) || !preg_match("/^[a-zA-ZÀ-ú\s]+$/",$nome) ) {
                    echo '<script>alert("Verificar o Campo NOME !");history.back();</script>';
                } else if ( empty ( $cpf ) ) {
                    echo '<script>alert("Preencha o Campo CPF !");history.back();</script>';
                    exit;
                } else if ( empty ( $rg ) )  {
                    echo '<script>alert("Preencha o Campo RG !");history.back();</script>';
                    exit;
                } else if ( empty ( $sexo ) ) {
                    echo '<script>alert("Preencha o Campo Sexo !");history.back();</script>';
                    exit;
                } else if ( empty ( $datanac ) ) {
                    echo '<script>alert("Preencha o Campo Data !");history.back();</script>';
                    exit;
                } else if ( empty ( $telefone ) ) {
                    echo '<script>alert("Preencha o Campo Telefone !");history.back();</script>';
                    exit;
                } else if ( empty ( $cep ) ) {
                    echo '<script>alert("Preencha o Campo CEP !");history.back();</script>';
                    exit;
                } else if ( empty ( $cidade ) ) {
                    echo '<script>alert("Preencha o Campo Cidade !");history.back();</script>';
                    exit;
                } else if ( empty ( $uf ) ) {
                    echo '<script>alert("Preencha o Campo Estado !");history.back();</script>';
                    exit;
                } else if ( empty ( $bairro ) ) {
                    echo '<script>alert("Preencha o Campo Bairro !");history.back();</script>';
                    exit;
                } else if ( empty ( $numero ) ) {
                    echo '<script>alert("Preencha o Campo Numero de Endereço !");history.back();</script>';
                    exit;
                } else {
                
                    $datanac = $this->ValidaData($datanac);
                    $this->ValidaCPFCNPJ($cpf);

                    if ( empty($id) ) {
                        // chave simples
                        $chave = "sdfg#$%#$%#%454542143524";
                        $this->SalvarPessoaFisica($chave,$nome,$cpf,$rg,$sexo,$datanac,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero);
                    }

                    if ( !empty($id) ) {
                        // chave simples
                        $chave = "sdfg#$%#$%#%45dsfdsf4542143524";
                        $this->EditarPessoaFisica($chave,$id,$nome,$cpf,$rg,$sexo,$datanac,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero);
                    }

                }
               
            } else {
                echo '<script>alert("Ocorreu erro ao carregar a pagina !");history.back();</script>';
                exit;
            }

        }

        public function SalvarPessoaFisica($chave,$nome,$cpf,$rg,$sexo,$datanac,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero) {
            $dados = array();
            $ModelPessoa = new ModelPessoa();

            if ($chave === "sdfg#$%#$%#%454542143524") {

                if ($ModelPessoa->ExistDadosPessoaFisica($cpf)) {
                    echo '<script>alert("Já existe um registro com mesmo CPF");history.back();</script>';
                    exit;
                }else if($ModelPessoa->CadastrarPessoaFisica($nome,$cpf,$rg,$sexo,$datanac,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero)) {
                    echo '<script>alert("Registro salvo com sucesso !");location.href="'.BASE.'";</script>';
                    exit;
                } else {
                    echo '<script>alert("Ocorreu erro ao savar !");history.back();</script>';
                    exit;
                }
            } else {
                echo '<script>alert("Ocorreu erro ao carregar a pagina !");history.back();</script>';
                exit;
            }

        }

        public function EditarPessoaFisica($chave,$id,$nome,$cpf,$rg,$sexo,$datanac,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero) {
            $dados = array();
            $ModelPessoa = new ModelPessoa();

            if ($chave === "sdfg#$%#$%#%45dsfdsf4542143524") {

                if ($ModelPessoa->ExistDadosPessoaFisica2($id,$cpf)) {
                    echo '<script>alert("Já existe um registro com mesmo CPF");history.back();</script>';
                    exit;
                }else if($ModelPessoa->EditarPessoaFisica($id,$nome,$cpf,$rg,$sexo,$datanac,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero)) {
                    echo '<script>alert("Registro editado com sucesso !");location.href="'.BASE.'";</script>';
                    exit;
                } else {
                    echo '<script>alert("Ocorreu erro ao savar !");history.back();</script>';
                    exit;
                }
            } else {
                echo '<script>alert("Ocorreu erro ao carregar a pagina !");history.back();</script>';
                exit;
            }

        }

        public function ValidarDadosPesoaJuridica($id = null) {
           
                $razao_social = $nome_fantasia = $cnpj = $inscricao_esdadual = $data_fundacao = $telefone = $cep = $cidade = $uf = $bairro = $endereco = $numero = "";
            
                if (!empty( $_POST )) {

                    $dados = array();
                    $ModelPessoa = new ModelPessoa();

                    if ( isset ( $_POST["razao_social"] ) ) {
                        $razao_social = filter_input(INPUT_POST, "razao_social", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["nome_fantasia"] ) ) {
                        $nome_fantasia = filter_input(INPUT_POST, "nome_fantasia", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["cnpj"] ) ) {
                        $cnpj = filter_input(INPUT_POST, "cnpj", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["inscricao_esdadual"] ) ) {
                        $inscricao_esdadual = filter_input(INPUT_POST, "inscricao_esdadual", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["data_fundacao"] ) ) {
                        $data_fundacao = filter_input(INPUT_POST, "data_fundacao", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["telefone"] ) ) {
                        $telefone = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["cep"] ) ) {
                        $cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["cidade"] ) ) {
                        $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["uf"] ) ) {
                        $uf = filter_input(INPUT_POST, "uf", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["bairro"] ) ) {
                        $bairro = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["endereco"] ) ) {
                        $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING);	
                    }
                    if ( isset ( $_POST["numero"] ) ) {
                        $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_STRING);	
                    }


                    if (empty ( $razao_social ) || !preg_match("/^[a-zA-ZÀ-ú\s]+$/",$razao_social) ) {
                        echo '<script>alert("Verificar o Campo Razão Social: !");history.back();</script>';
                    } else if ( empty ( $nome_fantasia ) ) {
                        echo '<script>alert("Preencha o Campo Nome Fantasia !");history.back();</script>';
                        exit;
                    } else if ( empty ( $cnpj ) )  {
                        echo '<script>alert("Preencha o Campo CNPJ !");history.back();</script>';
                        exit;
                    } else if ( empty ( $inscricao_esdadual ) ) {
                        echo '<script>alert("Preencha o Campo Inscrição Estadual !");history.back();</script>';
                        exit;
                    } else if ( empty ( $data_fundacao ) ) {
                        echo '<script>alert("Preencha o Campo Data de Fundação !");history.back();</script>';
                        exit;
                    } else if ( empty ( $telefone ) ) {
                        echo '<script>alert("Preencha o Campo Telefone !");history.back();</script>';
                        exit;
                    } else if ( empty ( $cep ) ) {
                        echo '<script>alert("Preencha o Campo CEP !");history.back();</script>';
                        exit;
                    } else if ( empty ( $cidade ) ) {
                        echo '<script>alert("Preencha o Campo Cidade !");history.back();</script>';
                        exit;
                    } else if ( empty ( $uf ) ) {
                        echo '<script>alert("Preencha o Campo Estado !");history.back();</script>';
                        exit;
                    } else if ( empty ( $bairro ) ) {
                        echo '<script>alert("Preencha o Campo Bairro !");history.back();</script>';
                        exit;
                    } else if ( empty ( $numero ) ) {
                        echo '<script>alert("Preencha o Campo Numero de Endereço !");history.back();</script>';
                        exit;
                    } else {
                        $data_fundacao = $this->ValidaData($data_fundacao);
                        $this->ValidaCPFCNPJ($cnpj);


                    if ( empty($id) ) {
                        // chave simples
                        $chave = "sdfg#$%dfg542143524";
                        $this->SalvarPessoaJuridica($chave,$razao_social,$nome_fantasia,$cnpj,$inscricao_esdadual,$data_fundacao,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero);
                    }

                    if ( !empty($id) ) {
                        // chave simples
                        $chave = "sdfg#$%#gert542143524";
                        $this->EditarPessoaJuridica($chave,$id,$razao_social,$nome_fantasia,$cnpj,$inscricao_esdadual,$data_fundacao,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero);
                    }

                }
               
            } else {
                echo '<script>alert("Ocorreu erro ao carregar a pagina !");history.back();</script>';
                exit;
            }

        }

        public function SalvarPessoaJuridica($chave,$razao_social,$nome_fantasia,$cnpj,$inscricao_esdadual,$data_fundacao,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero) {
            $dados = array();
            $ModelPessoa = new ModelPessoa();

            if ($chave === "sdfg#$%dfg542143524") {

                if ($ModelPessoa->ExistDadosPessoaJuridica($cnpj)) {
                    echo '<script>alert("Já existe um registro com mesmo CNPJ");history.back();</script>';
                    exit;
                }else if($ModelPessoa->CadastrarPessoaJuridica($razao_social,$nome_fantasia,$cnpj,$inscricao_esdadual,$data_fundacao,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero)) {
                    echo '<script>alert("Registro salvo com sucesso !");location.href="'.BASE.'";</script>';
                    exit;
                } else {
                    echo '<script>alert("Ocorreu erro ao savar !");</script>';
                    exit;
                }
            } else {
                echo '<script>alert("Ocorreu erro ao carregar a pagina !");history.back();</script>';
                exit;
            }

        }

        public function EditarPessoaJuridica($chave,$id,$razao_social,$nome_fantasia,$cnpj,$inscricao_esdadual,$data_fundacao,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero) {
            $dados = array();
            $ModelPessoa = new ModelPessoa();

            if ($chave === "sdfg#$%#gert542143524") {

                if ($ModelPessoa->ExistDadosPessoaJuridica2($id,$cnpj)) {
                    echo '<script>alert("Já existe um registro com mesmo CNPJ");history.back();</script>';
                    exit;
                }else if($ModelPessoa->EditarPessoaJuridica($id,$razao_social,$nome_fantasia,$cnpj,$inscricao_esdadual,$data_fundacao,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero)) {
                    echo '<script>alert("Registro editado com sucesso !");location.href="'.BASE.'";</script>';
                    exit;
                } else {
                    echo '<script>alert("Ocorreu erro ao savar !");history.back();</script>';
                    exit;
                }
            } else {
                echo '<script>alert("Ocorreu erro ao carregar a pagina !");history.back();</script>';
                exit;
            }

        }

        public function ValidaCPFCNPJ($cpfcnpj) {
            $cpfcnpj = preg_replace( '/[^0-9]/is', '', $cpfcnpj );
            
            if (strlen($cpfcnpj)  <= 11) {

                    if (strlen($cpfcnpj) != 11) {
                        echo '<script>alert("O CPF precisa ter ao menos 11 números !");history.back();</script>';
                        exit;
                    }

                    if (preg_match('/(\d)\1{10}/', $cpfcnpj)) {
                        echo '<script>alert("CPF inválido !");history.back();</script>';
                        exit;
                    }

                    for ($t = 9; $t < 11; $t++) {
                        for ($d = 0, $c = 0; $c < $t; $c++) {
                                $d += $cpfcnpj{$c} * (($t + 1) - $c);
                        }
                        $d = ((10 * $d) % 11) % 10;
                        if ($cpfcnpj{$c} != $d) {
                                echo '<script>alert("CPF inválido !");history.back();</script>';
                                exit;
                        }
                    }
                    return true;

            } else if (strlen($cpfcnpj) <= 14) {
                    
                    $cpfcnpj = preg_replace('/[^0-9]/', '', (string) $cpfcnpj);

                    if (strlen($cpfcnpj) != 14){
                        echo '<script>alert("CNPJ precisa ter ao menos 14 números !");history.back();</script>';
                        exit;
                    }
                    if (preg_match('/(\d)\1{13}/', $cpfcnpj)) {
                            echo '<script>alert("CNPJ inválido !");history.back();</script>';
                            exit;
                    }
                            
                    for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
                    {
                            $soma += $cpfcnpj{$i} * $j;
                            $j = ($j == 2) ? 9 : $j - 1;
                    }
                    $resto = $soma % 11;
                    if ($cpfcnpj{12} != ($resto < 2 ? 0 : 11 - $resto)) {
                            echo '<script>alert("CNPJ inválido !");history.back();</script>';
                            exit;
                    }
                    for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
                    {
                            $soma += $cpfcnpj{$i} * $j;
                            $j = ($j == 2) ? 9 : $j - 1;
                    }
                    $resto = $soma % 11;
                    if ($cpfcnpj{13} == ($resto < 2 ? 0 : 11 - $resto)) {
                        return true;
                    }else {
                        echo '<script>alert("CNPJ inválido !");history.back();</script>';
                        exit;
                    }
                    

            }
        }

        public function ValidaData($datanac){
            $dataparaTransformar = $datanac;
            $datanac = explode('/', $datanac);
            $checkdate = $datanac;
            $ValidaDataNasc = $datanac;
            
            if ( count ($datanac) == 3) {
                
              $datanac = implode ($datanac);
              $datanac = strlen ($datanac);


                if ($datanac <= 7) {
                    echo '<script>alert("Data de nacimento invalida ! ");history.back();</script>';
                    exit;
                }  else {

                    if(count($checkdate) == 3){
                        $dia = (int)$checkdate[0];
                        $mes = (int)$checkdate[1];
                        $ano = (int)$checkdate[2];
                    
                            if(checkdate($mes, $dia, $ano)){

                                $ValidaDataNasc =  $ValidaDataNasc[2]."-".$ValidaDataNasc[1]."-".$ValidaDataNasc[0];
                                date_default_timezone_set('America/Sao_Paulo');

                                $dataAtual = date('Y-m-d');

                                if ($ValidaDataNasc >= $dataAtual) {
                                    echo '<script>alert("Data de nacimento é maior que data atual !");history.back();</script>';
                                    exit;
                                }else {

                                    $dataparaTransformar = explode("/",$dataparaTransformar);
                                    $datatransformada =  $dataparaTransformar[2]."-".$dataparaTransformar[1]."-".$dataparaTransformar[0];
                                    return $datatransformada;
                                }
                            }else{
                                echo '<script>alert("Data de nacimento é inválida !");history.back();</script>';
                                exit;
                            }

                    }else {
                        echo '<script>alert("Formato da data de nacimento inválida !");history.back();</script>';
                        exit;
                        }
                } 
            } else {
                echo '<script>alert("Formato da data de nacimento inválida !");history.back();</script>';
                exit;
                } 
        }

        public function ExcluirPessoaFisica($id) {
            $dados = array();
            $ModelPessoa = new ModelPessoa();

            if ($ModelPessoa->ExcluirPessoaFisica($id)) {
                echo '<script>alert("Registro excluido com sucesso !");location.href="'.BASE.'"</script>';
                exit;
            } else {
                echo '<script>alert("Ocorreu erro ao excluir !");history.back();</script>';
                exit;
            }

        }
        
        public function ExcluirPessoaJuridica($id) {
            $dados = array();
            $ModelPessoa = new ModelPessoa();

            if ($ModelPessoa->ExcluirPessoaJuridica($id)) {
                echo '<script>alert("Registro excluido com sucesso !");location.href="'.BASE.'"</script>';
                exit;
            } else {
                echo '<script>alert("Ocorreu erro ao excluir !");history.back();</script>';
                exit;
            }

	    }

        
       
}
