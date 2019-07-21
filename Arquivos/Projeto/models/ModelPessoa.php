<?php 
	class ModelPessoa extends model { 

		public function ExistDadosPessoaFisica ($cpf) {

			$sql = $this->db->prepare("SELECT * FROM pessoa_fisica WHERE cpf = ?");
			$sql->bindParam(1, $cpf);
			$sql->execute();

			if($sql->rowCount() > 0) {
				return true;
				$db = null;
				exit;
			} else {
				return false;
				$db = null;
				exit;
			}
		}

		public function ExistDadosPessoaFisica2($id,$cpf) {
			$dados = array();
			$sql =$this->db->prepare("SELECT * FROM pessoa_fisica WHERE cpf = ? LIMIT 1");
			$sql->bindParam(1, $cpf);
			$sql->execute();

			if($sql->rowCount() > 0) {
				$dados = $sql->fetch(PDO::FETCH_OBJ);
							
					if ($id != $dados->id) {
						return true;
						exit;
					} else {
						return false;
						exit;
					}
	
			} else {
				return false;
				exit;
			}
	
		} 

		public function ExistDadosPessoaJuridica($cnpj) {

			$sql = $this->db->prepare("SELECT * FROM pessoa_juridica WHERE cnpj = ?");
			$sql->bindParam(1, $cnpj);
			$sql->execute();

			if($sql->rowCount() > 0) {
				return true;
				$db = null;
				exit;
			} else {
				return false;
				$db = null;
				exit;
			}
		}

		public function ExistDadosPessoaJuridica2($id,$cnpj) {
			$dados = array();
			$sql =$this->db->prepare("SELECT * FROM pessoa_juridica WHERE cnpj = ? LIMIT 1");
			$sql->bindParam(1, $cnpj);
			$sql->execute();

			if($sql->rowCount() > 0) {
				$dados = $sql->fetch(PDO::FETCH_OBJ);
							
					if ($id != $dados->id) {
						return true;
						exit;
					} else {
						return false;
						exit;
					}
	
			} else {
				return false;
				exit;
			}
	
		} 

		public function CadastrarPessoaFisica($nome,$cpf,$rg,$sexo,$datanac,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero) {

			$sql = $this->db->prepare("INSERT INTO pessoa_fisica (id,nome,cpf,rg,sexo,dataNasc,telefone,cep,cidade,uf,bairro,endereco,numEnd) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
				
			$sql->bindParam(1, $nome);
			$sql->bindParam(2, $cpf);
			$sql->bindParam(3, $rg);
			$sql->bindParam(4, $sexo);
			$sql->bindParam(5, $datanac);
			$sql->bindParam(6, $telefone);
			$sql->bindParam(7, $cep);
			$sql->bindParam(8, $cidade);
			$sql->bindParam(9, $uf);
			$sql->bindParam(10, $bairro);
			$sql->bindParam(11, $endereco);
			$sql->bindParam(12, $numero);
				
			if ($sql->execute()) {
				return true;
				$db = null;
				exit;
			} else {
				return false;
				$db = null;
				exit;
			}
			
		}

		public function CadastrarPessoaJuridica($razao_social,$nome_fantasia,$cnpj,$inscricao_esdadual,$data_fundacao,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero) {

			$sql = $this->db->prepare("INSERT INTO pessoa_juridica (id,razao_social,nome_fantasia,cnpj,inscricao_esdadual,data_fundacao,telefone,cep,cidade,uf,bairro,endereco,numEnd) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

			$sql->bindParam(1, $razao_social);
			$sql->bindParam(2, $nome_fantasia);
			$sql->bindParam(3, $cnpj);
			$sql->bindParam(4, $inscricao_esdadual);
			$sql->bindParam(5, $data_fundacao);
			$sql->bindParam(6, $telefone);
			$sql->bindParam(7, $cep);
			$sql->bindParam(8, $cidade);
			$sql->bindParam(9, $uf);
			$sql->bindParam(10, $bairro);
			$sql->bindParam(11, $endereco);
			$sql->bindParam(12, $numero);
				
			if ($sql->execute()) {
				return true;
				$db = null;
				exit;
			} else {
				return false;
				$db = null;
				exit;
			}
			
		}

		public function PessoaFisica() {
            $dados = array();
			$sql = $this->db->prepare("SELECT * FROM pessoa_fisica");
		
			if($sql->execute()) {
				$dados = $sql->fetchAll();
				return $dados;
				$db = null;
				exit;
			}else {
				return false;
				$db = null;
				exit;
			}
	
		}

		public function PessoaJuridica() {
			$dados = array();
			
			$sql = $this->db->prepare("SELECT * FROM pessoa_juridica ");

			if($sql->execute()) {
				$dados = $sql->fetchAll();
				return $dados;
				$db = null;
				exit;
			}else {
				return false;
				$db = null;
				exit;
			}
	
		}

		public function BuscarDadosPessoaFisica($id) {
			$sql = $this->db->prepare("SELECT *,date_format(dataNasc,'%d/%m/%Y') dataNasc FROM pessoa_fisica WHERE id = ?");
			$sql->bindParam(1, $id);
			$sql->execute();
			
			if($sql->rowCount() > 0) {
				$dados = $sql->fetch(PDO::FETCH_OBJ);
				return $dados;
				$db = null;
				exit;
			}else {
				return false;
				$db = null;
				exit;
			}
	
		}

		public function BuscarDadosPessoaJuridica($id) {
			$sql = $this->db->prepare("SELECT *,date_format(data_fundacao,'%d/%m/%Y') data_fundacao FROM pessoa_juridica WHERE id = ?");
			$sql->bindParam(1, $id);
			$sql->execute();
			
			if($sql->rowCount() > 0) {
				$dados = $sql->fetch(PDO::FETCH_OBJ);
				return $dados;
				$db = null;
				exit;
			}else {
				return false;
				$db = null;
				exit;
			}
	
		}

		public function EditarPessoaFisica($id,$nome,$cpf,$rg,$sexo,$datanac,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero) {

				$sql = $this->db->prepare("UPDATE pessoa_fisica SET  nome = ?, cpf = ?, rg = ?, sexo = ?, dataNasc = ?, telefone = ?, cep = ?, cidade = ?, uf = ?, bairro = ?, endereco = ?, numEnd = ? WHERE id = ? LIMIT 1");
				$sql->bindParam(1, $nome);
				$sql->bindParam(2, $cpf);
				$sql->bindParam(3, $rg);
				$sql->bindParam(4, $sexo);
				$sql->bindParam(5, $datanac);
				$sql->bindParam(6, $telefone);
				$sql->bindParam(7, $cep);
				$sql->bindParam(8, $cidade);
				$sql->bindParam(9, $uf);
				$sql->bindParam(10, $bairro);
				$sql->bindParam(11, $endereco);
				$sql->bindParam(12, $numero);
				$sql->bindParam(13, $id);
				 
				if ( $sql->execute()) {
					return true;
					$db = null;
					exit;
				}else {
					return false;
					$db = null;
					exit;
				}	

		}

		public function EditarPessoaJuridica($id,$razao_social,$nome_fantasia,$cnpj,$inscricao_esdadual,$data_fundacao,$telefone,$cep,$cidade,$uf,$bairro,$endereco,$numero) {

			$sql = $this->db->prepare("UPDATE pessoa_juridica SET  razao_social = ?, nome_fantasia = ?, cnpj = ?, inscricao_esdadual = ?, data_fundacao = ?, telefone = ?, cep = ?, cidade = ?, uf = ?, bairro = ?, endereco = ?, numEnd = ? WHERE id = ? LIMIT 1");
			$sql->bindParam(1, $razao_social);
			$sql->bindParam(2, $nome_fantasia);
			$sql->bindParam(3, $cnpj);
			$sql->bindParam(4, $inscricao_esdadual);
			$sql->bindParam(5, $data_fundacao);
			$sql->bindParam(6, $telefone);
			$sql->bindParam(7, $cep);
			$sql->bindParam(8, $cidade);
			$sql->bindParam(9, $uf);
			$sql->bindParam(10, $bairro);
			$sql->bindParam(11, $endereco);
			$sql->bindParam(12, $numero);
			$sql->bindParam(13, $id);
			 
			if ( $sql->execute()) {
				return true;
				$db = null;
				exit;
			}else {
				return false;
				$db = null;
				exit;
			}	

		}


		public function ExcluirPessoaFisica($id) {

			$sql = $this->db->prepare("DELETE FROM pessoa_fisica WHERE id = ? LIMIT 1");
			$sql->bindParam(1, $id);
			
			if ($sql->execute()) {
				return true;
				$db = null;
				exit;
			}else {
				return false;
				$db = null;
				exit;
			}
	
		   }
		   
		public function ExcluirPessoaJuridica($id) {

			$sql = $this->db->prepare("DELETE FROM pessoa_juridica WHERE id = ? LIMIT 1");
			$sql->bindParam(1, $id);
			
			if ($sql->execute()) {
				return true;
				$db = null;
				exit;
			}else {
				return false;
				$db = null;
				exit;
			}
	
		}
		   
	}


 ?>