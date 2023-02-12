<?php
/**
 * finalize.php
 */
return function( $html, $supply ){
    $data = $supply['data']; // モジュールに入力されたデータが供給される。
    $src_tabs = '';
    foreach($data->fields->loop as $loop){
        $tabLabel = null;
        if( is_object($loop->fields->{'tab-label'}) && is_string($loop->fields->{'tab-label'}->src) && strlen(''.$loop->fields->{'tab-label'}->src) ){
            // Broccoli v0.4.0〜 への対応
            $tabLabel = $loop->fields->{'tab-label'}->src;
        }elseif( is_string($loop->fields->{'tab-label'}) && strlen(''.$loop->fields->{'tab-label'}) ){
            // それより古い Broccoli への対応
            $tabLabel = $loop->fields->{'tab-label'};
        }
        $src_tabs .= '<div><a href="javascript:;">'.htmlspecialchars($tabLabel).'</a></div>';
    }

    // 置換
    $html = preg_replace(
        '/'.preg_quote('<div class="px2-tabs__tabs"></div>', '/').'/s',
        '<div class="px2-tabs__tabs">'.$src_tabs.'</div>',
        $html
    );

    return $html;
};