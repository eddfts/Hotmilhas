// JavaScript Document
function valida_campos()
{
	
	if(document.getElementById('nome_conta').value == '')
		{
			alert("Por favor, preencha o campo 'Nome'!");
			document.getElementById('nome_conta').focus();
			return false;
		}

	/*if(document.getElementById('email_usu').value == '')
		{
			alert('Por favor, preencha os campos obrigatórios.');
			document.getElementById('numero_conta').focus();
			return false;
		}
	if(document.getElementById('senha_usu').value == '' || document.getElementById('senha_usu').value != document.getElementById('senha2_usu').value)
		{
			alert('Por favor, as senhas não conferem, por favor, redigite.');
			document.getElementById('senha_usu').focus();
			return false;
		}*/
}

function valida_campo_conta(){
	if(document.frmConta.selConta.selectedIndex==0){
            alert("Informe uma 'Conta', se não possuir cadastre uma!");
            document.frmConta.selConta.focus();
            return true;
        }
}