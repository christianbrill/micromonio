$(document).ready(function() {

    $('#inputForm').submit(function(event) {

        event.preventDefault();

        var nameValue = $('#name').val();
        var releaseYearValue = $('#releaseYear').val();
        var publisherValue = $('#publisher').val();
        var genreValue = $('#genre').val();
        var consoleValue = $('#console').val();
        var imageValue = $('#image').val();

        $.ajax({
            url: '../../../app/Model/ModifyModel.php?name='+nameValue+'&year='+releaseYearValue+'&publisher='+publisherValue+'&genre='+genreValue+'&console='+consoleValue+'&image='+imageValue,
            type: 'POST',
            data: {
                'name': nameValue,
                'year': releaseYearValue,
                'publisher': publisherValue,
                'genre': genreValue,
                'console': consoleValue,
                'image': imageValue
            }
        }).done(function() {
            alert("It worked.")
        });
    }); // form submit end
}); // document.ready end
