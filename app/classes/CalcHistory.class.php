<?php

namespace app\classes;

class CalcHistory {

    private function getCalcHistory() {
        return getDb()->select("calc_history", "*");
    }

    private function renderTemplate() {
        getSmarty() -> assign('history_data', $this->getCalcHistory());
        getSmarty() -> assign("username", $_SESSION["username"]);
        getSmarty() -> assign("role", $_SESSION["role"]);
        getSmarty() -> display("history.tpl");
    }

    public function show_history() {
        $this->renderTemplate();
    }
}
