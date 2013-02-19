<form action="" id="searchform">
	<fieldset>
		<legend>Busca</legend>
		<input type="text" name="s" id="s" required aria-required="true" aria-label="Procurar por" placeholder="Digite e tecle 'Enter'" value="<?php the_search_query(); ?>">
		<button type="submit">Ok</button>
	</fieldset>
</form>