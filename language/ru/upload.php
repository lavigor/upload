<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_UPLOAD_EXT_TITLE'				=> 'Загрузка Расширений',
	'ACP_UPLOAD_EXT_CONFIG_TITLE'		=> 'Загрузка расширений',
	'ACP_UPLOAD_EXT_TITLE_EXPLAIN'		=> 'Загрузка Расширений позволяет вам загружать zip файлы расширений или удалять папки расширений с сервера.<br />Имея это расширение, вы можете устанавливать/обновлять/удалять расширения без использования FTP. Если загруженное вами расширение уже существует, его файлы будут заменены на загруженные вами.',
	'UPLOAD'							=> 'Загрузить',
	'BROWSE'							=> 'Обзор...',
	'EXTENSION_UPLOAD'					=> 'Загрузить расширение',
	'EXTENSION_UPLOAD_EXPLAIN'			=> 'Здесь вы можете загрузить со своего компьютера или с удалённого сервера zip файл расширения, содержащий необходимые файлы для установки. “Загрузка Расширений” попытается распаковать архив и подготовить его для установки.<br />Выберите файл или укажите ссылку на источник в полях внизу.',
	'EXT_UPLOAD_INIT_FAIL'				=> 'В процессе инициализации загрузки расширения возникла ошибка.',
	'EXT_NOT_WRITABLE'					=> 'Отсутствуют права на запись для папки ext/. Данные права необходимы для правильной загрузки расширений. Пожалуйста, исправьте права доступа или настройки и попробуйте снова.',
	'EXT_UPLOAD_ERROR'					=> 'Расширение не было загружено. Пожалуйста, убедитеть, что вы загружаете правильный zip файл расширения и попробуйте снова.',
	'NO_UPLOAD_FILE'					=> 'Файл не задан или в процессе загрузки произошла ошибка.',
	'NOT_AN_EXTENSION'					=> 'Загруженный zip файл не является расширением phpBB. Файл не был сохранён на сервере.',

	'EXTENSION_UPLOADED'				=> 'Расширение “%s” загружено успешно.',
	'EXTENSIONS_AVAILABLE'				=> 'Доступные расширения',
	'EXTENSION_INVALID_LIST'			=> 'Список расширений',
	'EXTENSION_UPLOADED_ENABLE'			=> 'Включить загруженное расширение',
	'ACP_UPLOAD_EXT_UNPACK'				=> 'Распаковать расширение',
	'ACP_UPLOAD_EXT_CONT'				=> 'Содержимое расширения: %s',

	'EXTENSION_DELETE'					=> 'Удалить расширение',
	'EXTENSION_DELETE_CONFIRM'			=> 'Вы уверены, что хотите удалить расширение “%s”?',
	'EXT_DELETE_SUCCESS'				=> 'Расширение удалено успешно.',

	'EXTENSION_ZIP_DELETE'				=> 'Удалить zip файл',
	'EXTENSION_ZIP_DELETE_CONFIRM'		=> 'Вы уверены, что хотите удалить zip файл “%s”?',
	'EXT_ZIP_DELETE_SUCCESS'			=> 'Zip файл расширения удалён успешно.',

	'ACP_UPLOAD_EXT_ERROR_DEST'			=> 'Настройки расширения (имя поставщика и название расширения) некорректно заданы или отсутствуют в загруженном zip файле. Файл не был сохранён на сервере.',
	'ACP_UPLOAD_EXT_ERROR_COMP'			=> 'Файл composer.json не был найден в загруженном zip файле. Файл не был сохранён на сервере.',
	'ACP_UPLOAD_EXT_ERROR_NOT_SAVED'	=> 'Файл не был сохранён на сервере.',

	'UPLOAD_EXTENSIONS_DEVELOPERS'		=> 'Разработчики',

	'SHOW_FILETREE'						=> '<< Показать дерево файлов >>',
	'HIDE_FILETREE'						=> '>> Скрыть дерево файлов <<',

	'EXT_UPLOAD_SAVE_ZIP'				=> 'Сохранить загруженный zip файл',
	'ZIP_UPLOADED'						=> 'Загруженные zip файлы расширений',
	'EXT_ENABLE'						=> 'Включить',
	'EXT_UPLOADED'						=> 'загружено',
	'EXT_UPLOAD_BACK'					=> '« Вернуться в Загрузку Расширений',
));
