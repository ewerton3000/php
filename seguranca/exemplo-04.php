
<!--Script que mostra a caixa do recaptcha -->
<script src=https:www.google.com/recaptcha/api.js></script>

<!--Criando um formulário para digitar um email -->
<form action="cadastrar.php" method=post>

<!--Criando uam div para usar a class recaptcha e usarndo a chave publica(caracteres aleatórios)-->
	<div class="g-recaptcha" data-sitekey="6Lc-0toaAAAAADcQ2k3x63mljcXM9oITEcBNPbCZ"></div>
	<!--Criando um input do tipo email-->
	<input type="email" name="inputEmail">]
     <!--Criando um input do tipo submit para confirmar a informação(email)!-->
	<button type="submit">Enviar</button>
	<!--Fechando a tag de formulario!-->
	</form>