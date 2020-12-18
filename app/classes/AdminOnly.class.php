<?php

namespace app\classes;

class AdminOnly {

    function renderTemplate() {
        getSmarty() -> display("admin.tpl");
    }
}
