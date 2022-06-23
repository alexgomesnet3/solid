<?php

namespace src\dao;

use src\DB;
use src\interfaces\ICadastro;
use src\interfaces\INotificacao;

use src\componentes\Log;
use src\componentes\Notificacao;

class LeadModel extends DB implements ICadastro, INotificacao {
    public function salvar() {
        // logica de salvar
    }

    public function enviarNotificacao(Notificacao $notificacao) {
        // logica de enviarNotificacao
    }
}