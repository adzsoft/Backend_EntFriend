<template>
    <div class="login">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a href="#" class="navbar-item"><img src="img/EntFriend-login.png"></a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <router-link class="navbar-item" to="/">Отзывы</router-link>
                                <router-link class="navbar-item" to="/">Стоимость</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section class="section main-title">
                <div class="wrapper-title has-text-centered">
                    <h1 class="title">Личный кабинет индивидуального предпринимателя</h1>
                    <h2 class="subtitle">Банк, Налоговая, ФСЗН</h2>
                </div>
        </section>
        <section class="section">
            <div class="wrapper-form has-text-centered">
                <div class="login-form">
                    <h1 class="form-title"> Ещё немного...</h1>
                    <form action="#">
                        <label for="fieldNumber">Телефон</label>
                        <input class="input" id="fieldNumber" type="text" placeholder="+37525 467 26 75">
                        <router-link class="button" to="/">Войти</router-link>
                    </form>
                    <div class="login-capture">
                        <div><a href="#">Конфеденциальность</a></div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="columns">
                    <div class="column is-two-thirds footer-text">EntFriend © 2019</div>
                    <div class="column has-text-centered footer-text"><a href="#">Конфиденциальность</a></div>
                    <div class="column has-text-centered footer-text"><a href="#">Условия обслуживания</a></div>
                </div>
            </div>
        </footer>
    </div>
</template>
<script>
    export default{
        name:'login',
        data (){
            return{
                title:'login'
            }
        }
    }
</script>
<style scoped>
    nav{
        height: 148px;
    }
    .navbar-item:nth-child(2){
        margin-left: 75px;
    }
    .navbar-item{
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 16px;
        display: flex;
        align-items: center;
        letter-spacing: 0.1em;
        color: #6E6E6E;
    }
    .wrapper-title{
        margin-top: 16px;
    }
    .title, .subtitle{
        font-size: 18px;
    }
    .wrapper-form{
        width: 588px;
        height: 447px;
        margin: auto;
        background: #F6F9FE;
        box-shadow: 0px 5px 3px rgba(0, 0, 0, 0.1);
        border-radius: 3px;
    }
    .login-form{
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
    }
    .form-title{
        font-family: 'Overpass', sans-serif;
        font-style: normal;
        font-weight: 900;
        font-size: 36px;
        line-height: 55px;
        display: flex;
        letter-spacing: 0.02em;
        color: #27282A;
    }
    .form-title{
        margin-top: 32px;
        margin-bottom: 24px;
    }
    .input{
        height: 77px;
    }
    .button{
        margin-top: 47px;
        width: 200px;
        height: 51px;
        background: #27AE60;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        border-radius: 3px;
        font-family: 'Overpass', sans-serif;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 28px;
        letter-spacing: 0.02em;
        color: #FFFFFF;
    }
    form{
        width: 506px;
    }
    label{
        float: left;
        font-family: 'Overpass', sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 21px;
        letter-spacing: 0.05em;
        color: #8B8B8B;
        margin-left: 9px;
    }
    .input{
        background: #FFFFFF;
        border: 1px solid #A4E4FF;
        border-radius: 5px;
    }
    input[type="text"] {
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 28px;
        letter-spacing: 0.02em;
        color: #27282A;
    }
    .main-title{
        padding-bottom: 0;
    }
    .login-capture{
        height: 100%;
        display: flex;
        align-items: flex-end;
        margin-bottom: 5px;
    }
    .login-capture a{
        font-family: 'Overpass', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 21px;
        text-decoration-line: underline;
        color: rgba(0, 0, 0, 0.4);
    }
    .footer{
        background: rgba(16, 33, 61, 0.55);
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        padding: 0;
        height: 120px;
        display: flex;
        align-items: center;
    }
    .footer-text, .footer-text a{
        font-family: 'Overpass', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 25px;
        color: #FFFFFF;
    }
</style>