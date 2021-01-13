<?php
    declare(strict_types = 1);

    function getPermissionsByRole(string $role) : Array {
        
        $permissions = [
            'ADMIN' => [
                'Visualizar usuarios',
                'Registrar usuarios',
                'Editar usuarios',
                'Eliminar usuarios',
            ],
            'MOD' => [
                'Visualizar usuarios',
                'Registrar usuarios',
            ]
        ];

        return $permissions[$role] ?? [
            'Visualizar usuarios'
        ];
    }

    var_dump(getPermissionsByRole('GUEST'));