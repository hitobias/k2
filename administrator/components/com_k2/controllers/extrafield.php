<?php
/**
 * @version    2.10.x
 * @package    K2
 * @author     JoomlaWorks https://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2019 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class K2ControllerExtraField extends K2Controller
{
    public function display($cachable = false, $urlparams = array())
    {
        JRequest::setVar('view', 'extrafield');
        parent::display();
    }

    public function apply()
    {
        $this->save();
    }

    public function save()
    {
        JRequest::checkToken() or jexit('Invalid Token');
        $model = $this->getModel('extraField');
        $model->save();
    }

    public function saveAndNew()
    {
        $this->save();
    }

    public function cancel()
    {
        $application = JFactory::getApplication();
        $application->redirect('index.php?option=com_k2&view=extrafields');
    }
}
