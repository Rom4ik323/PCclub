<footer class="py-4 pt-5 text-white admin-footer" style="margin-top: 120px;">
    <div class="d-flex justify-content-evenly flex-row mb-4">
      <a href="{{route('admin-orders')}}">Заказы</a>
      <a href="{{route('home')}}">Клиентская версия</a>
      <a href="{{route('admin')}}">Выход</a>
    </div>

    <div class="d-flex justify-content-center fw-lighter small">
      <p>© {{ date('Y')}}, ООО "SPS"</p>
    </div>
  </footer>

{{-- <script>
    (function(){
    $("form").trigger("reset");
    $("#subcategories").cainedTo("#categories");
    $('#categories').change(function(){
        $("#subcategories").selectpicker("refresh");
    });
});
</script> --}}
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
<script  src="{{asset('js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
{{-- <script src="{{asset('js/jquery.chained.min.js')}}"></script> --}}
</body>
</html>
