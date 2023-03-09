<br><br>
<footer class=" py-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase text-white mb-4">Información de contacto</h5>
        <p class="text-white-50"><i class="bi bi-geo-alt-fill me-2"></i> 123 Calle Principal, Ciudad</p>
        <p class="text-white-50"><i class="bi bi-envelope-fill me-2"></i> info@example.com</p>
        <p class="text-white-50"><i class="bi bi-telephone-fill me-2"></i> +123 456 7890</p>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase text-white mb-4">Enlaces útiles</h5>
        <ul class="list-unstyled mb-0">
          <li><a href="#" class="text-white-50">Términos y condiciones</a></li>
          <li><a href="#" class="text-white-50">Política de privacidad</a></li>
          <li><a href="#" class="text-white-50">FAQs</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <h5 class="text-uppercase text-white mb-4">Suscríbete a nuestro boletín</h5>
        <p class="text-white-50 mb-4">Recibe nuestras últimas noticias y promociones directamente en tu correo electrónico.</p>
        <form>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Correo electrónico" aria-label="Correo electrónico" aria-describedby="button-addon2">
            <button class="btn btn-secondary" type="button" id="button-addon2">Suscribirse</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start">
        <p class="text-white mb-0">© 2023 Todos los derechos reservados.</p>
      </div>
      <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
        <ul class="list-inline mb-0">
          <li class="list-inline-item"><a href="#" class="text-white-50">Privacidad</a></li>
          <li class="list-inline-item"><a href="#" class="text-white-50">Términos</a></li>
          <li class="list-inline-item"><a href="#" class="text-white-50">Contacto</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script>
            CKEDITOR.replace( 'texto' );
    </script>
       
<Script> type="text/javascript" src="<?= RUTA_URL?>/js/main.js" </Script>
    <script src="https://kit.fontawesome.com/05e15f14b6.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#tblFormularios').DataTable();
        });

        
    </script>
    
</body>

</html>