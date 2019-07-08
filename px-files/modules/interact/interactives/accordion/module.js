window.addEventListener('load', function(e){
	var accordionModules = document.querySelectorAll('.px2-accordion');
	for(var idx = 0; idx < accordionModules.length; idx ++){
		// console.log(idx);
		var units = accordionModules[idx].querySelectorAll(':scope > .px2-accordion__unit');
		for(var idx2 = 0; idx2 < units.length; idx2 ++){
			units[idx2].classList.remove('px2-accordion--active');
		}

		for(var idxUnit = 0; idxUnit < units.length; idxUnit ++){
			var a = units[idxUnit].querySelector(':scope > .px2-accordion__label > a');
			var content = units[idxUnit].querySelector(':scope > .px2-accordion__content');
			(function(idxUnit, unit, units, a, content){
				// console.log(idxUnit);
				a.addEventListener('click', function(e){
					if(unit.classList.contains("px2-accordion--active")){
						unit.classList.remove('px2-accordion--active');
					}else{
						unit.classList.add('px2-accordion--active');
					}
				});
			})(idxUnit, units[idxUnit], units, a, content);
		}
		// console.log(units);
	}
});