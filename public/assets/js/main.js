$(document).ready(function() {

    $('#searchForm').submit(function(event) {

        event.preventDefault();

        var inputValue = $('#inputSearch').val();

        $.ajax() {
            url: './././app/Model/ModifyModel.php?name='+inputValue,
            type: 'POST',
            dataType: 'json'
        }



    }); // form submit end
}); // document.ready end
