<?php
/**
*
* @package phpBB Extension - File Upload
* @copyright (c) 2017 dmzx - http://www.dmzx-web.net
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
	'FILEUPLOAD_UPLOAD'						=> 'Dosya-Yükleme',
	'FILEUPLOAD_UPLOAD_SECTION'				=> 'Dosya Yükleme bölümü',
	'FILEUPLOAD_UPLOAD_MESSAGE'				=> 'Dosyanızı buraya yükleyin. (Bu klasörün boşaltılacağını ve tüm yüklemelerin kaydedildiğini unutmayın)',
	'FILEUPLOAD_NOT_ENABELD'					=> 'Dosya Yükleme etkin değil',
	'FILEUPLOAD_NEW_DOWNLOAD_SIZE'				=> 'Dosyanın maksimum boyutu <strong>%1$s %2$s</strong>! İhtiyaç duyabileceğiniz yükleme süresine göre bu değer daha düşük olabilir!',
	'FILEUPLOAD_NO_FILENAME'					=> 'Yüklemenize ait bir dosya girmeniz gerekiyor!',
	'FILEUPLOAD_FILE_TOO_BIG'					=> 'Dosya izin verilen değerden büyük!',
	'FILEUPLOAD_NEW_ADDED'						=> 'Girişiniz veritabanına başarıyla eklendi',
	'FILEUPLOAD_CURRENT_VERSION'				=> 'Versiyon',
	'FILEUPLOAD_NEW_FILENAME'					=> 'Dosya adı',
	'FILEUPLOAD_SUCCEEDED'						=> 'Yükleme Başarılı!',
	'FILEUPLOAD_DIRECT_LINK'					=> 'Bağlantı linki',
	'FILEUPLOAD_URL_LINK'						=> 'URL',
	'FILEUPLOAD_FILE_LINK'						=> 'DOSYA',
	'FILEUPLOAD_BY'							=> 'Dosyayı Yükleyen',
));
