<template>
    <div class="wrapper" role="document">
        <div class="content">
            <div class="main">
                <b-container>
                    <div class="breadcrumbs-container">
                        <b-breadcrumb>
                            <b-breadcrumb-item class="active" @click="() => this.$router.push({ name:'order-who' }).catch(() => {})"
                                               exact
                                               exact-active-class="active">
                                Who
                            </b-breadcrumb-item>
                            <b-breadcrumb-item :disabled="isUserInvalid"
                                               @click="postWho"
                                               exact
                                               exact-active-class="active">
                                Choose Tests
                            </b-breadcrumb-item>
                            <b-breadcrumb-item :disabled="isUserInvalid || isOrderInvalid"
                                               @click="goToPayment"
                                               exact
                                               exact-active-class="active">
                                Payment
                            </b-breadcrumb-item>

                        </b-breadcrumb>
                    </div>

                    <div class="agg-survey-container">
                        <div class="agg-survey-inner pt-lg-4">

                            <div id="survey">
                                <div class="ag-survey-inner text">

                                    <h1>Please tell us the name of the person the test is for</h1>
                                    <h6>(first name)</h6>

                                    <div class="agg-input-container">
                                        <input v-model="cart.firstName" type="text" name="first-name" value="">
                                    </div>

                                </div>

                                <div class="ag-survey-inner text">
                                    <h6>(last name)</h6>

                                    <div class="agg-input-container">
                                        <input v-model="cart.lastName" type="text" name="last-name" value="">
                                    </div>

                                </div>

                                <div class="ag-survey-inner text">
                                    <h6>(gender)</h6>

                                    <div class="agg-input-container mt-0">
                                        <b-form-select class="custom-control" v-model="cart.gender" :options="options"></b-form-select>
                                    </div>

                                </div>

                                <div class="survey-footer">
                                    <b-button class="agg-button agg-button--filled-green"
                                            :disabled="isUserInvalid"
                                            @click="postWho"
                                            data-type="next"
                                            name="survey_next"
                                            type="submit">Next</b-button>
                                </div>
                            </div>

                        </div>
                    </div>
                </b-container>

            </div>
        </div>
    </div>
</template>

<script>

import * as axios from 'axios';
import genderOptions from "../config/genderOptions";
import cart, {scrubForUI} from "../model/cart";
import API_CONFIG from "../network/API_CONFIG";

export default {
  name: 'OrderWho',
    mounted() {
        this.getCurrent();
    },
    data() {
        return {
            options: genderOptions,
            cart: cart
        }
    },
    computed: {
        isUserInvalid() {
            return !this.cart?.firstName || !this.cart.lastName;
        },
        isOrderInvalid() {
            return this.cart?.items.length === 0;
        }
    },
    methods: {
        postWho() {
          if (this.isUserInvalid) {
              return;
          }

          axios.post(API_CONFIG.POST_WHO.url, API_CONFIG.POST_WHO.body(this.cart)).then(({data}) => {
              this.cart.firstName = data.data.client_first_name;
              this.cart.lastName = data.data.client_last_name;
              this.cart.gender = data.data.client_gender;
              this.goToTests();
          });
      },
        goToTests() {
            this.$router.push({ name: 'order-tests' }).catch(() => {})
        },
        goToPayment() {
          if (this.isOrderInvalid || this.isUserInvalid) {
              return;
          }

          this.$router.push({ name: 'order-payment' }).catch(() => {})
        },
        getCurrent() {
            axios.get(API_CONFIG.GET_CURRENT.url).then(({data}) => {
                this.cart = scrubForUI(data.data);
            });
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";

    .agg-survey-inner {
        text-align: center;
        max-width: 860px!important;
        margin: 0 auto;
        #survey{
            width: 100%;
            > .row{
                @include media-breakpoint-up(sm) {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-flex-wrap: wrap;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    -webkit-flex-flow: row wrap;
                    flex-flow: row wrap;
                    align-content: flex-start;
                    -webkit-align-content: flex-start;
                    &::before {
                        display: block!important;
                    }
                    .checkbox-custom-container{
                        display: -webkit-box;
                        display: -webkit-flex;
                        display: -ms-flexbox;
                        display: flex;
                        -webkit-box-orient: vertical;
                        -webkit-box-direction: normal;
                        -webkit-flex-direction: column;
                        -ms-flex-direction: column;
                        flex-direction: column;
                        float: none!important;
                    }
                }
            }

            .custom-control-description{
                cursor: pointer;
            }
            h2, h1 {
                max-width: 570px;
                font-weight: 100;
                margin: 0 auto 1.5rem auto;
                font-size: 30px;

                @include media-breakpoint-up(md) {
                    font-size: 33px;
                }
                @include media-breakpoint-down(sm) {
                    font-size: 25px;
                }
            }
            h6{
                font-style: italic;
            }

            input,
            select.custom-control,
            textarea{
                width: 100%;
                height: 58px;
                border: 1px solid $survey-border;
                text-align: center;
                @extend .transition;
                transition-property: border;
                background-color: #fff;
                border-radius: 0;
                color: $text-dark;
                font-weight: 100;
                &:focus,
                &:active{
                    border: 1px solid $green;
                    box-shadow: none;
                    outline: none;
                    + button.icon-arrow-right{
                        color: $green;
                    }
                }
            }

            textarea{
                max-width: 570px;
                height: 128px;
                resize: none;
                margin: 0 auto;
                padding: 15px;
                text-align: left;
            }

            .agg-button--red{
                margin-top: 0;
                background: transparent;
                color: $l-red;
                @extend .transition;
                transition-property: background, color;
                transition-duration: 0.2s;
                &:disabled{
                    color: $white;
                    background: $survey-btn-disabled;
                    border: 1px solid $survey-btn-disabled;
                    cursor: not-allowed;
                    &:hover{
                        background: $survey-btn-disabled;
                        border: 1px solid $survey-btn-disabled;
                        cursor: not-allowed;
                        color: $white;
                    }
                    &:before{
                        display: none;
                    }
                }
                &:hover{
                    background: $l-red;
                    color: $white;
                }
                @include media-breakpoint-down(sm) {
                    min-width: 160px;
                }
            }
            .agg-input-container{
                margin: 3rem auto 0 auto;
                max-width: 570px;
                position: relative;
                .hidden{
                    position: absolute;
                    bottom: -30px;
                    left: 50%;
                    width: 100%;
                    transform: translateX(-50%);
                    -webkit-transform: translateX(-50%);
                    -moz-transform: translateX(-50%);
                    -o-transform: translateX(-50%);
                    -ms-transform: translateX(-50%);
                    color: $l-red;
                }
            }
            .icon-arrow-right{
                position: absolute;
                right: 15px;
                bottom: 20px;
                z-index: 10;
                background: none;
                outline: none;
                box-shadow: none;
                border: none;
                &:disabled{
                    cursor: not-allowed;
                }
            }
        }
    }

    .agg-survey-container{
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        min-height: calc(100vh - 190px);
        padding-top: 0;
        padding-bottom: 140px;

        @include media-breakpoint-up(sm) {
            min-height: calc(100vh - 220px);
        }
        .agg-survey-inner{
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            align-self: center;
            margin: 0 auto;
            width: 100%;
        }
    }

    #survey {
        .ag-survey-inner:nth-child(2),
        .ag-survey-inner:nth-child(3) {
            margin-top: 30px;

            h2 {
                margin: 1rem auto 0 auto;
            }

            .agg-input-container {
                margin: 0 auto;
            }
        }
    }


    //FOOTER BUTTONS

    .survey-footer{
        z-index: 1000;
        position: fixed;
        width: 100%;
        bottom: 0;
        left: 0;
        right: 0;
        padding:2rem 0;
        background: rgba($white, 0.7);
    }

    button.back{
        position: absolute;
        left: 0;
        bottom: 2rem;
        display: block;
        margin: 0.8rem 0 0 0.8rem;
        text-align: center;
        text-transform: capitalize;
        background: none;
        border: none;
        outline: none;
        font-size: 1rem;
        float: left;
        @include media-breakpoint-up(md) {
            margin: 0.8rem 0 0 1.5rem;
        }
        @include media-breakpoint-down(sm) {
            margin: 0.8rem 0 0 0.4rem;
        }
        .icon-arrow-left{
            color: $l-red;
            font-size: 1rem;
            margin-right: 3px;
        }
    }


    .wm-survey-question-title.thankyou-note{
        max-width: 570px;
        margin: 50px auto 30px auto;
    }


</style>
