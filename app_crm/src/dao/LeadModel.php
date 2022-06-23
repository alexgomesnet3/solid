<?php

namespace src\dao;

use src\DB;
use src\interfaces\ICadastro;
use src\componentes\Log;
use src\componentes\Notificacao;

class LeadModel extends DB implements ICadastro {
    public function salvar() {
        // logica de salvar
    }

    public function registrarLog(Log $log) {
        // logica de registrarLog
    }

    public function enviarNotificacao(Notificacao $notificacao) {
        // logica de enviarNotificacao
    }
}