<?php
if (!empty($_GET["id"])){
    $id = $_GET["id"];
    $sql=$conection->query("delete from cargo where id_cargo=$id");
    if ($sql==true) {?>
      <script>
            $(function notificacion() {
                new PNotify({
                    title: "CORRECTO",
                    type: "success",
                    text: "La faculdad ha sido eliminada correctamente",
                    styling: "bootstrap3"
                });
            });
        </script>
    <?php } else {?>
        <script>
            $(function notificacion() {
                new PNotify({
                    title: "CORRECTO",
                    type: "success",
                    text: "Error al eliminar Faculdad",
                    styling: "bootstrap3"
                });
            });
        </script>
        <?php }?>

<script>
setTimeout(() => {
    window.history.replaceState(null, null, window.location.pathname);
}, 0);
</script>
<?php
}
?>
