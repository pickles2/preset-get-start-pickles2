/**
 * finalize.js
 */
module.exports = function( $html, callback, $supply ){
    var $data = $supply['data']; // モジュールに入力されたデータが供給される。
    var $src_tabs = '';
    function htmlspecialchars($str){
        $str = $str.split('&').join('&amp;');
        $str = $str.split('"').join('&quot;');
        $str = $str.split('<').join('&lt;');
        $str = $str.split('>').join('&gt;');
        return $str;
    }
    for(var idx in $data.fields.loop ){
        var $loop = $data.fields.loop[idx];
        var $tabLabel = null;
        if( $loop.fields['tab-label'] && $loop.fields['tab-label'].src && $loop.fields['tab-label'].src.length ){
            // Broccoli v0.4.0〜 への対応
            $tabLabel = $loop.fields['tab-label'].src;
        }else if( $loop.fields['tab-label'] && $loop.fields['tab-label'].length ){
            // それより古い Broccoli への対応
            $tabLabel = $loop.fields['tab-label'];
        }
        $src_tabs += '<div><a href="javascript:;">'+htmlspecialchars($tabLabel)+'</a></div>';
    }

    // 置換
    $html = $html
        .split('<div class="px2-tabs__tabs"></div>')
        .join('<div class="px2-tabs__tabs">'+$src_tabs+'</div>');

    callback($html);
    return;
};