<?php

namespace App;

enum ReunionStatus: string
{
    case aceptada = 'Aceptada';
    case cancelada = 'Cancelada';
    case pendiente = 'Pendiente';
}