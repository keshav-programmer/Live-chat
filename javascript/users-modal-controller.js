function modalclik(imgtag) {

    // get modal
    var modal = $('#myModal');
    var img = $(imgtag);

    // set image
    var modalImage = $('#img01');
    modalImage.attr('src', img.attr('src'));

    // set header
    var header = img.next().children('span').text();
    $('#image-name').text(header);
    modal.show();
}

$(document).ready(function () {
    // close modal on close button click
    $('#modal-close').click(function (e) { 
        e.preventDefault();
        $('#myModal').hide();
    });    
});
