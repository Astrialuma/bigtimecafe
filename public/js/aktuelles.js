$(document).ready(function () {
    const urlParams = new URLSearchParams(window.location.search);
    const queryattributadmin = urlParams.get('admin');

    $('.deleteSvg').on('click', function () {
        if (confirm("Möchten Sie dieses Element wirklich löschen?")) {
            $.ajax({
                url: 'index.php',
                type: 'DELETE',
                data: { id: $(this).attr("id"), key: queryattributadmin },
                success: function (response) {
                    window.location.reload()
                },
                error: function (xhr, status, error) {
                    console.error("Fehler:", error);
                }
            });
        } else {
            console.log("Löschung vom Benutzer abgebrochen.");
        }
    });
});
