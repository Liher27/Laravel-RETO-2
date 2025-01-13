<?php

namespace App;

enum ReunionStatus: string
{
    case aceptada = 'Aceptada';
    case cancelada = 'Pancelada';
    case pendiente = 'Pendiente';
}