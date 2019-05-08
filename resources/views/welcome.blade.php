<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link href="{{asset('css/uikit.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
    <title>Service page</title>
</head>
<body>
<div id="page-wrapper">
    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <div class="uk-container">
                <a href="#"><img data-src="{{asset('img/EntFriend.png') }}" width="" height="" alt="" uk-img></a>
            </div>
        </div>
        <div class="uk-navbar-right">
            <div class="uk-container">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#"><img data-src="{{asset('img/share.png') }}" width="" height="" alt="" uk-img></a></li>
                    <li><a href="#"><img data-src="{{asset('img/settings-icon.png') }}" width="" height="" alt="" uk-img></a></li>
                    <li><a href="#"><img data-src="{{asset('img/help-circle.png') }}" width="" height="" alt="" uk-img></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="uk-section section-department">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                <div class="uk-width-auto">
                    <div class="uk-card uk-card-body uk-flex uk-flex-column date-control">
                        <button class="uk-button uk-button-default button-control">Сегодня</button>
                        <button class="uk-button uk-button-default button-control" >К дате</button>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-card uk-card-body card-list-item">БАНК
                        <img data-src="{{asset('img/phone-call.png') }}" width="" height="" alt="" uk-img>
                        <p>
                            платежи до: 16:30 <br>
                            открыт до: 17:30
                        </p>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-card uk-card-body card-list-item">НАЛОГОВАЯ
                        <img data-src="{{asset('img/phone-call.png') }}" width="" height="" alt="" uk-img>
                        <p>
                            перерыв: 13 - 14 <br>
                            открыта до: 19:00
                        </p>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-card uk-card-body card-list-item">МОИ ЗАДАЧИ</div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-card uk-card-body card-list-item">КЛИЕНТЫ</div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-container uk-container-expand">
        <div class="uk-grid-small uk-child-width-expand@s uk-text-left" uk-grid>
            <div class="uk-width-auto">
                Апрель
                <table class="uk-table uk-table-justify uk-table-divider table-head">
                    <thead>
                    <tr>
                        <th>Воскр
                            <br>
                            20</th>
                    </tr>
                    <tr>
                        <th>Воскр
                            <br>
                            20</th>
                    </tr>
                    <tr>
                        <th>Воскр
                            <br>
                            20</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-body card-list-сontrol">
                    <img data-src="{{asset('img/btn.png') }}" width="" height="" alt="" uk-img>
                </div>
                <table class="uk-table uk-table-justify uk-table-divider">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-body card-list-сontrol">
                    <img data-src="{{asset('img/btn.png') }}" width="" height="" alt="" uk-img>
                </div>
                <table class="uk-table uk-table-justify uk-table-divider">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-body card-list-сontrol">
                    <img data-src="{{asset('img/btn.png') }}" width="" height="" alt="" uk-img>
                </div>
                <table class="uk-table uk-table-justify uk-table-divider">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-body card-list-сontrol">
                    <img data-src="{{asset('img/btn.png') }}" width="" height="" alt="" uk-img>
                    <span>пригласить!</span>
                </div>
                <table class="uk-table uk-table-justify uk-table-divider">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<footer id="page-footer" class="uk-margin-top" uk-sticky>
    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <div class="uk-container uk-container-small">
                EntFriend © 2019
            </div>
        </div>
        <div class="uk-navbar-right">
            <div class="uk-container uk-container-small">
                <ul class="uk-navbar-nav">
                    <li><a href="#">Конфиденциальность</a></li>
                    <li><a href="#">Условия обслуживания</a></li>
                </ul>
            </div>
        </div>
    </nav>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.4/js/uikit-icons.min.js"></script>
</body>
</html>