document.querySelector('#elastic').oninput = function(){
    let val = this.value.trim();
    let elasticItems = document.querySelectorAll('.bestseller__ul li');
    console.log(elasticItems);
    if(val != ''){
        elasticItems.forEach(function(elem){
            if (elem.innerText.search(val) == -1) {
                elem.classList.add('hide');
            }
            else {
                elem.classList.remove('hide');
                let str = elem.innerText;
            }
        });
    }
    else {
        elasticItems.forEach(function(elem){
            elem.classList.remove('hide');
            
        });
    }
}


