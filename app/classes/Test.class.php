<?php
/** \file
 *  \brief Classe model for users table.
 *
 *  This is a sample class for users table. You can delete it from your project and write your own.
 *
 *  \ingroup  models
 *  \author   Fernando Val - fernando.val@gmail.com
 */
use Springy\Model;
use Springy\Security\AclUserInterface;
use Springy\Security\IdentityInterface;

class Test extends Model
{
    protected $tableName = 'tests';
    protected $writableColumns = ['name'];
    protected $insertDateColumn = 'created_at';
    protected $deletedColumn = 'deleted';    

    /**
     *  \brief Regras da validação.
     */
    protected function validationRules()
    {
        return [
            'name'     => 'required',
        ];
    }

    /**
     *  \brief Mensagens da validação.
     */
    protected function validationErrorMessages()
    {
        return [
            'name' => [
                'required' => 'O campo nome deve ser preenchido',
            ],
        ];
    }
}
