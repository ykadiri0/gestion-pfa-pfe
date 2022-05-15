$(document).ready(function() {



    $("#niveau1").change(function() {
        var n = $(this).val();
        $.ajax({
            url: "ws/loadByNiveau.php",
            data: { niveau: n },
            type: 'POST',
            success: function(data, textStatus, jqXHR) {
                remplir(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {

            }
        });
    });

    function remplir(data) {
        var ligne = "";
        data.forEach(function(e) {
            ligne += '<tr><td>' + e.id + '</td><td>' + e.Mbr1 + '</td><td>' + e.Mbr2 + '</td><td>' + e.Mbr3 + '</td><td>' + e.filiere + '</td><td>' + e.niveau + '</td><td>' + e.Professeur + '</td></tr>';
        });

        $("#content").html(ligne);
    }

});