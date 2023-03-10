<?php
require RUTA_APP . '/vistas/inc/head.php';
require RUTA_APP . '/vistas/inc/header.php';
?>
<main>
    <br><br><br>
<table id="gastos" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
</main>

    <?php
    require RUTA_APP . '/vistas/inc/footer.php';
    ?>
     <script>
        $(document).ready(function() {
            $('#gastos').DataTable();
        });
    </script>
</div>