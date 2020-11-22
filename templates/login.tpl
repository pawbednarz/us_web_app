{extends file="./main.tpl"}

{block name=menu}{/block}

{block name=content}
        <header class="major">
            <h1>Kalkulator kredytowy</h1>
        </header>
        <div class="content">
            <div class="row">
                <ul class="actions col-6 col-12-medium">
                    <form method="post" action="{$controllers_url}security/login.php">
                        <div class="fields">
                            <div class="field">
                                <label for="login">Login</label>
                                <input type="text" name="login" id="login" />
                            </div>

                            <div class="field">
                                <label for="password">Hasło</label>
                                <input type="password" name="password" id="password" />
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Zaloguj" class="primary" /></li>
                        </ul>
                    </form>
                </ul>
                <div class="col-6 col-12-medium messages">
        
    				{if (isset($messages) && count($messages) > 0)}
	    				<h4>Bląd</h4>
		    			<ul class="alt error">
			    			{foreach $messages as $msg}
				    			<li>{$msg}</li>
					    	{/foreach}
    					</ul>
	    			{/if}
        
                </div>
            </div>
        </div>
{/block}
