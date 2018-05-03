/**
 * finalize.js
 */
module.exports = function(html, callback, supply){

	/* ここに加工するコードを書く。 */

	var $ = supply.cheerio.load(html, {decodeEntities: false});
	$('.module_sample_sample2__select2')
		.css({
			'border': '1px solid #000'
		})
	;

	// 完成したHTMLは、callback() に渡して返します。
	callback( $.html() );
	return true;
}
