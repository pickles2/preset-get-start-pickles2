/**
 * finalize.js
 */
module.exports = function( $html, callback, $supply ){
    var $data = $supply['data']; // モジュールに入力されたデータが供給される。

    if($data.fields.class && $data.fields.class.length){
        $html = $html
            .split(/^\<ul\>/g)
            .join('<ul class="'+$data.fields.class+'">');
    }

    callback($html);
    return;
};