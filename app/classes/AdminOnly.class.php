<?php

namespace app\classes;

class AdminOnly {

    private function renderTemplate(){
        getSmarty() -> display("admin.tpl");
    }

    public function admin_only() {
        $this->renderTemplate();
    }
}
