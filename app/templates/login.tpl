<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Kalkulator kredytowy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$config->static_url}css/main.css" />
    <noscript><link rel="stylesheet" href="{$config->static_url}css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
        <header id="header" class="alt">
            <a href="{$config->app_url}" class="logo"><strong>Kalkulator kredytowy</strong></a>
        </header>

    <!-- Banner -->
    <section id="banner" class="major">
        <div class="inner">
            {block name=content}
                <header class="major">
                    <h1>Kalkulator kredytowy</h1>
                </header>
                <div class="content">
                    <div class="row">
                        <ul class="actions col-6 col-12-medium">
                            <form method="post" action="{$config->app_url}?page=login">
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
                            {include file="error.tpl"}
                            {include file="info.tpl"}
                        </div>
                    </div>
                </div>
            {/block}
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <ul class="icons">
                <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Paweł Bednarz</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="{$config->static_url}js/jquery.min.js"></script>
<script src="{$config->static_url}js/jquery.scrolly.min.js"></script>
<script src="{$config->static_url}js/jquery.scrollex.min.js"></script>
<script src="{$config->static_url}js/browser.min.js"></script>
<script src="{$config->static_url}js/breakpoints.min.js"></script>
<script src="{$config->static_url}js/util.js"></script>
<script src="{$config->static_url}js/main.js"></script>

</body>
</html>

