<footer class="py-4 pt-5 text-white" style="margin-top: 120px;">
    <div class="row">
      <div class="col-sm-5 col-5 ">
        <h5 class="fw-bold ">Информация</h5>
        <ul class="nav flex-column ">
          <li class="nav-item mb-2"><a href="{{route('about')}}" class="nav-link p-0 text-white fw-lighter">О нас</a></li>
          <li class="nav-item mb-2"><a href="{{route('delivery')}}" class="nav-link p-0 text-white fw-lighter">Доставка</a></li>
          <li class="nav-item mb-2"><a href="{{route('home')}}#FAQs" class="nav-link p-0 text-white fw-lighter">FAQs</a></li>
        </ul>
      </div>

      <div class="col-sm-2 col-1 d-flex justify-content-center align-self-center">
          <a href="{{route('home')}}">
         
        </a>
      </div>

      <div class="col-sm-5 col-6 text-end">
        <h5 class="fw-bold">Обратная связь</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{route('contacts')}}" class="nav-link p-0 text-white fw-lighter">Контакты</a></li>
          <li class="nav-item mb-2"><a href="tel:+7 (999) 999-99-99" class="nav-link p-0 text-white fw-lighter">+7 (999) 999-99-99</a></li>
          <li class="nav-item mb-2 d-flex flex-row align-self-end">
              <a href="#" class="nav-link p-0 text-white me-2"><img src="{{asset('img/facebook.svg')}}" alt=""></a>
              <a href="#" class="nav-link p-0 text-white me-2"><img src="{{asset('img/telegram.svg')}}" alt=""></a>
              <a href="#" class="nav-link p-0 text-white me-2"><img src="{{asset('img/vk.svg')}}" alt=""></a>
              <a href="#" class="nav-link p-0 text-white"><img src="{{asset('img/instagram.svg')}}" alt=""></a>
          </li>
        </ul>
      </div>


    </div>

    <div class="d-flex justify-content-center fw-lighter small">
      <p>© {{ date('Y')}}, ООО "SPS"</p>
    </div>
</footer>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
<script  src="{{asset('js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
