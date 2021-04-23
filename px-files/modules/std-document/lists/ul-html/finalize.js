/**
 * finalize.js
 */
module.exports = function( $html, callback, $supply ){
    var $data = $supply['data']; // モジュールに入力されたデータが供給される。

    var $className = null;
    if( $data.fields.class && $data.fields.class.src && $data.fields.class.src.length ){
        // Broccoli v0.4.0〜 への対応
        $className = $data.fields.class.src;
    }else if( $data.fields.class && $data.fields.class.length ){
        // それより古い Broccoli への対応
        $className = $data.fields.class;
    }

    if( $className && $className.length ){
        $html = $html
            .split(/^\<ul\>/g)
            .join('<ul class="'+$className+'">');
    }

    callback($html);
    return;
};