<?php
/** \file
 *  \brief      Configurations for Springy\URI class.
 *  \copyright  Copyright (c) 2007-2016 Fernando Val
 *  \warning    Este arquivo é parte integrante do framework e não pode ser omitido.
 */

/**
 *  \defgroup uricfg_production Configurações da classe de tratamento de URI/URL para o ambiente 'production'
 *  \ingroup uricfg.
 *
 *  As entradas colocadas nesse arquivo serão aplicadas apenas ao ambiente 'production'.
 *
 *  Seu sistema pode não possuir esse ambiente, então use-o como modelo para criação do arquivo de
 *  parâmetros de configuração para os ambientes que seu sistema possua.
 *
 *  Veja \link uricfg Configurações da classe de tratamento de URI/URL \endlink para entender as entradas de configuração possíveis.
 *
 *  \see uricfg
 */
/**@{*/

/// Configurações para o ambiente de Produção
$conf = [
    'host_controller_path' => [
        //'sidney.comsistema.com.br' => [null],
    ],
    'dynamic' => $_SERVER['HTTP_HOST'],
    'static'  => $_SERVER['HTTP_HOST'],
    'secure'  => $_SERVER['HTTP_HOST'],
];

/**@}*/
