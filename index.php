<?php
$maintenance_mode = 0;
if (!$maintenance_mode && file_exists('app/share/core/lib/index.php')) {
    require 'app/share/core/lib/index.php';
} else {
    // definition de quelques constantes de base
    if (!defined('__BASE_URL__')) {
        $tmp = substr(__FILE__, strlen(preg_replace('/\/$/', '', $_SERVER['DOCUMENT_ROOT'])));
        $tmp = substr($tmp, 0, - strlen('/index.php'));
        $uname = explode(' ', php_uname('s'));
        define('__OS__', strtolower($uname[0]));
        if (__OS__ == 'windows') {
            $tmp = str_replace('\\', '/', $tmp);
        }
        define('__BASE_URL__', $tmp);
    }
    define('__FILES_ROOT__'     , str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'] . __BASE_URL__));
    define('__WWW_ROOT__'       , 'http://' . $_SERVER['SERVER_NAME'] . __BASE_URL__);

    $maintenance_file = 'app/local/site/maintenance.php';
    if (file_exists($maintenance_file)) {
        require $maintenance_file;
    } else {
?><!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Installation de Clémentine</title>
    <link rel="stylesheet" href="<?php echo __WWW_ROOT__; ?>/install/style.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body>
    <div id="wrapper">
        <div id="main">
            <h1>Merci d'avoir choisi Clémentine</h1>
<?php
    if (!is_dir(__FILES_ROOT__ . '/install')) {
?>
            <p>
                Avant toute chose, vous devez <a href="http://clementine.quai13.com/modules/install.zip">récupérer l'installeur</a> et le décompresser à la racine du site.
            </p>
            <p>
                Puis <a href="" target="">rafraîchissez cette page</a>.
            </p>
<?php
    } else {
?>
            <p>
                <fieldset id="Astuce">
                    <legend>Astuce</legend>
                    Le fichier <em><?php echo $maintenance_file; ?></em> s'affichera à la place de cette page s'il existe.
                </fieldset>
            </p>
            <div class="boutons">
                <a class="next" href="<?php echo __WWW_ROOT__; ?>/install/">Lancer l'installation</a>
            </div>
<?php
    }
?>
        </div>
    </div>
</body>
</html><?php
    }
}
