window.Px2BroccoliModuleStdDocument_ImageScope = function(imgElm){
    let scope = document.querySelector('.px2-image-scope');
    if( scope ){
        scope.remove();
    }
    let imgSrc = imgElm.src;
    let htmlSrc =
`<div class="px2-image-scope">
    <div class="px2-image-scope__inner">
        <button type="button" class="px2-image-scope__close"></button>
        <div class="px2-image-scope__img"><img src="${imgSrc}" alt="" /></div>
    </div>
</div>`;
    imgElm.outerHTML += htmlSrc;
    document.body.style.overflow = "hidden";
    document.querySelector('.px2-image-scope__close').addEventListener('click', function(){
        let scope = document.querySelector('.px2-image-scope');
        scope.querySelector('.px2-image-scope__inner').classList.add('px2-image-scope__inner--closed');
        setTimeout(function(){
            scope.remove();
            document.body.style.overflow = '';
            delete(document.body.style.overflow);
        }, 300);
    })
}
