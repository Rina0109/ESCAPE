<template>
    <div id="wrapper">
        <!--ハンバーガーメニューのボタン-->
        <div class="hamburger_btn" v-on:click='ActiveBtn=!ActiveBtn'>
            <span class="line line_01" v-bind:class="{'btn_line01':ActiveBtn}"></span>
            <span class="line line_02" v-bind:class="{'btn_line02':ActiveBtn}"></span>
            <span class="line line_03" v-bind:class="{'btn_line03':ActiveBtn}"></span>
        </div>
        <!--サイドバー-->
        <transition name="menu" >
            <div class="menu" v-show="ActiveBtn">
                <div id="background-wrap">
                    <div class="upper-wrap">
                        <img class= "yazirusi" src="../images/sozai1.png"/>
                        <img class="icons" src="../images/sozais2.png"/>
                        <h2 class="loginstatus">未ログイン</h2>
                    </div>
                </div>
                <div id="under-color-block">
                    <div class="block1"></div>
                    <div class="block2"></div>
                    <div class="block3"></div>
                    <div class="block4"></div>
                </div>
                <div id="footer">
                    <div class="under-wrap">
                        <img class="home" src="../images/home.png"/>
                        <a href="#">Home</a>
                    </div>
                    <div class="button-div">
                        <div class="button-wrapper">
<!--                        <form @submit.prevent="login">-->
                            <button class="buttonop1"><router-link :to="{ name: 'login' }">ログイン</router-link></button>
<!--                        </form>-->
<!--                        <form @submit.prevent="signup">-->
                            <button class="buttonop2"><router-link :to="{ name: 'register' }">会員登録</router-link></button>
<!--                        </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        data: function() {
            return{
                ActiveBtn : false,
            }
        },
        methods: {
            login() {
                this.$router.push("#")
            },
            signup(){
                this.$router.push("#")
            }
        }
    }
</script>

<style scoped lang="scss">
    #wrapper{
        width: 85vw;
        height: 80vh;
        /*background-color: #ffed4a;*/
        position: fixed;
        /*TODO:z-index*/
        z-index: 4;
        .hamburger_btn {
            position: fixed;
            top: 40px;
            left: 22px;
            width: 100px;
            height: 75px;
            cursor: pointer;
            z-index: 4;
        }

        //基本いじらない
        .hamburger_btn .line {
            position: absolute;
            top: 0;
            left: 20px;
            width: 64px;
            height: 3px;
            background: #333333;
            text-align: center;
        }

        .hamburger_btn .line_01 {
            top: 16px;
            transition: 0.4s ease;
        }
        .hamburger_btn .line_02 {
            top: 26px;
            transition: 0.4s ease;
        }
        .hamburger_btn .line_03 {
            top: 36px;
            transition: 0.4s ease;
        }


        .btn_line01 {
            transform: translateY(10px) rotate(-45deg);
            transition: 0.4s ease;
        }
        .btn_line02 {
            transition: 0.4s ease;
            opacity: 0;
        }
        .btn_line03 {
            transform: translateY(-10px) rotate(45deg);
            transition: 0.4s ease;
        }

        /*サイドバー*/
        .menu-enter-active, .menu-leave-active {
            transition: opacity 0.4s;
        }
        .menu-enter, .menu-leave-to {
            opacity: 0;
        }
        .menu-leave, .menu-enter-to{
            opacity: 1;
        }
        .menu {
            background-color: rgba(197, 197, 197, 0.671);
            //padding: 2rem 1rem;
            //position: fixed;
            // width: 20rem;
            // height: 80rem;
            // top: 0;
            // right: 0;
            // .wrap {
            // width: 375px;
            // height: 100vh;
            // background-color: whitesmoke;
            // position: relative;
            // top: 0;
            // right: 0;
            // bottom: 0;
            // left: 0;
            #background-wrap{
                /*height: 200px;*/
                height: 30vh;
                background-image: url("../images/lll.png");
                /*background-size: 375px 200px;*/
                background-size: cover;
                background-repeat: no-repeat;
                .upper-wrap{
                    .yazirusi{
                        padding-top: 10px;
                        height: 40px;
                        width: 40px;
                    }
                    .icons{
                        width: 185px;
                        display: flex;
                        padding-top: 105px;
                        padding-left: 84px;
                    }
                    .loginstatus{
                        margin: 0;
                        padding-top: 40px;
                        padding-left: 84px;
                        color: white;
                        font-size: 60px;
                    }
                }
            }
            #under-color-block{
                display: flex;
                height: 10px;
                .block1{
                    width: 25%;
                    background-color: #665EFF;
                }
                .block2{
                    width: 25%;
                    background-color: #5773FF;
                }
                .block3{
                    width: 25%;
                    background-color: #3497FD;
                }
                .block4{
                    width: 25%;
                    background-color: #3ACCE1;
                }
            }
            #footer{
                /*height:400px;*/
                height: 70vh;
                background-color: #F2F2F2;
                display: block;
                position: relative;
                justify-content: center;
                .under-wrap{
                    //-color: #552233;
                    padding-top: 20px;
                    padding-left:30px ;
                    height: 200px;
                    .home{
                        width: 80px;
                        padding-top: 90px;
                        padding-left: 60px;
                    }
                }
                }
                .under-wrap,a{
                    padding-top: 30px;
                    font-size: 80px;
                    font-family: Franklin Gothic Medium;
                    color: gray;
                    text-decoration: none;
                }
                .button-div {
                    // background-color: #002211;
                    display: flex;
                    /* margin-left: 50px; */
                    position: absolute;
                    /* margin-left: 50px; */
                    width: 100%;
                    height: 100%;
                    justify-content: center;
                    /*align-items: flex-end;*/
                    .button-wrapper {
                        position: relative;
                        top: 800px;
                        text-align: center;
                        .buttonop1 {
                            border-radius: 35px;
                            width: 50vw;
                            height: 140px;
                            text-align: center;
                            cursor: pointer;
                            padding: 13px 63px;
                            background: #00e6e6;
                            line-height: 1em;
                            transition: 0.3s;
                            border: 2px solid #00e6e6;
                            margin-bottom: 30px;
                            a {
                                font-size: 40px;
                                color: #FFFFFF;
                            }
                        }

                        .buttonop1:hover {
                            color: #00e6e6; /* 背景色     */
                            background: #ffffff; /* 文字色     */
                        }

                        .buttonop2 {
                            display: inline-block;
                            border-radius: 35px;
                            width: 50vw;
                            height: 140px;
                            font-size: 20pt;
                            text-align: center;
                            cursor: pointer;
                            padding: 13px 63px;
                            background: #353A50;
                            color: #ffffff;
                            line-height: 1em;
                            transition: 0.3s;
                            border: 2px solid #00e6e6;
                            a {
                                font-size: 40px;
                                color: #FFFFFF;
                            }
                        }

                        .buttonop2:hover {
                            color: #202f55; /* 背景色     */
                            background: #ffffff; /* 文字色     */
                        }
                    }
                }
            }
        }
</style>
