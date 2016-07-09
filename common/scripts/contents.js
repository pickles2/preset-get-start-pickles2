<?php /*
このJSファイルは、モジュールのJSをロードするために、
PHPコードを解釈するように設定されています。
この設定は、 config.php の $conf->paths_proc_type に書かれています。
必要に応じて設定を変更することができます。
*/ ?>
(function(){
<?php
print (new \tomk79\pickles2\px2dthelper\main($px))->document_modules()->build_js();
?>
})();
