<?php

namespace src\interfaces;

use src\componentes\Log;
use src\componentes\Notificacao;

interface ICadastro {
    public function salvar(); 
    public function registrarLog(Log $log);
    public function enviarNotificacao(Notificacao $notificacao);
}