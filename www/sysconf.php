<?php
/**
 * Springy Framework general configuration file.
 *
 * @copyright 2007 Fernando Val
 * @author    Fernando Val <fernando.val@gmail.com>
 *
 * @version   3.4.2.21
 */
$GLOBALS['SYSTEM'] = [
    'SYSTEM_NAME'       => 'Sidney Correia - teste',
    'SYSTEM_VERSION'    => [1, 0, 0],
    'PROJECT_CODE_NAME' => '',
    'CHARSET'           => 'UTF-8',
    'TIMEZONE'          => 'America/Sao_Paulo',

    'ACTIVE_ENVIRONMENT'   => '',
    'ENVIRONMENT_VARIABLE' => 'SPRINGY_ENVIRONMENT',
    'CONSIDER_PORT_NUMBER' => false,
    'ENVIRONMENT_ALIAS'    => [
        'localhost'             => 'development',
        '127\.0\.0\.1'          => 'development',
        'sidney.comsistema.com.br' => 'production',
        'ec2-18-222-237-201.us-east-2.compute.amazonaws.com' => 'production',
    ],

    // Web server doc root directory
    'ROOT_PATH'      => realpath(__DIR__),
    // Project root directory
    'PROJECT_PATH'   => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..'),
    // Springy library directory
    'SPRINGY_PATH'   => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'springy'),
    // Configuration directory
    'CONFIG_PATH'    => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'conf'),
    // Application directory
    'APP_PATH'       => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app'),
    'CONTROLER_PATH' => '',
    'CLASS_PATH'     => '',
    // Directory where the system writes data during the course of its operation
    'VAR_PATH'       => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'var'),
    // Directory for the subdirectories with migration scripts
    'MIGRATION_PATH' => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'migration'),
    /// Vendor directory
    'VENDOR_PATH'    => realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor'),
];

/// Diretório das controladoras
$GLOBALS['SYSTEM']['CONTROLER_PATH'] = realpath($GLOBALS['SYSTEM']['APP_PATH'] . DIRECTORY_SEPARATOR . 'controllers');
/// Diretório das classes da aplicação
$GLOBALS['SYSTEM']['CLASS_PATH'] = realpath($GLOBALS['SYSTEM']['APP_PATH'] . DIRECTORY_SEPARATOR . 'classes');
