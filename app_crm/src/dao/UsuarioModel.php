<?php

namespace src\dao;

use src\DB;
use src\interfaces\ICadastro;
use src\interfaces\INotificacao;
use src\interfaces\ILog;

use src\componentes\Log;
use src\componentes\Notificacao;

class UsuarioModel extends DB implements ICadastro, INotificacao, ILog {
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