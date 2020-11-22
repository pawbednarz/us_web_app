{extends file="./main.tpl"}

{block name=content}
		<header class="major">
	    	<h2>Strona dostępna tylko dla zalogowanych użytkowników</h2>
			<h3>Zalogowano jako {$username|default:"NONE"}</h3>
    	</header>
{/block}
