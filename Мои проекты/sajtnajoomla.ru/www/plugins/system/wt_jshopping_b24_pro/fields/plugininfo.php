<?php
/**
 * @package     WT JoomShopping B24 PRO
 * @version     2.3.0
 * @Author 		Sergey Tolkachyov, https://web-tolk.ru
 * @copyright   Copyright (C) 2020 Sergey Tolkachyov
 * @license     GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
 * @since 		2.3.0
 */

defined('_JEXEC') or die;

use Joomla\CMS\Form\FormHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Language\Text;
use \Joomla\CMS\Factory;
FormHelper::loadFieldClass('spacer');

class JFormFieldPlugininfo extends JFormFieldSpacer
{

	protected $type = 'plugininfo';

	/**
	 * Method to get the field input markup for a spacer.
	 * The spacer does not have accept input.
	 *
	 * @return  string  The field input markup.
	 *
	 * @since   1.7.0
	 */
	protected function getInput()
	{
		return ' ';
	}

	/**
	 * @return  string  The field label markup.
	 *
	 * @since   1.7.0
	 */
	protected function getLabel()
	{
		$info="";
		$doc = Factory::getDocument();
		$doc->addStyleDeclaration("
			.wt-b24-plugin-info{
				box-shadow: 0 .5rem 1rem rgba(0,0,0,.15); 
				padding:1rem; 
				margin-bottom:2 rem;
			}
		");

		$wtb24_plugin_info = simplexml_load_file(JPATH_SITE."/plugins/system/wt_jshopping_b24_pro/wt_jshopping_b24_pro.xml");


		?>
		<div class="media wt-b24-plugin-info">
			<img class="media-object pull-left" src="../plugins/system/wt_jshopping_b24_pro/img/bitrix24-logo.jpg"/>
			<div class="media-body">
				<span class="label label-success">v.<?php echo $wtb24_plugin_info->version; ?></span>
				<?php echo Text::_("PLG_WT_JSHOPPING_B24_PRO_DESC2"); ?>
			</div>
		</div>
<?php

	}

	/**
	 * Method to get the field title.
	 *
	 * @return  string  The field title.
	 *
	 * @since   1.7.0
	 */
	protected function getTitle()
	{
		return $this->getLabel();
	}

	/**
	 * Method to get a control group with label and input.
	 *
	 * @param   array  $options  Options to be passed into the rendering of the field
	 *
	 * @return  string  A string containing the html for the control group
	 *
	 * @since   3.7.3
	 */
	public function renderField($options = array())
	{
		$options['class'] = empty($options['class']) ? 'field-spacer' : $options['class'] . ' field-spacer';

		return parent::renderField($options);
	}
}
?>