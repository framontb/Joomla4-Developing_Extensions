<?php

\defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

echo "<hr>Hier kannst du einen Headertext anzeigen.<hr>";

if ($this->item->params->get('show_name')) {
	if ($this->Params->get('show_foo_name_label')) {
		echo Text::_('COM_FOOS_NAME') . $this->item->name;
	} else {
		echo $this->item->name;
	}
}

echo "<hr>Hier kannst du eine Fußzeile anzeigen.<hr>";

echo $this->item->event->afterDisplayTitle;
echo $this->item->event->beforeDisplayContent;
echo $this->item->event->afterDisplayContent;