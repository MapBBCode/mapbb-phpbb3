<?php
/**
*
* mapbbcode [English]
*
* @package language
* @version $Id$
* @copyright (c) 2013 Ilya Zverev
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	// editor
	'MAPBB_VIEW' => 'Карта',
	'MAPBB_EDITOR' => 'Редактор',
	'MAPBB_EDITINWINDOW' => 'В окне',
	'MAPBB_EDITINPANEL' => 'Панель',
	'MAPBB_VIEWNORMAL' => 'Панель',
	'MAPBB_VIEWFULL' => 'Во всю ширину',
	'MAPBB_VIEWTITLE' => 'Настройка панели просмотра карты',
	'MAPBB_EDITORTITLE' => 'Настройка редактора карты',
	'MAPBB_EDITINWINDOWTITLE' => 'Редактор будет открываться в новом окне',
	'MAPBB_EDITINPANELTITLE' => 'Редактор встроен в страницу правки сообщения',
	'MAPBB_VIEWNORMALTITLE' => 'Карту можно будет развернуть на всю ширину',
	'MAPBB_VIEWFULLTITLE' => 'Карта будет всегда развёрнута',
	'MAPBB_GROWTITLE' => 'Увеличить размер панели',
	'MAPBB_SHRINKTITLE' => 'Уменьшить размер панели',
	'MAPBB_SELECT_LAYER' => 'Выберите слой',
	'MAPBB_ADD_LAYER' => 'Добавить слой',
	'MAPBB_KEY_NEEDED' => 'Этот слой требует ключ разработчика',
	'MAPBB_BING_KEY' => 'Этот слой требует ключ разработчика (<a href="%s" target="bing">инструкция по получению</a>)',

	'INSTALLER_MAPBBCODE_ADD' => 'Добавление кода Map BBCode в таблицу',
	'INSTALLER_MAPBBCODE_REMOVE' => 'Удаление кода Map BBCode из таблицы',
	'ACP_MAPBBCODE_SETTINGS' => 'MapBBCode',
	'LOG_CONFIG_MAPBBCODE' => '<strong>Изменены настройки MapBBCode</strong>',
	'MAPBB_GLOBAL' => 'Параметры BBCode карт',
	'MAPS_ENABLE' => 'Разрешить карты',
	'MAPBB_CONFIG' => 'Настройка MapBBCode',
	'MAPBB_CONFIG_EXPLAIN' => 'На этой странице вы можете настроить размеры панелей просмотра и редактирования карты, а также состав слоёв.',
	'MAPBB_PANEL_CONFIG' => 'Панель карты',
	'MAPBB_LAYERS' => 'Выбор тайловых слоёв',
	'MAPBB_DEFAULT_ZOOM_POS' => 'Уровень масштаба и координаты по умолчанию',
	'MAPBB_PANEL_SIZE' => 'Размер панели просмотра',
	'MAPBB_FULL_HEIGHT' => 'Высота развёрнутой панели',
	'MAPBB_EDITOR_HEIGHT' => 'Высота панели редактирования карты',
	'MAPBB_WINDOW_SIZE' => 'Размер окна редактора карты',
	'MAPBB_OTHER' => 'Другие параметры',
	'MAPBB_STANDARD_SWITCHER' => 'Убрать список слоёв за кнопку',
	'MAPBB_OUTER_LINK' => 'Шаблон внешней ссылки, если кнопка с ней нужна (параметры: {zoom}, {lat}, {lon})',
	'MAPBB_OUTER_LINK_EXAMPLE' => 'Пример: http://openstreetmap.ru/#layer=M&zoom={zoom}&lat={lat}&lon={lon}',
	'MAPBB_ALLOWED_TAGS' => 'Допустимые теги в надписях (регулярное выражение)'
));

?>
