
$(document).ready(function () {
    $('#dt').DataTable( {
        "language": {
            "search" : "Szukaj",
            "lengthMenu": "Pokaż _MENU_ rekordów na stronę",
            "zeroRecords": "Nic nie znaleziono",
            "info": "Strona _PAGE_ z _PAGES_",
            "infoEmpty": "Żaden rekord nie jest dostępny",
            "infoFiltered": "(Pokazuje _MAX_ ze wszystkich rekordów)"
        }
    });
    $('.dataTables_length').addClass('bs-select');
});
