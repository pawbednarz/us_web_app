<header id="header" class="alt">
    <a href="{$config->app_url}" class="logo"><strong>Kalkulator kredytowy</strong></a>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>

<nav id="menu">
    <ul class="links">
        <li><a href="{$config->app_url}?page=credit_calc">Kalkulator</a></li>
        <li><a href="{$config->app_url}?page=show_history">Historia</a></li>
        {if $user_role == "administrator"}
            <li><a href="{$config->app_url}?page=admin_only">Admin</a></li>
        {/if}
    </ul>
    <ul class="actions stacked">
        <li><a href="{$config->app_url}?page=logout" class="button fit">Wyloguj</a></li>
    </ul>
</nav>
