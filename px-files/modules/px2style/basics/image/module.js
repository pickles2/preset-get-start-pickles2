if( window.px2style && !window.px2style.basicsImageScope ){
	window.px2style.basicsImageScope = function(imgElm){
		let imgSrc = imgElm.src;
		let htmlSrc =
	`<div class="px2-image-scope">
		<div class="px2-image-scope__inner">
			<div class="px2-image-scope__img"><img src="${imgSrc}" alt="" /></div>
		</div>
	</div>`;
		window.px2style.modal({
			"width": "100%",
			"body": htmlSrc,
		});
	}
}
