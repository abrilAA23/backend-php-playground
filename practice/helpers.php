<?php

function validateAgeTest(int $age): bool
{
    return $age >= 18;
}
function getRoleMessage(string $role): string
{
    if ($role === "admin") {
        return "Acceso total";
    }

    if ($role === "user") {
        return "Acceso limitado";
    }

    return "Acceso denegado";
}
function sanitizeName(string $name): string
{
    return trim(htmlspecialchars($name));
}
