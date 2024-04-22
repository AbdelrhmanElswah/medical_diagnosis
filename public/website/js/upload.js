
document.addEventListener("DOMContentLoaded", function () {

    const dropArea = document.getElementById("drop-area");
    const inputFile = document.getElementById("input-file");
    const imageView = document.getElementById("img-view");
    const checkButton = document.getElementById("check-button");

    inputFile.addEventListener("change", uploadImage)

    function uploadImage() {
        let imgLink = URL.createObjectURL(inputFile.files[0]);
        imageView.style.backgroundImage = `url(${imgLink})`;
        imageView.textContent = "";
        imageView.style.border = 0;
        checkButton.hidden = false;
    }

    dropArea.addEventListener("dragover", function (e) {
        e.preventDefault();
    });

    dropArea.addEventListener("drop", function (e) {
        e.preventDefault();
        inputFile.files = e.dataTransfer.files;
        uploadImage();
    
    });
});