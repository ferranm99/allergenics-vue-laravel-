<template>
    <div class="wrapper" role="document">
        <div class="content">
            <div class="main">
                <div>
                    <b-container>
                        <div class="breadcrumbs-container">
                            <b-breadcrumb>
                                <b-breadcrumb-item @click="() => this.$router.push({ name:'order-who' }).catch(() => {})"
                                                   exact
                                                   exact-active-class="active">
                                    Who
                                </b-breadcrumb-item>
                                <b-breadcrumb-item @click="() => this.$router.push({ name:'order-tests' }).catch(() => {})"
                                                   exact
                                                   exact-active-class="active">
                                    Choose Tests
                                </b-breadcrumb-item>
                                <b-breadcrumb-item class="active" @click="() => this.$router.push({ name:'order-payment' }).catch(() => {})"
                                                   exact
                                                   exact-active-class="active">
                                    Payment
                                </b-breadcrumb-item>

                            </b-breadcrumb>
                        </div>

                        <h2 class="user-recommended mt-4">Order for <span class="green">{{cart.firstName}} {{cart.lastName}}</span></h2>

                        <!--Login Section-->
                        <div v-if="!isLoggedIn" class="ag-form-container ag-login-container ag-payment-login mt-5">
                            <b-form>
                                <b-card no-body class="p-3 p-lg-4">
                                    <h3 class="green">Login or Create an account</h3>
                                    <b-row>
                                        <b-col cols="12" md="4">
                                            <b-form-group
                                                class="required"
                                                label="Email address"
                                                label-for="username"
                                            >
                                                <b-form-input
                                                    v-model="user.email"
                                                    id="username"
                                                    type="email"
                                                    placeholder=""
                                                    debounce="500"
                                                    required
                                                ></b-form-input>
                                            </b-form-group>
                                            <b-link class="lost-password" to="register">Create an account</b-link>
                                        </b-col>

                                        <b-col cols="12" md="4">
                                            <b-form-group
                                                class="required"
                                                label="Password"
                                                label-for="password"
                                            >
                                                <b-form-input
                                                    v-model="user.password"
                                                    id="password"
                                                    type="password"
                                                    placeholder=""
                                                    debounce="500"
                                                    required
                                                ></b-form-input>
                                            </b-form-group>
                                            <b-link class="lost-password" to="lost-password">Lost your password?</b-link>
                                        </b-col>

                                        <b-col cols="12" md="4">
                                            <div class="ag-button-row">
                                                <b-button @click="login" class="agg-button agg-button--filled-green" name="login">{{isEmailExisting ? 'Login' : 'Register'}}</b-button>
                                            </div>
                                        </b-col>
                                    </b-row>
                                </b-card>
                            </b-form>
                        </div>

                        <!--If user logged in-->
                        <div style="display: none" class="ag-form-container ag-login-container ag-payment-login mt-5">
                            <b-form>
                                <b-card no-body class="p-3 p-lg-4">
                                    <h3 class="green">Logged in</h3>
                                    <b-row>
                                        <b-col cols="12" md="4">
                                            <b-form-group
                                                class="required"
                                                label="Email address"
                                                label-for="username"
                                            >
                                                <b-form-input
                                                    id="username"
                                                    type="email"
                                                    placeholder="carl@16hands.co.nz"
                                                    readonly
                                                ></b-form-input>
                                            </b-form-group>
                                        </b-col>

                                        <b-col cols="12" md="4">
                                            <div class="ag-button-row">
                                                <b-button type="submit" class="agg-button agg-button--filled-green" name="login">LOG OUT</b-button>
                                            </div>
                                        </b-col>
                                    </b-row>
                                </b-card>
                            </b-form>
                        </div>

                        <!--Create Account Section-->
                        <div style="display: none" class="ag-form-container ag-login-container ag-payment-login mt-5">
                            <b-form>
                                <b-card no-body class="p-3 p-lg-4">
                                    <h3 class="green">Login or Create an account</h3>
                                    <b-row>
                                        <b-col cols="12" md="4">
                                            <b-form-group
                                                class="required"
                                                label="Email address"
                                                label-for="username"
                                            >
                                                <b-form-input
                                                    id="username"
                                                    type="email"
                                                    placeholder=""
                                                    required
                                                ></b-form-input>
                                            </b-form-group>
                                            <b-link class="lost-password" to="login">Have a login</b-link>
                                        </b-col>

                                        <b-col cols="12" md="4">
                                            <b-form-group
                                                class="required"
                                                label="Password"
                                                label-for="password"
                                            >
                                                <b-form-input
                                                    id="password"
                                                    type="password"
                                                    placeholder=""
                                                    required
                                                ></b-form-input>
                                            </b-form-group>
                                            <b-link class="lost-password" to="lost-password">Lost your password?</b-link>
                                        </b-col>

                                        <b-col cols="12" md="4">
                                            <div class="ag-button-row">
                                                <b-button type="submit" class="agg-button agg-button--filled-green" name="register">CREATE ACCOUNT</b-button>
                                            </div>
                                        </b-col>
                                    </b-row>
                                </b-card>
                            </b-form>
                        </div>

                        <!--Disabled class when user is not logged-->
<!--                        disabled-->
                        <div class="ag-payment-section ag-payment-block" :class="{'disabled' : !isLoggedIn}">
                            <b-row>
                                <b-col cols="12" md="6">
                                    <div class="ag-form-container">
                                        <b-card no-body class="p-3 p-lg-4">
                                            <h3 class="green">My information</h3>
                                            <b-row>
                                                <b-col cols="12" lg="6">
                                                    <b-form-group
                                                        class="required"
                                                        label="First name"
                                                        label-for="firstName"
                                                    >
                                                        <b-form-input
                                                            id="firstName"
                                                            type="text"
                                                            placeholder=""
                                                            required
                                                        ></b-form-input>
                                                    </b-form-group>
                                                </b-col>

                                                <b-col cols="12" lg="6">
                                                    <b-form-group
                                                        class="required"
                                                        label="Last name"
                                                        label-for="lastName"
                                                    >
                                                        <b-form-input
                                                            id="lastName"
                                                            type="text"
                                                            placeholder=""
                                                            required
                                                        ></b-form-input>
                                                    </b-form-group>
                                                </b-col>

                                                <b-col cols="12" lg="6">
                                                    <b-form-group
                                                        class="required"
                                                        label="Country / Region"
                                                        label-for="country"
                                                    >
                                                        <b-form-select class="form-control" required id="country" :options="country_options"></b-form-select>
                                                    </b-form-group>
                                                </b-col>

                                                <b-col cols="12" lg="6">
                                                    <b-form-group
                                                        class="required"
                                                        label="Phone"
                                                        label-for="phone"
                                                    >
                                                        <b-form-input
                                                            id="phone"
                                                            type="tel"
                                                            placeholder=""
                                                            required
                                                        ></b-form-input>
                                                    </b-form-group>
                                                </b-col>
                                            </b-row>

                                            <div class="ag-checkout-details bg-white ag-coupon-apply">
                                                <!--Coupon Apply-->
                                                <div>
                                                    <div class="">
                                                        <p class="mb-0">
                                                            Have a coupon?
                                                            <b-button class="green no-underline" v-b-toggle.collapse-coupon variant="link">Click here to enter your code</b-button>
                                                        </p>
                                                    </div>

                                                    <b-collapse id="collapse-coupon">
                                                        <div>
                                                            <p class="mt-3">If you have a coupon code, please apply it below.</p>
                                                            <b-form>
                                                                <b-form-row class="ag-form-container">
                                                                    <b-col class="pr-lg-3">
                                                                        <b-form-group
                                                                            class="mb-0"
                                                                            label=""
                                                                            label-for="coupon_code"
                                                                        >
                                                                            <b-form-input
                                                                                required
                                                                                id="coupon_code"
                                                                                type="text"
                                                                                placeholder="Coupon code"
                                                                                autocomplete="off"
                                                                            ></b-form-input>
                                                                        </b-form-group>
                                                                    </b-col>
                                                                    <b-col class="pl-lg-3">
                                                                        <b-button type="submit" class="agg-button agg-button--filled-green w-100" name="apply_coupon" value="Apply coupon">Apply coupon</b-button>
                                                                    </b-col>
                                                                </b-form-row>
                                                            </b-form>
                                                        </div>
                                                    </b-collapse>
                                                </div>
                                            </div>
                                        </b-card>
                                    </div>

                                    <div class="ag-order-details">
                                        <b-card no-body class="p-3 p-lg-4">
                                            <h3 class="green">Order details</h3>

                                            <table class="table b-table table-bordered table-responsive-sm my-account-table view-table mt-3">
                                                <tbody>
                                                <tr class="user-name">
                                                    <td class="border-right text-left">
                                                        <strong>Order for:</strong>
                                                    </td>
                                                    <td class="text-right">
                                                        {{cart.firstName}} {{cart.lastName}}
                                                    </td>
                                                </tr>

                                                <tr class="tests-ordered">
                                                    <td class="border-right text-left border-bottom-0">
                                                        <strong>Tests ordered:</strong>
                                                    </td>
                                                    <td class="border-bottom-0" colspan="2"></td>
                                                </tr>

                                                <!--Product Row-->
                                                <tr v-for="item in cart.items" :key="item.options.id">
                                                    <td class="product-name text-left border-top-0">
                                                        <div class="product-details">{{item.options.name}}</div>
                                                    </td>
                                                    <td class="product-total text-right border-top-0">
                                                        <del><span><bdi>{{getCurrencyLabel(cart)}}<span>$</span>{{item.options.price}}</bdi></span></del>
                                                    </td>
                                                </tr> <!--Product Row-->


                                                <tr>
                                                    <td class="product-name text-left">
                                                        <div class="product-details">Processing {{ cart.processing.amount === 0 ? "(Free)" : ''}}</div>
                                                    </td>
                                                    <td class="product-total text-right">
                                                        <span><bdi>{{getCurrencyLabel(cart)}}<span>$</span>{{ cart.processing.amount }}</bdi></span>
                                                    </td>
                                                </tr>

                                                </tbody>

                                                <tfoot>
                                                <tr class="order-total">
                                                    <th class="border-right text-left">Order Total (incl GST):</th>
                                                    <td class="text-right">
                                                        <strong><span><bdi>{{ getCurrencyLabel(cart) }}<span>$</span>{{ cart.totals.total }}</bdi></span></strong>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </b-card>
                                    </div>
                                </b-col>

                                <b-col cols="12" md="6">
                                    <div class="ag-payment-section">
                                        <b-card no-body class="p-3 p-lg-4">
                                            <h3 class="green">Payment</h3>

                                            <div class="ag-checkout-payment mt-4">
                                                <div class="ag-form-container ag-checkout-form">
                                                    <b-form-row>
                                                        <b-form-group class="ag-radio-group">
                                                            <b-form-radio v-model="paymentType" name="payment" value="stripe" id="credit_card">
                                                                Pay by Credit Card
                                                                <b-img :src="require('../assets/images/card.svg').default"  alt="visa cc" class="cc-icon"></b-img>
                                                                <b-img :src="require('../assets/images/card-1.svg').default"  alt="mastercard cc" class="cc-icon"></b-img>
                                                                <b-img :src="require('../assets/images/card-2.svg').default"  alt="ae cc" class="cc-icon"></b-img>
                                                                <b-img :src="require('../assets/images/card-3.svg').default"  alt="jcb cc" class="cc-icon"></b-img>

                                                            </b-form-radio>
<!--                                                            <b-form-radio name="payment" value="1111">Visa ending in 1111 (expires 11/22)</b-form-radio>-->
<!--                                                            <b-form-radio name="payment" value="new">Use a new payment method</b-form-radio>-->
                                                        </b-form-group>
                                                    </b-form-row>

                                                    <b-form-row class="m-0 pl-3">
                                                        <b-form-group
                                                            class="stripe-container required w-100 mb-3"
                                                        >
                                                            <template>
                                                                <div ref="card"></div>
                                                            </template>

<!--                                                            <b-form-input-->
<!--                                                                id="card_number"-->
<!--                                                                type="text"-->
<!--                                                                placeholder="1234 1234 1234 1234"-->
<!--                                                                autocomplete="off"-->
<!--                                                            ></b-form-input>-->
                                                        </b-form-group>
                                                    </b-form-row>

<!--                                                    <b-form-row class="mb-0 pl-3">-->
<!--                                                        <b-col cols="12" sm="6">-->
<!--                                                            <b-form-group-->
<!--                                                                class="required"-->
<!--                                                                label="Expiry Date"-->
<!--                                                                label-for="exp_date"-->
<!--                                                            >-->
<!--                                                                <b-form-input-->
<!--                                                                    id="exp_date"-->
<!--                                                                    type="text"-->
<!--                                                                    placeholder="MM/YY"-->
<!--                                                                    autocomplete="off"-->
<!--                                                                ></b-form-input>-->
<!--                                                            </b-form-group>-->
<!--                                                        </b-col>-->
<!--                                                        <b-col cols="12" sm="6">-->
<!--                                                            <b-form-group-->
<!--                                                                class="required"-->
<!--                                                                label="Card Code (CVC)"-->
<!--                                                                label-for="cvc"-->
<!--                                                            >-->
<!--                                                                <b-form-input-->
<!--                                                                    id="cvc"-->
<!--                                                                    type="text"-->
<!--                                                                    placeholder="CVC"-->
<!--                                                                    autocomplete="off"-->
<!--                                                                ></b-form-input>-->
<!--                                                            </b-form-group>-->
<!--                                                        </b-col>-->
<!--                                                    </b-form-row>-->

                                                    <b-form-row class="mt-0 pl-4">
                                                        <b-form-group class="ag-radio-group ag-checkbox-payment">
                                                            <b-form-checkbox
                                                                id="stripe-new-payment-method"
                                                                name="stripe-new-payment-method"
                                                                value="true"
                                                                class="mb-3"
                                                            >
                                                                Save payment information to my account for future purchases.
                                                            </b-form-checkbox>
                                                        </b-form-group>
                                                    </b-form-row>

                                                    <hr>

                                                    <b-form-row class="mb-0">
                                                        <b-form-group class="ag-radio-group">
                                                            <b-form-radio v-model="paymentType" class="mb-0 check-poli" name="payment" value="poli">
                                                                <b-img :src="require('../assets/images/poli-logo.png').default"  alt="poli payment" class="poli-icon"></b-img>
                                                                Pay by internet banking.
                                                            </b-form-radio>
                                                        </b-form-group>
                                                    </b-form-row>

                                                    <hr>

                                                    <b-form-row>
                                                        <b-form-group class="ag-radio-group">
                                                            <b-form-radio v-model="paymentType" class="mb-3" name="payment" value="acc">Pay on account</b-form-radio>
                                                        </b-form-group>
                                                    </b-form-row>

                                                    <b-form-row>
                                                        <b-form-group class="ag-radio-group ag-checkbox-payment mt-2">
                                                            <b-form-checkbox
                                                                id="terms"
                                                                name="terms"
                                                                value="true"
                                                                unchecked-value="false"
                                                                v-model="isTOCChecked"
                                                            >
                                                                I have read and agree to the website
                                                                <b-link target="_blank" to="/terms-and-conditions">terms and conditions</b-link>
                                                                <span style="color: #fe585e">*</span>
                                                            </b-form-checkbox>
                                                        </b-form-group>
                                                    </b-form-row>

                                                    <b-button :disabled="isPayButtonDisabled || isTOCChecked === 'false'" @click="completePayment()" class="agg-button agg-button--red mb-1" name="place_order" value="">Place order</b-button>
                                                </div>
                                            </div>
                                        </b-card>
                                    </div>
                                </b-col>
                            </b-row>
                        </div>

                    </b-container>

                </div>

            </div>
        </div>
        <ErrorPayment></ErrorPayment>
    </div>
</template>

<script>

import * as axios from "axios";
import API_CONFIG from "../network/API_CONFIG";
import cart, {scrubForUI, getCurrencyLabel} from "../model/cart";
import {loadScript} from "vue-plugin-load-script";
import ErrorPayment from "../components/modals/ErrorPayment";

export const COMPONENT_STYLE = {
    base: {
        color: "#414042",
        fontSize: "15px",
        fontFamily: "'MuseoSans', sans-serif", // a set of fonts
        fontSmoothing: "antialiased",
        fontWeight: "300",
        lineHeight: "40px",
        border: "1px solid #ccc",
        // '::placeholder': { color: // a hexa color as string },
        // ':-webkit-autofill': '',// a hexa color as string
    },
    complete: {
        color: "",
        iconColor: "",
    },
    invalid: {
        color: "",
        iconColor: "",
    },
};

export const STRIPE_COMPONENT_OPTIONS = {
    style: COMPONENT_STYLE,
    classes: {
        base: "form-stripe-element",
        focus: "form-stripe-element--focus",
        disabled: "form-stripe-element--disabled",
        complete: "form-stripe-element--is-success",
        invalid: "form-stripe-element--is-error",
        empty: "form-stripe-element",
    },
};


export default {
    name: 'OrderPayment',
    components: {ErrorPayment},
    mounted() {
        this.getCurrent();
        this.loadStripe();
        // this.checkLogin();
    },
    data() {
        return {
            isEmailExisting: false,
            isTOCChecked: 'false',
            isPayButtonDisabled: true,
            isLoggedIn: false,
            user: {email: '', password: ''},
            paymentType: 'stripe',
            cart: cart,
            stripe: null,
            elements: null,
            card: null,
            country_options: [
                { value: '', text: 'Select a country / region…' },
                { value: 'NZ', text: 'New Zealand' },
                { value: 'AUS', text: 'Australia' }
            ],
        }
    },
    watch: {
        ['user.email']: function(value) {
            this.checkEmail(value);
        }
    },
    methods: {
        checkEmail(value) {
            axios.get(API_CONFIG.COOKIE.url).then(() =>
                axios.post(API_CONFIG.CHECK_EMAIL.url, API_CONFIG.CHECK_EMAIL.body({email: value})).then(({data}) => {
                this.isEmailExisting = (data === 'true');
            }))
        },
        // checkLogin() {
        //     axios.get(API_CONFIG.COOKIE.url).then(() => axios.get(API_CONFIG.CHECK_LOGIN.url).then((data) => this.isLoggedIn = data))
        // },
        login() {
            if (this.isEmailExisting) {
                axios.post(API_CONFIG.LOGIN.url, API_CONFIG.LOGIN.body({
                    email: this.user.email,
                    password: this.user.password
                })).then(({data}) => {
                    this.isLoggedIn = true;
                    return axios.get(API_CONFIG.COOKIE.url);
                });
            }
            else {
                axios.post(API_CONFIG.REGISTER.url, API_CONFIG.CHECK_EMAIL.body({
                    email: this.user.email,
                    password: this.user.password
                })).then(() => this.isLoggedIn = true);
            }
        },
        getCurrent() {
            axios.get(API_CONFIG.GET_CURRENT.url).then(({data}) => {
                this.cart = scrubForUI(data.data);
                if (!this.cart.firstName && !this.cart.lastName) {
                    this.$router.push({ name:'order-who' }).catch(() => {})
                }
            });
        },
        getCurrencyLabel: getCurrencyLabel,
        loadStripe() {
            loadScript('https://js.stripe.com/v3/').then(() => {
                this.stripe = Stripe(process.env.MIX_VUE_STRIPE_KEY);
                this.elements = this.stripe.elements();
                this.card = this.elements.create("card", STRIPE_COMPONENT_OPTIONS);
                this.card.mount(this.$refs.card);

                this.card.on("change", (event) => {
                    if (!event.complete || event.error) {
                        this.isPayButtonDisabled = true;
                    } else if (event.complete && !event.error) {
                        this.isPayButtonDisabled = false;
                    }
                });
            })
        },
        completePayment() {
            this.isPayButtonDisabled = true;

            switch (this.paymentType) {
                case "stripe":
                    return this.completeStripePayment();
                default:
                    return true;
            }
        },
        completeStripePayment() {
            this.stripe
                .createToken(this.card)
                .then((result) => axios.post(API_CONFIG.STRIPE_PAYMENT.url, API_CONFIG.STRIPE_PAYMENT.body({token: result?.token?.id})))
                .then(() => this.$router.push({ name: 'success' }))
                .catch(() => this.$bvModal.show('error-payment'));
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";

.ag-login-container {
    max-width: 100%;
    margin-bottom: 30px;
}

.ag-order-details {
    margin-top: 30px;
    margin-bottom: 60px;
}

.cc-icon {
    display: inline-block;
    height: 20px;
    width: auto;
    margin-bottom: 2px;
}

.poli-icon {
    height: 70px;
    width: auto;
    padding: 7px 10px;
    border-radius: 12px;
    border: 1px solid #A0A0A0;
    margin-right: 10px;

    @include media-breakpoint-down(lg) {
        height: 40px;
    }
}

.stripe-container {
    padding: 3px 10px;
    height: 50px;
}


</style>
