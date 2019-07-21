$(document).ready(function() {
    function limpa_formulário_cep(id_cep) {
        if (id_cep === "cep") {
            $("#cidade").val("");
            $("#uf").val("");
            $("#bairro").val("");
            $("#endereco").val("");
        }else {
            $("#cidadeform2").val("");
            $("#ufform2").val("");
            $("#bairroform2").val("");
            $("#enderecoform2").val("");
        }
    }
    
    $("#cep, #cep2").blur(function() {

        var id_cep = $(this).attr("id");
        var cep = $("#"+id_cep).val().replace(/\D/g, '');
        
        if (cep != "") {

            var validacep = /^[0-9]{8}$/;

            if(validacep.test(cep)) {

                if (id_cep === "cep") {
                    $("#cidade").val("...");
                    $("#uf").val("...");
                    $("#bairro").val("...");
                    $("#endereco").val("...");
                }else {
                    $("#cidadeform2").val("...");
                    $("#ufform2").val("...");
                    $("#bairroform2").val("...");
                    $("#enderecoform2").val("...");
                }

                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                       
                        if (id_cep === "cep") {
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                            $("#bairro").val(dados.bairro);
                            $("#endereco").val(dados.logradouro);

                        }else {
                            $("#cidadeform2").val(dados.localidade);
                            $("#ufform2").val(dados.uf);
                            $("#bairroform2").val(dados.bairro);
                            $("#enderecoform2").val(dados.logradouro);
                        }

                    } 
                    else {
                        limpa_formulário_cep(id_cep);
                        alert("CEP não encontrado.");
                    }
                });
            } 
            else {
                limpa_formulário_cep(id_cep);
                alert("Formato de CEP inválido.");

                if (id_cep === "cep") {
                    $('#cep').val('');
                    $('#cep').focus();
                }else {
                    $('#cep2').val('');
                    $('#cep2').focus();
                }

            }
        } 
        else {
            limpa_formulário_cep(id_cep);
        }
    });
});
