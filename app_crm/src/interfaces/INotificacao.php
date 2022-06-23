<?php

namespace src\interfaces;

use src\componentes\Notificacao;

interface INotificacao {
    public function enviarNotificacao(Notificacao $notificacao);
}