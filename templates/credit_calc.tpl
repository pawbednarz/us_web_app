{extends file="./main.tpl"}

{block name=content}
	<header class="major">
    	<h2>Oblicz ratę kredytu</h2>
	</header>
	<div class="content">
	    <div class="row">
		    <ul class="actions col-6 col-12-medium">
				<form method="post" action="{$controllers_url}credit_calc.php">
					<div class="fields">
						<div class="field">
							<label for="amount">Kwota: </label>
							<input type="text" name="amount" id="amount" />
						</div>
						<div class="field">
							<label for="years">Lata: </label>
							<input type="text" name="years" id="years" />
						</div>
						<div class="field">
	    					<label for="percentage">Oprocentowanie: </label>
							<input type="text" name="percentage" id="percentage" />
						</div>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Oblicz" class="primary" /></li>
					</ul>
				</form>
			</ul>
			<div class="col-6 col-12-medium messages">
				
				{if (!$messages->is_empty())}
					<h4>Bląd</h4>
					<ul class="alt error">
						{foreach $messages->get_errors() as $msg}
							<li>{$msg}</li>
						{/foreach}
					</ul>
				{/if}
				{if (isset($rate) && !is_nan($rate))}
					<h4>Wynik:</h4>
						<ul class="alt success">
							<li>Miesięczna rata: {$rate}</li>
						</ul>	
				{/if}

	    	</div>
	    </div>
	</div>
{/block}
