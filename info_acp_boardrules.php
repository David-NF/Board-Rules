<?php
/**
*
* Board Rules extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// ACP general langauge
	'ACP_BOARDRULES'					=> 'Forum regels',
	'ACP_BOARDRULES_MANAGE'				=> 'Bewerk forum regels',
	'ACP_BOARDRULES_MANAGE_EXPLAIN'		=> 'Vanaf deze pagina kan je forum regels toevoegen, wijzigen, verwijderen en ook categoriën en regels rangschrikken. Een categorie is een samenstelling van regels, elke categroie kan een onbeperkt aantal regels bevatten',
	'ACP_BOARDRULES_SETTINGS'			=> 'Instellingen forum regels',
	'ACP_BOARDRULES_SETTINGS_EXPLAIN'	=> 'Hier kan je de instellingen van de forum regels aanpassen.',

	// ACP rule settings form language
	'ACP_BOARDRULES_CATEGORY'				=> 'Regel categorie',
	'ACP_BOARDRULES_ENABLE'					=> 'Forum regels inschakelen',
	'ACP_BOARDRULES_HEADER_LINK'			=> 'Plaats een link naar de forum regels in de header',
	'ACP_BOARDRULES_AT_REGISTRATION'		=> 'Verplicht nieuwe gebruikers de regels te accepteren bij registratie',
	'ACP_BOARDRULES_AT_REGISTRATION_EXPLAIN'=> 'Deze optie voegt een regel toe aan de “voorwaarden” verplicht nieuw gerigistreerde gebruikers de forum regels te lezen en te accepteren.',
	'ACP_BOARDRULES_RULE'					=> 'Regel',
	'ACP_BOARDRULES_SELECT_LANGUAGE'		=> 'Selecteer taal',
	'ACP_BOARDRULES_SETTINGS_CHANGED'		=> 'Forum regels instellingen succesvol bijgewerk.',
	'ACP_BOARDRULES_NOTIFY'					=> 'Notificeer gebruiker',
	'ACP_BOARDRULES_NOTIFY_EXPLAIN'			=> 'Stuur een notificatie naar alle geregistreerde gebruikers dat de forum regels zijn aangepast (Dit kan enkele seconden duren op een forum met duizende gebruikers.)',
	'ACP_BOARDRULES_NOTIFY_CONFIRM'			=> 'Weet je zeker dat je een notificatie wilt versturen naar alle geregistreerde gebruikers?',
	'ACP_BOARDRULES_NOTIFY_LOG'				=> '<strong>Notificatie succesvol verstuurd</strong>',

	// ACP rule add/edit form language
	'ACP_BOARDRULES_CREATE_RULE'			=> 'Creeër regel',
	'ACP_BOARDRULES_CREATE_RULE_EXPLAIN'	=> 'Het formulier hieronder staat je toe om en nieuwe regel toe te voegen.',
	'ACP_BOARDRULES_EDIT_RULE'				=> 'Wijzig regel',
	'ACP_BOARDRULES_EDIT_RULE_EXPLAIN'		=> 'Het formulier hieronder staat je toe om een bestaande regel te wijzigen.',
	'ACP_RULE_SETTINGS'						=> 'Rule settings',
	'ACP_RULE_TITLE'						=> 'Rule title',
	'ACP_RULE_TITLE_EXPLAIN'				=> 'Rule titles are displayed on the rules page for rule categories only. Rule titles are also used to identify your rules when managing them in the ACP.',
	'ACP_RULE_ANCHOR'						=> 'Rule anchor',
	'ACP_RULE_ANCHOR_EXPLAIN'				=> 'Rule anchors are optional and are used as link anchor points on the rules page. They should be URL friendly (contain no spaces or special characters) and should begin with a letter.',
	'ACP_RULE_MESSAGE'						=> 'Rule message',
	'ACP_RULE_MESSAGE_EXPLAIN'				=> 'The rule message is displayed on the rules page for each rule (categories do not display a rule message).',

	// ACP rule management language
	'ACP_ADD_RULE'				=> 'Creeër nieuwe regel',
	'ACP_DELETE_RULE_CONFIRM'	=> 'Weet je zeker dat je deze regel wilt verwijderen?',
	'ACP_RULE_ADDED'			=> 'Regel succesvol toegevoegd.',
	'ACP_RULE_DELETED'			=> 'Regel succesvol verwijderd.',
	'ACP_RULE_EDITED'			=> 'Regel succesvol gewijzigd.',
	'ACP_RULE_TITLE_EMPTY'		=> 'Je moet een titel opgeven voor de forum regel.',
));
