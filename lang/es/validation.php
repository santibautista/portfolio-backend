<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'email'    => 'El campo :attribute debe ser una dirección de correo válida.',
    'min'      => [
        'string' => 'El campo :attribute debe contener al menos :min caracteres.',
    ],
    'max'      => [
        'string' => 'El campo :attribute no debe contener más de :max caracteres.',
    ],
    'string'   => 'El campo :attribute debe ser una cadena de texto.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    | Esto hace que en lugar de decir "The nombre field...", 
    | diga "El campo nombre..." de forma natural.
    */
    'attributes' => [
        'nombre'  => 'nombre',
        'email'   => 'correo electrónico',
        'mensaje' => 'mensaje',
    ],
];