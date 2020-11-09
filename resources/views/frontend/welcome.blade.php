@extends('frontend.layouts.layout')

@section('content')

    <p>{{__('mainpage.welcome')}}</p>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">

                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/frontend/img/slider.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/frontend/img/slider-2.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/frontend/img/slider-3.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 justify-content-center">
                <h2 class="text-uppercase text-center">Производитель <b>исскуственных елок</b> в Украине</h2>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <img class="mx-auto d-block" src="{{asset('assets/frontend/img/iuzvalogo.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Мы производим искусственные елки и венки высочайшего качества уже более 20 лет.
                    <br>
                    Мы также производим машины и устройства и продаем материалы для их производства.</h3>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <button>
                    <a href="javascript:void(0);" class="button more" data-toggle="collapse" data-target="#more"><span>Узнайте больше</span></a>
                </button>
                <button>
                    <a href="#" class="button page-scroll"><span>Посмотреть продукцию</span></a>
                </button>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <ul class="list-group list-group-horizontal d-flex justify-content-center">
                    <li class="list-group-item" data-filter=".1" title="Ёлки">Ёлки </li>
                    <li class="list-group-item"  data-filter=".2" title="Венки">Венки</li>
                    <li class="list-group-item"  data-filter=".3" title="Гирлянды">Гирлянды</li>
                    <li class="list-group-item"  data-filter=".9" title="Подставки">Подставки</li>
                    <li class="list-group-item"  data-filter=".4" title="Горшки">Горшки</li>
                    <li class="list-group-item"  data-filter=".5" title="Основы">Основы</li>
                    <li class="list-group-item"  data-filter=".6" title="Флористическая пена">Флористическая пена</li>
                    <li class="list-group-item"  data-filter=".7" title="Станки">Станки</li>
                    <li class="list-group-item"  data-filter=".8" title="Материалы">Материалы</li>
                    <li class="list-group-item"  data-filter=".10" title="Stelaże">Стелажи</li>
                </ul>
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 justify-content-center">
                <h2 class="text-uppercase text-center"><b>КОНТАКТНАЯ ИНФОРМАЦИЯ</b></h2>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <img class="mx-auto d-block" src="{{asset('assets/frontend/img/iuzvalogo.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">
                    Присоединяйтесь к нашим постоянным клиентам.
                    <br>
                    Сообщите нам, что вам нужно - мы предоставим вам продукты самого высокого качества.
                    <br>
                    Если вы ищете производителя искусственных елок, вы находитесь в идеальном месте!

                </h3>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div id="contact-form" class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">

                <form method="post" action="https://www.erbis.com.pl/wp-content/themes/erbis/contact.php"
                      name="contactform" id="contactform"
                      onsubmit="ga('send', 'event', 'Formularz', 'Wysłany', 'Wyślij wiadomość');">

                    <div class="col-12">
                        <input name="company" type="text" id="company" value="" placeholder="Компания"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Компания'">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <input name="name" type="text" id="name" value="" placeholder="Имя"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Имя'">
                        </div>

                        <div class="col-6">
                            <input name="surname" type="text" id="surname" value="" placeholder="Фамилия"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Фамилия'">
                        </div>
                    </div>

                    <div class="col-12">
                        <textarea name="message" id="message" placeholder="Ваше сообщение"
                                  onfocus="this.placeholder = ''"
                                  onblur="this.placeholder = 'Ваше сообщение'"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <input name="email" type="text" id="email" value=""
                                   placeholder="Ваш адрес электронной почты"
                                   onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Ваш адрес электронной почты'">
                        </div>

                        <div class="col-4">
                            <input type="submit" class="button" id="submit" value="Отправить">
                        </div>
                    </div>

                    <div class="col-12">
                        <label><input type="checkbox" required=""> Я даю согласие на обработку моих персональных данных
                            для обработки моего запроса.</label>
                    </div>

                    <div class="col-md-12">
                        <div id="messages"></div>
                    </div>

                </form>

            </div>

        </div>
    </div>




    <div class="container mt-5">
        <div class="row">

            <div class="col-md-4 text-center">
                <img src="{{asset('assets/frontend/img/geo.svg')}}" alt="geo"
                     class="img-fluid org-icon">
                <h4>Отдел продаж:</h4>

                <p>
                    <a href="#" target="_blank">45603, Украина, Волынская область,
                        Луцкий район, село Струмовка,
                        улица Старицкого, дом 84.</a>
                </p>
                <h4>Производство:</h4>
                <p>
                    <a href="#"
                       target="_blank">
                        45601, Украина, Волынская область,
                        Луцкий район, село Липины,
                        улица Шевченко, дом 69.</a></p>
            </div>

            <div class="col-md-4 text-center">
                <img src="{{asset('assets/frontend/img/chat.svg')}}" alt="chat"
                     class="img-fluid org-icon">
                <h4>Телефоны:</h4>
                <p><a href="tel:+380501755574">+38 050 175 55 74</a></p>
                <p><a href="tel:+380503398025">+38 050 339 80 25</a></p>
                <h4>Адрес электронной почты:</h4>
                <p><a href="mailto:nik.uzva@gmail.com">nik.uzva@gmail.com</a></p>
                <p><a href="mailto:iuzvava@gmail.com">iuzvava@gmail.com</a></p>
            </div>

            <div class="col-md-4 text-center">
                <img src="{{asset('assets/frontend/img/open-time.svg')}}"
                     alt="work-time" class="img-fluid org-icon">
                <h4>Время работы:</h4>
                <p>понедельник - пятница: 9:00 - 18:00</p>
                <p>суббота: 9:00 - 13:00</p>
            </div>

        </div>

    </div>








    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js" async defer></script>

    <script>
        function initMap() {
            // The location of Uluru
            const uluru = {lat: -25.344, lng: 131.036};
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>
@endsection
