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
        $src_tabs += '<div><a href="javascript:;">'+htmlspecialchars($loop.fields['tab-label'])+'</a></div>';
    }

    // 置換
    $html = $html
        .split('<div class="px2-tabs__tabs"></div>')
        .join('<div class="px2-tabs__tabs">'+$src_tabs+'</div>');

    callback($html);
    return;
};