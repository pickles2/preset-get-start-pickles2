window.addEventListener('load', function(e){
	var tabModules = document.querySelectorAll('.px2-tabs');
	for(var idx = 0; idx < tabModules.length; idx ++){
		// console.log(idx);
		var tabs = tabModules[idx].querySelectorAll(':scope > .px2-tabs__tabs > div > a');
		var contents = tabModules[idx].querySelectorAll(':scope > .px2-tabs__contents > .px2-tabs__content');
		for(var idx2 = 0; idx2 < tabs.length; idx2 ++){
			tabs[idx2].classList.remove('px2-tabs--active');
		}
		for(var idx2 = 0; idx2 < contents.length; idx2 ++){
			contents[idx2].classList.remove('px2-tabs--active');
		}
		tabs[0].classList.add('px2-tabs--active');
		contents[0].classList.add('px2-tabs--active');

		for(var idxTab = 0; idxTab < tabs.length; idxTab ++){
			(function(idxTab, tab, content, tabs, contents){
				// console.log(idxTab);
				tab.addEventListener('click', function(e){
					for(var idx2 = 0; idx2 < tabs.length; idx2 ++){
						tabs[idx2].classList.remove('px2-tabs--active');
					}
					for(var idx2 = 0; idx2 < contents.length; idx2 ++){
						contents[idx2].classList.remove('px2-tabs--active');
					}
					tab.classList.add('px2-tabs--active');
					content.classList.add('px2-tabs--active');
				});
			})(idxTab, tabs[idxTab], contents[idxTab], tabs, contents);
		}
		// console.log(tabs);
	}
});