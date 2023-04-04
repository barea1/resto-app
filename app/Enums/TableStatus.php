<?php

namespace App\Enums;

enum TableStatus: string{
    case Pendiente = 'pendiente';
    case Disponible = 'disponible';
    case No_disponible = 'no_disponible';
}