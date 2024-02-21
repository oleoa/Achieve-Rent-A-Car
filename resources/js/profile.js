document.addEventListener('DOMContentLoaded', function () {
    var inputImage = document.getElementById('inputImage');
    var profileImage = document.getElementById('profileImage');
    var cropper;

    inputImage.addEventListener('change', function (e) {
        var file = e.target.files[0];
        var reader = new FileReader();

        reader.onload = function (event) {
            profileImage.src = event.target.result;
            if (cropper) {
                cropper.destroy();
            }
            cropper = new Cropper(profileImage, {
                aspectRatio: 1,
                viewMode: 2,
                preview: '.img-preview'
            });
        };

        reader.readAsDataURL(file);
    });
});
