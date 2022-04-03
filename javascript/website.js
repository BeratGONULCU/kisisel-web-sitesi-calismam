

(function() {

    window.addEventListener('load',init);

    function init(){
    let openPicture= document.getElementById("button");
    openPicture.addEventListener('click',openThePicture);
    }

    function openThePicture(){
        let picture=document.getElementById("resim");
        picture.src="img/cde.png";
    }

})();




