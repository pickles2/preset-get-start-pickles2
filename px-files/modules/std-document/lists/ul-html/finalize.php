<?php
/**
 * finalize.php
 */
return function( $html, $supply ){
    $data = $supply['data']; // モジュールに入力されたデータが供給される。

    $className = null;
    if( is_object($data->fields->class) && is_string($data->fields->class->src) && strlen(''.$data->fields->class->src) ){
        // Broccoli v0.4.0〜 への対応
        $className = $data->fields->class->src;
    }elseif( is_string($data->fields->class) && strlen(''.$data->fields->class) ){
        // それより古い Broccoli への対応
        $className = $data->fields->class;
    }

    if( strlen(''.$className) ){
        // 置換
        $html = preg_replace(
            '/^'.preg_quote('<ul>', '/').'/s',
            '<ul class="'.htmlspecialchars($className).'">',
            $html
        );
    }

    return $html;
};