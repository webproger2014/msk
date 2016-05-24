
window.onload = function () {
    var data = [];
    setImgInSlider(data);
}

function setImgInSlider(data) {
    var lng =  data.length;
    $('#owl-example').text('');
    for (s = 0; s < lng; s++) {
        $('#owl-example').append("<div><img src='"+data[s]+"'></div>")
    }

    setToolSlider();
}

function setToolSlider() {
    $('.owl-carousel').owlCarousel({
       items:1,
       margin:10,
       autoHeight:true
    });    
}


