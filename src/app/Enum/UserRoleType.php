<?php declare(strict_types=1);

namespace App\Enum;

enum UserRoleType: int
{
    case Normal = 1;
    case Admin = 2;
}
