var loadFile = function(event) {
    var image = document.getElementById('show_foto');
    image.src = URL.createObjectURL(event.target.files[0]);
};