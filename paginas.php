<?php 

if(isset($_GET['pg'])){

switch($_GET['pg']){
		
		//Venda
		case'venda';
		include "nav/venda.php";
		break;

		//Fluxo de Caixa
		case'fluxo-caixa';
		include "nav/fluxo-caixa.php";
		break;

		//Item - Cadastrar
		case'inseri-item';
		include "nav/inseri-item.php";
		break;

        //Item - Consultar
		case'consulte-item';
		include "nav/consulte-item.php";
		break;
		
		//Loja > Cadastrar Produto
		case'inseri-produto';
		include "nav/inseri-produto.php";
		break;

		//Cliente > Inseri Cliente
		case'inseri-cliente';
		include "nav/inseri-cliente.php";
		break;

		//Cliente > Inseri Cliente
		case'inseri-cliente';
		include "nav/inseri-cliente.php";
		break;

		//Cliente > Update
		case'update-cliente';
		include "nav/update-cliente.php";
		break;

		//Cliente > Relatorio Ativo
		case'relatorio-ativos';
		include "nav/relatorio-ativos.php";
		break;

		//Cliente > Relatorio Inativo
		case'relatorio-inativos';
		include "nav/relatorio-inativos.php";
		break;

	    //Cliente > Detalhes
		case'detail-cliente';
		include "nav/detail-cliente.php";
		break;

		//Despesa > Inseri Tipo Despesa
		case'inseri-despesa';
		include "nav/inseri-despesa.php";
		break;
		
		case'despesas-futuras';
		include "nav/despesas-futuras.php";
		break;

		case'detail-pag';
		include "nav/detail-pag.php";
		break;

		case'detail-compras';
		include "nav/detail-compras.php";
		break;

		case'inseri-tipo-despesa';
		include "nav/inseri-tipo-despesa.php";
		break;

		//Perfil
		case'perfil';
		include "nav/perfil.php";
		break;
		
		
		default:
		include ("home.php");
		break;

}
}else{

		include("nav/principal.php");



}