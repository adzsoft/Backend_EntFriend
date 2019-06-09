<template>
    <div>
        <nav
            class="navbar is-light"
            role="navigation"
            aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a href="#" class="navbar-item"
                        ><img src="img/EntFriend.png"/></a>
                    <a
                        role="button"
                        class="navbar-burger burger"
                        aria-label="menu"
                        aria-expanded="false"
                        data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <router-link class="button is-light" to="/"
                                    ><img src="img/share.png"
                                /></router-link>
                                <router-link class="button is-light" to="/"
                                    ><img src="img/settings-icon.png"
                                /></router-link>
                                <router-link class="button is-light" to="/about"
                                    ><img src="img/help-circle.png"
                                /></router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section>
            <div class="column-wrap">
                <a v-on:click="append" class="button-add"><img src="img/btn.png" width="" height=""> </a>
                <div class="columns">
                        <testcomponent v-for="data in templatecount" v-bind:key="data" v-bind:number="data">
                        </testcomponent>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="columns">
                    <div class="column is-two-thirds footer-text">
                        EntFriend © 2019
                    </div>
                    <div class="column has-text-centered footer-text">
                        <a href="#">Конфиденциальность</a>
                    </div>
                    <div class="column has-text-centered footer-text">
                        <a href="#">Условия обслуживания</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
<script>
export default {
    components: {
        "testcomponent": {
            template:
                '<div class="column column-table"><table><thead><tr><th>' +
                '<div class="wrapper-column-title"><div class="wrapper-item"><div class="column-title">БАНК</div>' +
                '<img src="img/phone-call.png" width="" height="" alt=""></div><p>платежи до: 16:30 <br>открыт до: 17:30</p></div>\n' +
                '<div class="uk-card uk-card-body card-list-сontrol"></div></th></tr></thead><tbody>\n' +
                '<tr><td><div class="card">Отправить сведения о сделке <p>{{ number }}</p></div>' +
                '</td></tr><tr><td>2</td></tr><tr><td>2</td></tr><tr><td>2</td></tr><tr><td>2</td></tr></tbody></table></div>',
                props: ['number'],
        }
    },
    name: "home",
    data() {
        return {
            templatecount: 0,
        };
    },
    methods: {
        append: function() {
            this.templatecount++;
        }
    },
};
</script>
<style scoped>
    .footer {
        left: 0;
        bottom: 0;
        width: 100%;
        padding: 0;
        height: 120px;
        display: flex;
        align-items: center;
    }
    .footer-text,
    .footer-text a {
        font-family: "Overpass", sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 25px;
        color: rgba(0, 0, 0, 0.5);
        text-align: left;
    }
</style>
<style>
    .column-wrap {
        width: 395px;
    }
    .column {
        display: flex;
        justify-content: center;
    }
    .wrapper-item {
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
    }
    .wrapper-item img {
        margin-left: 11px;
    }
    .wrapper-column-title {
        text-align: center;
    }
    .wrapper-column-title p {
        font-family: "Roboto", sans-serif;
        font-weight: normal;
        font-size: 14px;
        line-height: 105.47%;
        color: rgba(0, 0, 0, 0.7);
    }
    .column-title {
        font-family: "Roboto", sans-serif;
        font-weight: normal;
        font-size: 16px;
        line-height: 19px;
        color: #000000;
    }
    table {
        width: 395px;
    }
    tr {
        width: 100%;
    }
    td {
        padding: 5em; /* Поля вокруг содержимого таблицы */
        border: 1px solid rgba(0, 0, 0, 0.35);
        text-align: center !important;
    }
    .footer-text {
        justify-content: flex-start;
    }
    .column-table{
        padding: 0;
    }
    .button-add img{
        padding: 1em;
    }
</style>
