<?php
if(IN_MANAGER_MODE!="true") die("<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the MODx Content Manager instead of accessing this file directly.");
if(!$modx->hasPermission('settings')) {
	$e->setError(3);
	$e->dumpError();
}
$data = $_POST;
// lose the POST now, gets rid of quirky issue with Safari 3 - see FS#972
unset($_POST);

if($data['friendly_urls']==='1' && strpos($_SERVER['SERVER_SOFTWARE'],'IIS')===false)
{
	$htaccess        = $modx->config['base_path'] . '.htaccess';
	$sample_htaccess = $modx->config['base_path'] . 'ht.access';
	if(!file_exists($htaccess))
	{
		if(file_exists($sample_htaccess))
		{
			if(!@rename($sample_htaccess,$htaccess))
{
	$warnings[] = $_lang["settings_friendlyurls_alert"];
			}
			elseif($modx->config['base_url']!=='/')
			{
				$subdir = rtrim($modx->config['base_url'],'/');
				$_ = file_get_contents($htaccess);
				$_ = preg_replace('@RewriteBase.+@',"RewriteBase {$subdir}", $_);
				if(!@file_put_contents($htaccess,$_))
				{
					$warnings[] = $_lang["settings_friendlyurls_alert2"];
				}
			}
		}
	}
	else
	{
		$_ = file_get_contents($htaccess);
		if(strpos($_,'RewriteBase')===false)
		{
			$warnings[] = $_lang["settings_friendlyurls_alert2"];
		}
	}
}

if (isset($data) && count($data) > 0) {
	$savethese = array();
	$data['sys_files_checksum'] = $modx->manager->getSystemChecksum($data['check_files_onlogin']);
	foreach ($data as $k => $v) {
		switch ($k) {
            case 'settings_version':{
                if($modx->getVersionData('version')!=$data['settings_version']){
                    $modx->logEvent(17,2,'<pre>'.var_export($data['settings_version'],true).'</pre>','fake settings_version');
                $v = $modx->getVersionData('version');
            }
            break;
            }
			case 'error_page':
			case 'unauthorized_page':
			if (trim($v) == '' || !is_numeric($v)) {
				$v = $data['site_start'];
			}
			break;
	
			case 'lst_custom_contenttype':
			case 'txt_custom_contenttype':
				// Skip these
				continue 2;
				break;
			case 'rb_base_dir':
			case 'rb_base_url':
			case 'filemanager_path':
				if (substr(trim($v), -1) !== '/') {
					$v = $v .'/';
				}
				break;
            case 'manager_language':
                $langDir = realpath(MODX_MANAGER_PATH . 'includes/lang');
                $langFile = realpath(MODX_MANAGER_PATH . 'includes/lang/' . $v . '.inc.php');
                $langFileDir = dirname($langFile);
                if($langDir !== $langFileDir || !file_exists($langFile)) {
                    $v = 'english';
                }
			default:
			break;
		}
		$v = is_array($v) ? implode(",", $v) : $v;

		$savethese[] = '(\''.$modx->db->escape($k).'\', \''.$modx->db->escape($v).'\')';
	}
	
	// Run a single query to save all the values
	$sql = "REPLACE INTO ".$modx->getFullTableName("system_settings")." (setting_name, setting_value)
		VALUES ".implode(', ', $savethese);
	if(!@$rs = $modx->db->query($sql)) {
		echo "Failed to update setting value!";
		exit;
	}
	
	// Reset Template Pages
	if (isset($data['reset_template'])) {
		$template = $data['default_template'];
		$oldtemplate = $data['old_template'];
		$tbl = $dbase.".`".$table_prefix."site_content`";
		$reset = $data['reset_template'];
		if($reset==1) $modx->db->query("UPDATE $tbl SET template = '$template' WHERE type='document'");
		else if($reset==2) $modx->db->query("UPDATE $tbl SET template = '$template' WHERE template = $oldtemplate");
	}
	
	// empty cache
	include_once "cache_sync.class.processor.php";
	$sync = new synccache();
	$sync->setCachepath("../assets/cache/");
	$sync->setReport(false);
	$sync->emptyCache(); // first empty the cache
}
$header="Location: index.php?a=7&r=10";
header($header);
