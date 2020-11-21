$(function() {
    $('#deleteModal').on('hidden.bs.modal', function() {
        // Efface le contenu de la fenêtre modale à la fermeture
        $('#deleteModalContent').html('');
    });
    $('#menu_delete_article').click(function() {
        var delete_article_url = $(this).attr('href');
        $.ajax({
            url: delete_article_url
        }).done(function(data) {
            $('#deleteModalContent').html(data);
            $('#cancel_delete').click(function() {
                $('#deleteModal').modal('hide');
                return false;
            });
            $('#deleteModal').modal('show');
        });
        return false;
    });
});