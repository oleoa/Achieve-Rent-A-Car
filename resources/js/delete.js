var deleteButtons = document.getElementsByClassName('delete');

for (var i = 0; i < deleteButtons.length; i++) {
    deleteButtons[i].addEventListener('click', function (button) {
        var deleteDiv = document.getElementById('delete-warning-'+button.target.id);
        deleteDiv.style.display = 'block';
    });
}

var cancelButtons = document.getElementsByClassName('cancel');
for (var i = 0; i < cancelButtons.length; i++) {
    cancelButtons[i].addEventListener('click', function (button) {
        var deleteDiv = document.getElementById('delete-warning-'+button.target.id);
        deleteDiv.style.display = 'none';
    });
}
