$(document).ready(function() {
    $('#delete-multimedia').on('click', function() {
        var archivos_id = [];
        var archivos = $('input[name="archivos_existentes[]"]:checked');
        $.each(archivos, function(key, value) {
            archivos_id.push(value.value);
        });

        var imagenes_id = [];
        var imagenes = $('input[name="imagenes_existentes[]"]:checked');
        $.each(imagenes, function(key, value) {
            imagenes_id.push(value.value);
        });

        var videos_id = [];
        var videos = $('input[name="videos_existentes[]"]:checked');
        $.each(videos, function(key, value) {
            videos_id.push(value.value);
        });

        $.ajax({
            type: 'PUT',
            url: '/admin/noticia/updatemultimedia/1',
            data: {
                'archivos': archivos_id,
                'imagenes': imagenes_id,
                'videos': videos_id
            },
        }).done(function(r) {
            console.log(r);
        }).fail(function(f) {
            console.log(f);
        });
    });
});