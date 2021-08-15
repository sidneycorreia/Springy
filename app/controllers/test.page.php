<?php
/**	\file
 * 	\brief Sample controller for the main page.
 *
 *  \copyright  ₢ 2007-2018 Fernando Val.
 *  \author     Fernando Val - fernando.val@gmail.com
 *  \ingroup    controllers
 */
use Springy\Controller;

class Test_Controller extends Controller
{
    /**
     *  \brief Método principal (default).
     *
     *  Este método é executado se nenhum outro método for definido na URI para ser chamado, quando essa controladora é chamada.
     */
    public function _default()
    {
        $model  = new Test();
        $model->load(null);
        $rows   = $model->all();
        
        $tpl = $this->_template();
        $tpl->assign('rows', $rows);
        $tpl->display();
    }
}
