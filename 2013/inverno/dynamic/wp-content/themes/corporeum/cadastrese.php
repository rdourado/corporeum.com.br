<?php 
/*
Template name: Multimarcas
*/
?>
<?php get_header(); ?>
	<div id="body">
<?php 	while( have_posts() ) : the_post(); ?>
		<article id="content" class="hentry">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
				Cadastre-se e receba informações exclusivas sobre lançamentos, eventos, promoções, dicas de produção de moda e novidades Corporeum.

<form id="formulario_cadastro" action="contato.php" method="post" name="contatoviasite">
          
           <fieldset>

                <input class="input_radio" name="pessoa" value="fisica" checked type="radio"/>
                <label for="pessoa" class="label_radio">Pessoa Física</label>
         
           	<input class="input_radio" name="pessoa" value="juridica" type="radio"/>
                <label for="pessoa" class="label_radio">Pessoa Jurídica</label>

                <label for="cpf">CPF/CNPJ*</label>
                <input name="cpf" type="text" required aria-required="true"/>

                <label for="email">E-mail*</label>
                <input name="email" type="email" required aria-required="true"/>

                <label for="telefone">Telefone</label>
                <input name="ddd-telefone" type="text" class="input_ddd" /> 
                <input name="telefone" type="text" class="input_tel" />

                <label for="celular">Celular</label>
                <input name="ddd-celular" type="text" class="input_ddd" /> 
                <input name="celular" type="text" class="input_tel" />

                <p class="campos_obrigatorios">* Campos obrigatórios</p>
               
            </fieldset>
            <fieldset>
         
                <label for="endereco">Endereço completo*</label>
                <input name="endereco" type="text" required aria-required="true"/>

                <label for="bairro">Bairro*</label>
                <input name="bairro" type="text" required aria-required="true"/>

                <label for="cidade">Cidade*</label>
                <input name="cidade" type="text" required aria-required="true"/>

                <label for="estado">Estado*</label>
                <input name="estado" type="text" required aria-required="true"/>

                <label for="cep">CEP*</label>
                <input name="cep" type="text" required aria-required="true"/>          
                
                <button type="submit">Enviar</button>
            
            </fieldset>

</form>

<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>