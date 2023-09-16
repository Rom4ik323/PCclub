@extends('layouts.layout')

@section('content')

<section class="delivery">
    <h3 class="fw-thin my-2 d-h">Способы доставки</h3>
    <div>
      <div class="accordion" id="accordionExample">
        <div class="d-button d-flex flex-row justify-content-between flex-wrap">
          <h2 class="accordion-header collapsed" id="headingOne">
            <button class="accordion-button btn-primary fw-bold text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Самовывоз
            </button>
          </h2>
        </div>
        <div class="accordion-item">
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body bg-light py-4 d-flex justify-content-between row">
              <div class="col-xl-6 col-12 pe-4">
                <p>
                  Самовывоз из Кондитерской в Москве
                </p>
                <p class="fw-light">
                  Онлайн-оплата будет доступна после оформления заказа. При получении можно будет отказаться от заказа - в этом случае оплата вернётся на вашу карту в срок 3-7 дней (сроки зависят от работы банка).
                </p>
                <p class="fw-light">
                  Вы можете получить десерт в нашем кондитерской. Для этого нужно  оформить заказ на сайте (чтобы к вашему приезду товар был забронирован и остался в наличии) и предупредить нас по телефону <a href="tel:+7 (999) 999-99-99"> +7 (999) 999-99-99</a> минимум за час до приезда – мы выпишем вам пропуск и подготовим заказ к выдаче, чтобы вам не пришлось ждать. Покупка закрепляется за вами на ограниченное время (до 2 дней, точный срок резерва указывается при оформлении заказа). Самовывоз бесплатный.
                </p>
              </div>
              <div class="col-xl-6 col-12">
                <p>
                  Самовывоз из всех кондитерских "Baker" в Москве. 

                </p>
              </div>
            </div>
          </div>
        </div>
        
</section>

@endsection
