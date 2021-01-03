<?php

getRouter()->setDefaultRoute("credit_calc");
getRouter()->setLoginRoute("login");

getRouter()->addRoute("login", null, "LoginController");
getRouter()->addRoute("logout", null, "LoginController", ["user", "administrator"]);
getRouter()->addRoute("credit_calc", null, "CalcController", ["user", "administrator"]);
getRouter()->addRoute("renderTemplate", null, "AdminOnly", ["administrator"]);

getRouter()->go();
