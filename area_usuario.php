<?php
define('QUADODO_IN_SYSTEM', true);
require_once('qls/includes/header.php');
$qls->Security->check_auth_page('members.php');
if ($qls->user_info['username'] != '') {
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="arquivos/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function($){
   $("#datanasc").mask("99/99/9999");
   $("#telfixo").mask("(99) 9999-9999");
   $("#celular").mask("(99) 9999-9999");
   $("#CPF").mask("999.999.999-99");
   $("#RG").mask("99.999.999-9");
   $("#cep").mask("99999-999");
});
</script>
<?php include('cabecalho.php') ?>

</head>

<body class="generic">

	<div id="main">
		<?php include('menu.php') ?>
		
		<?php $submit=$_POST['submit']; ?>
		<form name="cadastro" method="post" action="atualiza.php">
		<?php
		$usuario=$qls->user_info['username'];
		//include("arquivos/DBconn.php");
		include("qls/DBconn.php");
		$dbname="database";
		$link = connectToDB($dbname) or die('Não foi possível conectar ao banco de dados.');
		
		$query = "SELECT cep,email,celular,cidade,endereco,bairro,RG,CPF,nomecompleto,telfixo,sexo,datanasc FROM qls3_users WHERE username=\"".$usuario."\";";
		
		$resultado = mysql_query($query,$link);
		$verifica= mysql_fetch_array($resultado);
		$email=$verifica['email'];
		$cep=$verifica['cep'];
		$celular=$verifica['celular'];
		$cidade=$verifica['cidade'];
		$cidad=explode("/",$cidade);
		
		$endereco=$verifica['endereco'];
		$bairro=$verifica['bairro'];
		$RG=$verifica['RG'];
		$CPF=$verifica['CPF'];
		$nomecompleto=$verifica['nomecompleto'];
		$telfixo=$verifica['telfixo'];
		$sexo=$verifica['sexo'];
		$datanasc=$verifica['datanasc'];
		?>
		
		<div id="schemanav">
			<div class="module">
				<div class="module-content">
					<h2 class="module-header">Informações</h2>
					<p style="padding:1em;"><a href="area_usuario_mapa.php">Mapa</a></p>
					<p style="padding:1em;"><a href="area_usuario.php">Cadastro</a></p>
				</div>
				
				<div class="module-content"><!-- widgets -->
					<?php
					echo"<p align='center'><iframe allowtransparency='true' marginwidth='0' marginheight='0' hspace='0' vspace='0' frameborder='0' scrolling='no' src='http://www.cptec.inpe.br/widget/widget.php?p=".$cidad[0]."&w=p&c=2192b5&f=ffffff' height='154px' width='120px'></iframe></p>";
					?>
					<p align="center"><iframe src="http://monitor.ntp.br/horacerta/button.php" frameborder="0" scrolling="no" height="90" width="120" marginheight="0px" allowtransparency="true"></iframe></p>
				</div>
			</div><!--/ .module-content -->
		</div><!--/ .module-->
		
		<div id="content">
			<div style="position:relative;top:10px;width:100%;">
				<div class="module-content">
					<p>Olá, <?php echo $qls->user_info['username']; ?>! Seu cadastro está assim:</p>
					<br>
					<table><tbody>
					<?php
					echo "<tr><td>Nome completo </td><td> <input type='text' style='width:270px;' name='nomecompleto' value='$nomecompleto'> </td><td>Sexo&nbsp&nbsp&nbsp";
					if($sexo=='M'){
						echo "<input type='radio' name='sexo' value='M' checked>M&nbsp<input type='radio' name='sexo' value='F'>F</td></tr>";
					}elseif($sexo=='F'){
						echo "<input type='radio' name='sexo' value='M'>M&nbsp<input type='radio' name='sexo' value='F' checked>F</td></tr>";
					}else{
						echo "<input type='radio' name='sexo' value='M'>M&nbsp<input type='radio' name='sexo' value='F'>F</td></tr>";
					}
					echo "<tr><td>Data de nascimento &nbsp</td><td> <input type='text' style='width:100px;' name='datanasc' value='$datanasc' id='datanasc'> </td></tr>";
					echo "<tr><td>RG </td><td> <input type='text' style='width:100px;' name='RG' value='$RG' id='RG'> </td></tr>";
					echo "<tr><td>CPF </td><td> <input type='text' style='width:120px;' name='CPF' value='$CPF' id='CPF'> </td></tr>";
					echo "<tr><td>Telefone fixo</td><td> <input type='text' style='width:150px;' name='telfixo' value='$telfixo' id='telfixo'> </td></tr>";
					echo "<tr><td>Celular </td><td><input type='text' style='width:150px;' name='celular' value='$celular' id='celular'> </td></tr>";
					echo "<tr><td>E-mail </td><td> <input type='text' style='width:200px;' name='email' value='$email'> </td></tr>";
					echo "<tr><td>Endereço </td><td> <input type='text' style='width:300px;' name='endereco' value='$endereco'> </td></tr>";
					echo "<tr><td>Bairro </td><td> <input type='text' style='width:150px;' name='bairro' value='$bairro'> </td></tr>";
					echo "<tr><td>CEP </td><td> <input type='text' style='width:100px;' name='cep' value='$cep' id='cep'> </td></tr>";
					echo "<tr><td></td><td><p style='font-size:13px;'><a href='http://www.buscacep.correios.com.br/servicos/dnec/index.do' target='_blank'>pesquisar CEP</a></p></td></tr>";
					echo "<tr><td>Cidade </td><td>&nbsp";
					include('nomes_cidades.php')
					?>
					</td></tr>
					</tbody></table>
					<br><input type='submit' value='Atualizar'>
					</form>
					<? include('qls/html/request_password_change_form.php') ?>
					
					<img src="arquivos/img.jpg" alt="img" style="position: absolute;bottom:0;right:0">
				</div><!--/ .module-content -->
			</div><!--/ .module lookupchart odd#neighborhoods -->
		</div><!--content-->
		
	</div><!--/main-->

	<?php include('rodape.php') ?>
	
</body>

<?
}

?>
