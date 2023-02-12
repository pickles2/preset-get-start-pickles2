(function(){
	if( !window.px2style || window.px2style.basicsUtilsViewportFit ){
		return;
	}
	window.px2style.basicsUtilsViewportFit = true;

	let eventHandler = function(){
		document.querySelectorAll('.px2-viewport-fit__inner').forEach(( inner )=>{
			inner.style.left = (-1 * document.body.clientWidth / 2) + 'px';
			inner.style.width = document.body.clientWidth + 'px';
		});
	};
	window.addEventListener('DOMContentLoaded', eventHandler);
	window.addEventListener('resize', eventHandler);
})();
