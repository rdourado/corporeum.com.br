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
				<form action="multimarcas.html" method="post" id="multimarcasform">
					<fieldset>
						<legend>Multimarcas</legend>
						<p class="field field-razao-social">
							<label for="razao-social">Razão Social*</label><br>
							<input type="text" name="razao-social" id="razao-social" required aria-required="true">
						</p>
						<p class="field field-telefone">
							<label for="telefone">Telefone*</label><br>
							<input type="text" name="telefone" id="telefone" required aria-required="true">
						</p>
						<p class="field field-cnpj">
							<label for="cnpj">CNPJ*</label><br>
							<input type="text" name="cnpj" id="cnpj" required aria-required="true">
						</p>
						<p class="field field-cidade">
							<label for="cidade">Cidade*</label><br>
							<input type="text" name="cidade" id="cidade" required aria-required="true">
						</p>
						<p class="field field-contato">
							<label for="contato">Nome (Contato)*</label><br>
							<input type="text" name="contato" id="contato" required aria-required="true">
						</p>
						<p class="field field-estado">
							<label for="estado">Estado*</label><br>
							<input type="text" name="estado" id="estado" required aria-required="true">
						</p>
						<p class="field field-endereco">
							<label for="endereco">Endereço*</label><br>
							<input type="text" name="endereco" id="endereco" required aria-required="true">
						</p>
						<p class="field field-sobre">
							<label for="sobre">Conte-nos um pouco sobre sua loja*</label><br>
							<textarea name="sobre" id="sobre" cols="30" rows="10" required aria-required="true"></textarea>
						</p>
						<p class="field field-email">
							<label for="email">E-mail*</label><br>
							<input type="text" name="email" id="email" required aria-required="true">
						</p>
						<p class="antispam">
							<label for="gotcha">Campo antispam. Por favor, ignore-o.</label><br>
							<input type="text" name="gotcha" id="gotcha">
						</p>
						<p class="field field-submit">
							<button type="submit">Enviar</button>
						</p>
					</fieldset>
				</form>
			</div>
		</article>
<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>