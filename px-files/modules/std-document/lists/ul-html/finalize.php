<?php
/**
 * finalize.php
 */
return function( $html, $supply ){
    $data = $supply['data']; // モジュールに入力されたデータが供給される。

    if(@strlen($data->fields->class)){
        // 置換
        $html = preg_replace(
            '/^'.preg_quote('<ul>', '/').'/s',
            '<ul class="'.htmlspecialchars($data->fields->class).'">',
            $html
        );
    }

    return $html;
};