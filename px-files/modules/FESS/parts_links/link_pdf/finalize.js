/**
 * finalize.js
 */
module.exports = function(html, callback){
	delete(require.cache[require('path').resolve(__filename)]);
	var cheerio = require('cheerio');

	function trim(str){
		str = str.replace(new RegExp('^\\s*', 'g'),'');
		str = str.replace(new RegExp('\\s*$', 'g'),'');
		return str;
	}

	var $ = cheerio.load(html, {decodeEntities: false});
	$('p').each(function(){
		var $this = $(this);
		$this.replaceWith( $this.html().trim() );
	});
	$('a').each(function(){
		var $this = $(this);
		$this.html( $this.html().trim() );
	});
	html = $.html().trim();

	// 完成したHTMLは、callback() に渡して返します。
	callback(html);
	return true;
}
