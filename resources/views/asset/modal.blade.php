@section('css')
    <link href="{{ asset('template') }}/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    @stop

<script src="{{ asset('template') }}/js/lib/sweetalert/sweetalert.min.js"></script>
<script>
var form ;
    function ab(id){
        form = form="supFomrs_"+id;
        swal({
                title: "Suppression de membre",
                text: "Etes-vous sur de vouloir supprimer ce Membre ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Oui, Supprimer !!",
                cancelButtonText: "Non, Annuler !!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    document.getElementById(form).submit();
                }
                else {
                    swal({
                        title: "Annulé !!",
                        text: "Action annulée",
                        timer:2000,
                    });
                }
            });
    }

function dialogTypeMembre(id){
    form = form="supFomrs_"+id;
    swal({
            title: "Suppression de Type de Membre",
            text: "Etes-vous sur de vouloir supprimer le Type Membre ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Oui, Supprimer !!",
            cancelButtonText: "Non, Annuler !!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                document.getElementById(form).submit();
            }
            else {
                swal({
                    title: "Annulé !!",
                    text: "Action annulée",
                    timer:2000,
                });
            }
        });
}
</script>