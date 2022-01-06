document.querySelector('#sort-asc').onclick = mySort;
document.querySelector('#sort-desc').onclick = mySortDesc;

function mySort() {
    let nav = document.querySelector('#nav');
    for(let i = 0; i < nav.children.length;i++){
        for(let j = i; j < nav.children.length; j++){
            if (+nav.children[i].getAttribute('data-sort') > +nav.children[j].getAttribute('data-sort')){
                replacedNode = nav.replaceChild(nav.children[j], nav.children[i]);
                insertAfter(replacedNode, nav.children[i]);

            }       
        }
    }
}

function mySortDesc() {
    let nav = document.querySelector('#nav');
    for(let i = 0; i < nav.children.length;i++){
        for(let j = i; j < nav.children.length; j++){
            if (+nav.children[i].getAttribute('data-sort') < +nav.children[j].getAttribute('data-sort')){
                replacedNode = nav.replaceChild(nav.children[j], nav.children[i]);
                insertAfter(replacedNode, nav.children[i]);
            }       
        }
    }
}

function insertAfter(elem, refElem) {
    return refElem.parentNode.insertBefore(elem, refElem.nextSibling);
}
