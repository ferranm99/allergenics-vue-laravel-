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
                                <b-breadcrumb-item  class="active" @click="() => this.$router.push({ name:'order-tests' }).catch(() => {})"
                                       exact
                                       exact-active-class="active">
                                    Choose Tests
                                </b-breadcrumb-item>
                                <b-breadcrumb-item
                                       :disabled="isOrderInvalid"
                                       @click="goToPayment"
                                       exact
                                       exact-active-class="active">
                                    Payment
                                </b-breadcrumb-item>

                            </b-breadcrumb>
                        </div>

                        <h2 class="user-recommended mt-4">Order for <span class="green">{{cart.firstName}} {{cart.lastName}}</span></h2>

                        <!--Products-->
                        <b-row no-gutters>
                            <b-col cols="12" lg="7" class="pr-md-3">
                                <div class="ag-checkout-products p-4 bg-white">
                                    <b-row v-if="products.length">
                                        <b-col v-for="product in products" :key="'product-item-' + product.id" cols="12" md="6">
                                            <div class="product-item" :class="{'selected' : isProductInCart(product)}">
                                                <b-img class="product-thumbnail" :src="require('../assets/images/product-womens-health.jpeg').default" fluid alt="Picture of a beautiful woman wearing white shirt in the outdoors"></b-img>
                                                <h5 class="product-name">{{product.name}}</h5>
                                                <div>
                                                    <b-button v-if="isProductInCart(product)" @click="removeProductFromCart(product)" variant="link" class="remove">
                                                        <span>Remove</span>
                                                    </b-button>

                                                    <b-button v-else @click="addProductToCart(product)" class="agg-button agg-button--filled-green">
                                                        <span>Add to order</span>
                                                    </b-button>
                                                </div>
                                            </div>
                                        </b-col>
                                    </b-row>
                                </div>
                            </b-col>

                            <b-col cols="12" lg="5" class="pl-md-3">
                                <div class="ag-form-container ag-checkout-form bg-white py-4">
                                    <b-form>
                                        <!--Processing time-->
                                        <b-form-row class="m-0">
                                            <b-form-group class="ag-radio-group" label="Processing time" label-class="bold">
                                                <b-form-radio
                                                    v-for="(option, index) in processingOptions"
                                                    :key="'processing-option-' + index"
                                                    v-model="cart.processing.options.name"
                                                    :name="option.name"
                                                    :value="option.value"
                                                    @change="onFeesChange"
                                                >
                                                    <span v-if="option.price">
                                                        {{option.label}} {{getCurrencyLabel(cart)}}${{option.price}}
                                                    </span>
                                                    <span v-else>
                                                        {{option.label}}
                                                    </span>
                                                </b-form-radio>
                                            </b-form-group>
                                            <small class="description">Get your results faster by upgrading your processing time.</small>
                                        </b-form-row>

                                        <!--Follow-up consultation-->
                                        <b-form-row class="mx-0 my-4">
                                            <b-form-group class="ag-checkbox-group mt-4" label="Consultation" label-class="bold">
                                                <b-form-checkbox
                                                    size="lg"
                                                    v-for="(option, index) in consultationOptions"
                                                    :key="'consultation-option-' + index"
                                                    v-model="cart.consultation.value"
                                                    :value="option.checkedValue"
                                                    :unchecked-value="option.unchecked"
                                                    :name="option.name"
                                                    @change="onFeesChange"
                                                >
                                                    {{option.label}}
                                                </b-form-checkbox>
                                            </b-form-group>
                                            <small class="description">Online consultation to discuss your results with an experienced Naturopath.</small>
                                        </b-form-row>

                                    </b-form>
                                </div>

                                <div>
                                    <h2 class="payment-title green">Order details</h2>

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
                                        <tr v-for="item in cart.items" :key="'product-' + item.options.id">
                                            <td class="product-name text-left border-top-0">
                                                <div class="product-details">{{item.options.name}}</div>
                                            </td>
                                            <td class="product-total text-right border-top-0">
                                                <del><span><bdi>{{getCurrencyLabel(cart)}}<span>$</span>{{item.options.price}}</bdi></span></del>
                                            </td>
                                        </tr> <!--Product Row-->

                                        <tr>
                                            <td class="product-name text-left border-top-0">
                                                <div class="product-details">Processing {{ cart.processing.amount === 0 ? "(Free)" : ''}}</div>
                                            </td>
                                            <td class="product-total text-right border-top-0">
                                                <span><bdi>{{getCurrencyLabel(cart)}}<span>$</span>{{ cart.processing.amount }}</bdi></span>
                                            </td>
                                        </tr>

                                        </tbody>

                                        <tfoot>
                                        <tr class="order-total">
                                            <th class="border-right text-left">Order Total (incl GST):</th>
                                            <td class="text-right"><strong><span><bdi>{{ getCurrencyLabel(cart) }}<span>$</span>{{ cart.totals.total }}</bdi></span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </b-col>
                        </b-row>

                        <b-row>
                            <b-col cols="12" md="8">
                                <!--Our Pricing table-->
                                <div class="our-pricing bg-white p-3">

                                    <h5 class="green pricing-title bold">Our Pricing</h5>

                                    <div>
                                        <p>1st Test $135, all others $99 each.<br>
                                            Order 2 Tests, receive 15.3% discount.<br>
                                            Order 3 Tests, receive 17.7% discount.<br>
                                            Order 4 Tests, receive 20.7% discount.</p>
                                    </div>

<!--                                    <div class="below-pricing">-->
<!--                                        &lt;!&ndash;<p class="mb-0">$234 (normally $270)</p>&ndash;&gt;-->
<!--                                        <p class="strong">Includes 2 tests discount of 15.3%</p>-->
<!--                                    </div>-->

                                </div>
                            </b-col>

                            <b-col cols="12" md="4" class="text-right">
                                <button @click="goToPayment()" class="agg-button agg-button--filled-green btn-next" type="button">NEXT</button>
                            </b-col>
                        </b-row>
                    </b-container>

                </div>

            </div>
        </div>
    </div>
</template>

<script>

import processingOptions from "../config/processingOptions";
import cart, {scrubForUI, getCurrencyLabel} from "../model/cart";
import consultationOptions from "../config/consultationOptions";
import API_CONFIG from "../network/API_CONFIG";
import * as axios from "axios";

export default {
    name: 'OrderTests',
    mounted() {
        this.getCurrent();
        this.getProducts();
    },
    data() {
        return {
            cart: cart,
            products: [],
            processingOptions: processingOptions,
            consultationOptions: consultationOptions,
        }
    },
    computed: {
        isUserInvalid() {
            return !this.cart?.firstName || !this.cart.lastName;
        },
        isOrderInvalid() {
            return this.cart?.items?.length === 0;
        }
    },
    methods: {
        getCurrencyLabel: getCurrencyLabel,
        getProducts() {
            axios.get(API_CONFIG.GET_PRODUCTS.url, this.cart).then(({data}) => this.products = data);
        },
        addProductToCart(product) {
            const items = this.cart.items.map((item) =>  item.options.id);
            items.push(product.id);
            axios.post(
                API_CONFIG.POST_TESTS.url,
                API_CONFIG.POST_TESTS.body({
                    items: items
                })
            ).then(({data}) => {
                this.cart = scrubForUI(data.data);
                this.$forceUpdate();
            });
        },
        removeProductFromCart(product) {
            const index = this.cart.items.findIndex((item) => item.options.id === product.id);
            this.cart.items.splice(index, 1);
            axios.post("/api/order/tests", {
                items: this.cart.items.map((item) => item.options.id )
            }).then(({data}) => {
                this.cart = scrubForUI(data.data);
                this.$forceUpdate();
            });
        },
        isProductInCart(product) {
            if (this.cart.length === 0) { return false };
            return this.cart.items.find((item) => item.options.id === product.id);
        },
        goToPayment() {
            if (this.isOrderInvalid) {
                return;
            }

            this.$router.push({ name: 'order-payment' }).catch(() => {})
        },
        onFeesChange() {
            axios.post(
                API_CONFIG.POST_FEES.url,
                API_CONFIG.POST_FEES.body({
                    processing: this.cart.processing.options.name,
                    consultation: this.cart.consultation.value
                })).then(({data}) => {
                    this.cart = scrubForUI(data.data);
                    this.$forceUpdate();
            });
        },
        getCurrent() {
            axios.get(API_CONFIG.GET_CURRENT.url).then(({data}) => {
                this.cart = scrubForUI(data.data);
                if (!this.cart.firstName && !this.cart.lastName) {
                    this.$router.push({ name:'order-who' }).catch(() => {})
                }
            });
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";

.btn-next {
    margin-top: 25%;
}

.product-thumbnail {
    width: 100%;
    max-width: 100%;
    height: 160px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
}

.product-item {
    text-align: center;
    margin-bottom: 50px;

    .agg-button {
        padding: 10px;
        min-width: 120px;
        font-size: 12px;
        line-height: 1;
        &:before {
            display: none;
        }
    }
    .btn.remove {
        color: #888;
        font-size: 11px;
        font-weight: 300;
        text-decoration: underline;
    }
    .product-name {
        font-size: 16px;
        font-weight: 500;
        padding: 9px 0;
        margin-top: 10px;
    }
    &.selected {
        position: relative;
          &:after {
            content: '';
            position: absolute;
            z-index: 1;
            background: rgba(255, 255, 255, 0.5) url("../assets/images/green-tick-icon.png") no-repeat center;
            left: 0;
            right: 0;
            top: 0;
            background-size: 100px;
            width: 100%;
            height: 160px;
        }
    }
}

.ag-coupon-apply {
    .btn.btn-link {
        font-weight: 100;
        outline: none;
        box-shadow: none;

        &:active,
        &:focus,
        &:visited,
        &:hover {
            color: $green;
            text-decoration: none;
            outline: none;
            box-shadow: none;
        }
    }
}

</style>
