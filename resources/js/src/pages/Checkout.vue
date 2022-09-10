<template>
    <div class="wrapper" role="document">
        <div class="content">
            <div class="main">
                <div>
                    <b-container class="px-0">

                        <h2 class="user-recommended mt-4">Order for <span class="green">@usernme</span></h2>

                        <b-row no-gutters>
                            <b-col cols="12" md="8" class="pr-md-3">
                                <div class="ag-checkout-products p-4 bg-white">
                                    <b-row>
                                        <b-col cols="12" md="6">
                                            <div class="product-item">
                                                <b-img class="product-thumbnail" :src="require('../assets/images/product-womens-health.jpeg').default" fluid alt="Picture of a beautiful woman wearing white shirt in the outdoors"></b-img>
                                                <h5 class="product-name">Comprehensive Women's Health Test</h5>
                                                <div>
                                                    <b-button class="agg-button agg-button--filled-green">
                                                        <span>Add to order</span>
                                                    </b-button>
                                                </div>
                                            </div>
                                        </b-col>

                                        <b-col cols="12" md="6">
                                            <div class="product-item">
                                                <b-img class="product-thumbnail" :src="require('../assets/images/product-mens-test.jpeg').default" fluid alt="Picture of an athletic man jogging in the outdoors"></b-img>
                                                <h5 class="product-name">Comprehensive Men's Health Test</h5>
                                                <div>
                                                    <b-button class="agg-button agg-button--filled-green">
                                                        <span>Add to order</span>
                                                    </b-button>
                                                </div>
                                            </div>
                                        </b-col>

                                        <b-col cols="12" md="6">
                                            <div class="product-item selected">
                                                <b-img class="product-thumbnail" :src="require('../assets/images/product-food-test.jpeg').default" fluid alt="Healthy breakfast cereal with salmon and assorted healthy vegetables"></b-img>
                                                <h5 class="product-name">Food and Environmental Sensitivity Test</h5>
                                                <div>
<!--                                                    <button type="button" class="agg-button agg-button&#45;&#45;filled-green">-->
<!--                                                        <span>Add to order</span>-->
<!--                                                    </button>-->
                                                    <b-button variant="link" class="remove">
                                                        <span>Remove</span>
                                                    </b-button>
                                                </div>
                                            </div>
                                        </b-col>

                                        <b-col cols="12" md="6">
                                            <div class="product-item">
                                                <b-img class="product-thumbnail" :src="require('../assets/images/product-nutrition-test.jpeg').default" fluid alt="A variety of fruits and vegetables in a wooden bowl"></b-img>
                                                <h5 class="product-name">Optimum Nutrition Test</h5>
                                                <div>
                                                    <b-button class="agg-button agg-button--filled-green">
                                                        <span>Add to order</span>
                                                    </b-button>
                                                </div>
                                            </div>
                                        </b-col>

                                        <b-col cols="12" md="6">
                                            <div class="product-item">
                                                <b-img class="product-thumbnail" :src="require('../assets/images/product-sleep-test.jpeg').default" fluid alt="Picture of a pretty young woman sleeping in bed."></b-img>
                                                <h5 class="product-name">Sleep and Mood Test</h5>
                                                <div>
                                                    <b-button class="agg-button agg-button--filled-green">
                                                        <span>Add to order</span>
                                                    </b-button>
                                                </div>
                                            </div>
                                        </b-col>

                                    </b-row>
                                </div>
                            </b-col>

                            <b-col cols="12" md="4" class="pl-md-3">
                                <!--Our Pricing table-->
                                <div class="our-pricing bg-white p-3">

                                    <h5 class="green pricing-title">Our Pricing</h5>

                                    <div>
                                        <p>1st Test $135, all others $99 each.<br>
                                            Order 2 Tests, receive 15.3% discount.<br>
                                            Order 3 Tests, receive 17.7% discount.<br>
                                            Order 4 Tests, receive 20.7% discount.</p>
                                    </div>

                                    <div class="below-pricing">
                                        <!--<p class="mb-0">$234 (normally $270)</p>-->
                                        <p class="strong">Includes 2 tests discount of 15.3%</p>

                                    </div>

                                </div>


                            </b-col>
                        </b-row>

                        <div class="ag-checkout-details bg-white p-4 mt-3 ag-coupon-apply">
<!--                            Coupon Apply-->
                            <div>
                                <div class="agg-light-grey-bg px-3 py-2 mb-4">
                                    <p class="mb-0">
                                        Have a coupon?
                                        <b-button class="green no-underline" v-b-toggle.collapse-coupon variant="link">Click here to enter your code</b-button>
                                    </p>
                                </div>

                                <b-collapse id="collapse-coupon">
                                    <b-card>
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <b-form>
                                            <b-form-row class="ag-form-container">
                                                <b-col class="pr-md-4">
                                                    <b-form-group
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
                                                <b-col class="pl-md-4">
                                                    <b-button type="submit" class="agg-button agg-button--red w-100" name="apply_coupon" value="Apply coupon">Apply coupon</b-button>
                                                </b-col>
                                            </b-form-row>
                                        </b-form>
                                    </b-card>
                                </b-collapse>
                            </div>
                        </div>

                        <div class="ag-form-container ag-checkout-form bg-white p-4">
                            <b-form>
<!--                                Processing time-->
                                <b-form-row class="m-0">
                                    <b-form-group class="ag-radio-group" label="Processing time" label-class="bold">
                                        <b-form-radio name="processing-time" value="standard" id="standard">Standard</b-form-radio>
                                        <b-form-radio name="processing-time" value="fast-3-working-days">FAST (3 working days) (NZD$30.00 )</b-form-radio>
                                        <b-form-radio name="processing-time" value="urgent-1-working-day">URGENT (1 working day) (NZD$60.00 )</b-form-radio>
                                    </b-form-group>
                                    <small class="description">Get your results faster by upgrading your processing time.</small>
                                </b-form-row>

<!--                                Follow-up consultation-->
                                <b-form-row class="mx-0 my-4">
                                    <b-form-group class="ag-checkbox-group mt-4">
                                        <b-form-checkbox
                                            size="lg"
                                            id="checkbox-consultation"
                                            name="checkbox-consultation"
                                            value="1"
                                        >
                                            Add a Follow-up Consultation (USD$59.00)
                                        </b-form-checkbox>
                                    </b-form-group>
                                    <small class="description">Online consultation to discuss your results with an experienced Naturopath.</small>
                                </b-form-row>

                                <b-row>
<!--                                    My Information-->
                                    <b-col cols="12" md="6" class="customer-details pr-lg-5">
                                        <h2 class="payment-title">My information</h2>

                                        <b-form-row>
                                            <b-col cols="12" sm="6">
                                                <b-form-group
                                                    class="required"
                                                    label="First name"
                                                    label-for="billing_first_name"
                                                >
                                                    <b-form-input
                                                        id="billing_first_name"
                                                        type="text"
                                                        placeholder=""
                                                        required
                                                        autocomplete="given-name"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="12" sm="6">
                                                <b-form-group
                                                    class="required"
                                                    label="Last name"
                                                    label-for="billing_last_name"
                                                >
                                                    <b-form-input
                                                        id="billing_last_name"
                                                        type="text"
                                                        placeholder=""
                                                        required
                                                        autocomplete="family-name"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                        </b-form-row>

                                        <b-form-group
                                            label="Company name (optional)"
                                            label-for="billing_company"
                                        >
                                            <b-form-input
                                                id="billing_company"
                                                type="text"
                                                placeholder=""
                                                autocomplete="organization"
                                            ></b-form-input>
                                        </b-form-group>

                                        <b-form-group
                                            class="required"
                                            label="Country / Region"
                                            label-for="billing_country"
                                        >
                                            <b-form-select class="form-control" required id="billing_country" :options="country_options"></b-form-select>
                                        </b-form-group>

                                        <b-form-group
                                            class="required"
                                            label="Street address"
                                            label-for="billing_address_1"
                                        >
                                            <b-form-input
                                                required
                                                id="billing_address_1"
                                                type="text"
                                                placeholder="House number and street name"
                                                autocomplete="address-line1"
                                            ></b-form-input>
                                        </b-form-group>

                                        <b-form-row>
                                            <b-col cols="12" sm="6">
                                                <b-form-group
                                                    label="Apartment (optional)"
                                                    label-for="billing_address_2"
                                                >
                                                    <b-form-input
                                                        id="billing_address_2"
                                                        type="text"
                                                        placeholder="Apartment, suite, unit, etc. (optional)"
                                                        autocomplete="address-line2"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="12" sm="6">
                                                <b-form-group
                                                    class="required"
                                                    label="Town / City"
                                                    label-for="billing_city"
                                                >
                                                    <b-form-input
                                                        required
                                                        id="billing_city"
                                                        type="text"
                                                        placeholder=""
                                                        autocomplete="address-level2"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                        </b-form-row>

                                        <b-form-row>
                                            <b-col cols="12" sm="6">
                                                <b-form-group
                                                    label="Region (optional)"
                                                    label-for="billing_state"
                                                >
                                                    <b-form-select class="form-control" id="billing_state" :options="region_options"></b-form-select>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="12" sm="6">
                                                <b-form-group
                                                    class="required"
                                                    label="Postcode"
                                                    label-for="billing_postcode"
                                                >
                                                    <b-form-input
                                                        required
                                                        id="billing_postcode"
                                                        type="text"
                                                        placeholder=""
                                                        autocomplete="postal-code"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                        </b-form-row>

                                        <b-form-row>
                                            <b-col cols="12" sm="6">
                                                <b-form-group
                                                    class="required"
                                                    label="Phone"
                                                    label-for="billing_phone"
                                                >
                                                    <b-form-input
                                                        required
                                                        id="billing_phone"
                                                        type="tel"
                                                        placeholder=""
                                                        autocomplete="tel"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                            <b-col cols="12" sm="6">
                                                <b-form-group
                                                    class="required"
                                                    label="Email"
                                                    label-for="billing_email"
                                                >
                                                    <b-form-input
                                                        required
                                                        id="billing_email"
                                                        type="email"
                                                        placeholder=""
                                                        autocomplete="email username"
                                                    ></b-form-input>
                                                </b-form-group>
                                            </b-col>
                                        </b-form-row>

                                        <b-form-group
                                            class="required"
                                            label="Create account password"
                                            label-for="account_password"
                                        >
                                            <b-form-input
                                                required
                                                id="account_password"
                                                type="password"
                                                placeholder=""
                                                autocomplete="off"
                                            ></b-form-input>
                                        </b-form-group>
                                    </b-col>
<!--                                    Order Details-->
                                    <b-col cols="12" md="6" class="customer-details pl-lg-5">
                                        <h2 class="payment-title">Order details</h2>

                                        <table class="table b-table table-bordered table-responsive-sm my-account-table view-table mt-5">
                                            <tbody>
                                                <tr class="user-name">
                                                    <td class="border-right">
                                                        <strong>Order for:</strong>
                                                    </td>
                                                    <td>
                                                        @username
                                                    </td>
                                                </tr>

                                                <tr class="tests-ordered">
                                                    <td class="border-right">
                                                        <strong>Tests ordered:</strong>
                                                    </td>
                                                    <td colspan="2"></td>
                                                </tr>

                                                <tr>
                                                    <td class="product-name product-id-148">
                                                        <div class="product-details">Food and Environmental Sensitivity Test</div>
                                                    </td>
                                                    <td class="product-total">
                                                        <del><span><bdi>NZD<span>$</span>135.00</bdi></span></del>
                                                        <ins><span><bdi>NZD<span>$</span>117.00</bdi></span></ins>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-name">
                                                        <div class="product-details">Comprehensive Women's Health Test</div>
                                                    </td>
                                                    <td class="product-total">
                                                        <del><span><bdi>NZD<span>$</span>135.00</bdi></span></del>
                                                        <ins><span><bdi>NZD<span>$</span>117.00</bdi></span></ins>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-name">
                                                        <div class="product-details">Standard Processing (free)</div>
                                                    </td>
                                                    <td class="product-total">
                                                        <span><bdi>NZD<span>$</span>0.00</bdi></span>
                                                    </td>
                                                </tr>

                                            </tbody>

                                            <tfoot>
                                                <tr class="fee">
                                                    <th class="border-right">Processing time - Standard</th>
                                                    <td><span><bdi>NZD<span>$</span>0.00</bdi></span></td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th class="border-right">Order Total (incl GST):</th>
                                                    <td>
                                                        <strong><span><bdi>NZD<span>$</span>234.00</bdi></span></strong>
                                                        <small class="includes_tax">(includes <span>NZD<span>$</span>30.52</span> GST)</small>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>

<!--                                        Payment-->
                                        <h2 class="payment-title">Payment details</h2>

                                        <div class="ag-checkout-payment mt-5">
                                            <div class="ag-form-container ag-checkout-form">
                                                <b-form-row>
                                                    <b-form-group class="ag-radio-group">
                                                        <b-form-radio name="payment" value="credit_card" id="credit_card">Pay by Credit Card</b-form-radio>
                                                        <p><strong>Enter details below</strong></p>
                                                        <b-form-radio name="payment" value="1111">Visa ending in 1111 (expires 11/22)</b-form-radio>
                                                        <b-form-radio name="payment" value="new">Use a new payment method</b-form-radio>
                                                    </b-form-group>
                                                </b-form-row>

                                                <b-form-row>
                                                    <b-col cols="12" sm="6">
                                                        <b-form-group
                                                            class="required"
                                                            label="Expiry Date"
                                                            label-for="exp_date"
                                                        >
                                                            <b-form-input
                                                                id="exp_date"
                                                                type="text"
                                                                placeholder="MM/YY"
                                                                autocomplete="off"
                                                            ></b-form-input>
                                                        </b-form-group>
                                                    </b-col>
                                                    <b-col cols="12" sm="6">
                                                        <b-form-group
                                                            class="required"
                                                            label="Card Code (CVC)"
                                                            label-for="cvc"
                                                        >
                                                            <b-form-input
                                                                id="cvc"
                                                                type="text"
                                                                placeholder="CVC"
                                                                autocomplete="off"
                                                            ></b-form-input>
                                                        </b-form-group>
                                                    </b-col>
                                                </b-form-row>

                                                <b-form-group
                                                    class="required"
                                                    label="Card Number"
                                                    label-for="card_number"
                                                >
                                                    <b-form-input
                                                        id="card_number"
                                                        type="text"
                                                        placeholder="1234 1234 1234 1234"
                                                        autocomplete="off"
                                                    ></b-form-input>
                                                </b-form-group>

                                                <b-form-row class="mt-5">
                                                    <b-form-group class="ag-radio-group ag-checkbox-payment">
                                                        <b-form-checkbox
                                                            id="stripe-new-payment-method"
                                                            name="stripe-new-payment-method"
                                                            value="true"
                                                            class="mb-3"
                                                        >
                                                            Save payment information to my account for future purchases.
                                                        </b-form-checkbox>

                                                        <b-form-radio class="mb-3" name="payment" value="ib">Pay by internet banking.</b-form-radio>

                                                        <b-form-checkbox
                                                            id="terms"
                                                            name="terms"
                                                            value="true"
                                                        >
                                                            I have read and agree to the website
                                                            <b-link target="_blank" to="/terms-and-conditions">terms and conditions</b-link>
                                                            <span style="color: #fe585e">*</span>
                                                        </b-form-checkbox>
                                                    </b-form-group>
                                                </b-form-row>
                                            </div>
                                        </div>

                                    </b-col>
                                </b-row>

                            </b-form>
                        </div>

                    </b-container>

                </div>



                <form name="checkout" method="post" class="checkout woocommerce-checkout wc-checkout-add-ons-dropzone" action="https://allergenicstesting.com/checkout/" enctype="multipart/form-data" novalidate="novalidate">
                    <div class="container bg-white">
                        <div class="row">


                            <div class="col-xs-12 col-md-6 customer-details pl-lg-5">

                                <h2 class="payment-title">Order details</h2>


                                <div id="order_review" class="woocommerce-checkout-review-order">





                                    <div id="payment" class="woocommerce-checkout-payment">

                                        <h2 class="payment-title">Payment</h2>

                                        <ul class="wc_payment_methods payment_methods methods">
                                            <li class="wc_payment_method payment_method_stripe">
                                                <input id="payment_method_stripe" type="radio" class="input-radio" name="payment_method" value="stripe" checked="checked" data-order_button_text="">

                                                <label for="payment_method_stripe">
                                                    Pay by Credit Card <img src="https://allergenicstesting.com/app/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" class="stripe-visa-icon stripe-icon" alt="Visa"><img src="https://allergenicstesting.com/app/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" class="stripe-mastercard-icon stripe-icon" alt="Mastercard"><img src="https://allergenicstesting.com/app/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" class="stripe-amex-icon stripe-icon" alt="American Express"><img src="https://allergenicstesting.com/app/plugins/woocommerce-gateway-stripe/assets/images/jcb.svg" class="stripe-jcb-icon stripe-icon" alt="JCB">	</label>
                                                <div class="payment_box payment_method_stripe">
                                                    <div id="stripe-payment-data" data-email="carl@16hands.co.nz" data-full-name=" " data-currency="nzd"><p>Enter details below</p>
                                                        <ul class="woocommerce-SavedPaymentMethods wc-saved-payment-methods" data-count="2"><li class="woocommerce-SavedPaymentMethods-token">
                                                            <input id="wc-stripe-payment-token-1" type="radio" name="wc-stripe-payment-token" value="1" style="width:auto;" class="woocommerce-SavedPaymentMethods-tokenInput" checked="checked">
                                                            <label for="wc-stripe-payment-token-1">Visa ending in 1111 (expires 11/22)</label>
                                                            <div class="stripe-source-errors" role="alert"></div></li><li class="woocommerce-SavedPaymentMethods-token">
                                                            <input id="wc-stripe-payment-token-236" type="radio" name="wc-stripe-payment-token" value="236" style="width:auto;" class="woocommerce-SavedPaymentMethods-tokenInput">
                                                            <label for="wc-stripe-payment-token-236">Visa ending in 9734 (expires 03/21)</label>
                                                            <div class="stripe-source-errors" role="alert"></div></li><li class="woocommerce-SavedPaymentMethods-new">
                                                            <input id="wc-stripe-payment-token-new" type="radio" name="wc-stripe-payment-token" value="new" style="width:auto;" class="woocommerce-SavedPaymentMethods-tokenInput">
                                                            <label for="wc-stripe-payment-token-new">Use a new payment method</label>
                                                        </li></ul>		<fieldset id="wc-stripe-cc-form" class="wc-credit-card-form wc-payment-form" style="background:transparent;">

                                                            <div class="form-row form-row-wide">
                                                                <label for="stripe-card-element">Card Number <span class="required">*</span></label>
                                                                <div class="stripe-card-group">
                                                                    <div id="stripe-card-element" class="wc-stripe-elements-field StripeElement empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe name="__privateStripeFrame7976" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/elements-inner-card-904c2ab9786247e13b8c22d0010fc4d1.html#locale=en&amp;wait=false&amp;mids[guid]=NA&amp;mids[muid]=NA&amp;mids[sid]=NA&amp;style[base][iconColor]=%23666EE8&amp;style[base][color]=%2331325F&amp;style[base][fontSize]=15px&amp;style[base][::placeholder][color]=%23CFD7E0&amp;rtl=false&amp;componentName=cardNumber&amp;keyMode=live&amp;apiKey=pk_live_86XG97UF7Y2fZncHNqtOZWip&amp;referrer=https%3A%2F%2Fallergenicstesting.com%2Fcheckout%2F&amp;controllerId=__privateStripeController7971" title="Secure card number input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; color-scheme: normal !important; height: 18px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>

                                                                    <i class="stripe-credit-card-brand stripe-card-brand" alt="Credit Card"></i>
                                                                </div>
                                                            </div>

                                                            <div class="form-row form-row-first">
                                                                <label for="stripe-exp-element">Expiry Date <span class="required">*</span></label>

                                                                <div id="stripe-exp-element" class="wc-stripe-elements-field StripeElement empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe name="__privateStripeFrame7977" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/elements-inner-card-904c2ab9786247e13b8c22d0010fc4d1.html#locale=en&amp;wait=false&amp;mids[guid]=NA&amp;mids[muid]=NA&amp;mids[sid]=NA&amp;style[base][iconColor]=%23666EE8&amp;style[base][color]=%2331325F&amp;style[base][fontSize]=15px&amp;style[base][::placeholder][color]=%23CFD7E0&amp;rtl=false&amp;componentName=cardExpiry&amp;keyMode=live&amp;apiKey=pk_live_86XG97UF7Y2fZncHNqtOZWip&amp;referrer=https%3A%2F%2Fallergenicstesting.com%2Fcheckout%2F&amp;controllerId=__privateStripeController7971" title="Secure expiration date input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; color-scheme: normal !important; height: 18px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
                                                            </div>

                                                            <div class="form-row form-row-last">
                                                                <label for="stripe-cvc-element">Card Code (CVC) <span class="required">*</span></label>
                                                                <div id="stripe-cvc-element" class="wc-stripe-elements-field StripeElement empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe name="__privateStripeFrame7978" frameborder="0" allowtransparency="true" scrolling="no" allow="payment *" src="https://js.stripe.com/v3/elements-inner-card-904c2ab9786247e13b8c22d0010fc4d1.html#locale=en&amp;wait=false&amp;mids[guid]=NA&amp;mids[muid]=NA&amp;mids[sid]=NA&amp;style[base][iconColor]=%23666EE8&amp;style[base][color]=%2331325F&amp;style[base][fontSize]=15px&amp;style[base][::placeholder][color]=%23CFD7E0&amp;rtl=false&amp;componentName=cardCvc&amp;keyMode=live&amp;apiKey=pk_live_86XG97UF7Y2fZncHNqtOZWip&amp;referrer=https%3A%2F%2Fallergenicstesting.com%2Fcheckout%2F&amp;controllerId=__privateStripeController7971" title="Secure CVC input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; color-scheme: normal !important; height: 18px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
                                                            </div>
                                                            <div class="clear"></div>

                                                            <!-- Used to display form errors -->
                                                            <div class="stripe-source-errors" role="alert"></div>
                                                            <br>
                                                            <div class="clear"></div>
                                                        </fieldset>
                                                        <p class="form-row woocommerce-SavedPaymentMethods-saveNew woocommerce-validated">
                                                            <input id="wc-stripe-new-payment-method" name="wc-stripe-new-payment-method" type="checkbox" value="true" style="width:auto;">
                                                            <label for="wc-stripe-new-payment-method" style="display:inline;">Save payment information to my account for future purchases.</label>
                                                        </p></div>		</div>
                                            </li>
                                            <li class="wc_payment_method payment_method_paymentexpress">
                                                <input id="payment_method_paymentexpress" type="radio" class="input-radio" name="payment_method" value="paymentexpress" data-order_button_text="">

                                                <label for="payment_method_paymentexpress">
                                                    Pay by internet banking. <img src="https://allergenicstesting.com/app/plugins/woopaymentexpress/paymentexpress.gif" alt="Pay by internet banking.">	</label>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order">
                                            <noscript>
                                                Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                            </noscript>

                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                <div class="woocommerce-privacy-policy-text"></div>
                                                <p class="form-row validate-required px-0">
                                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                        <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" id="terms">
                                                        <span class="woocommerce-terms-and-conditions-checkbox-text">I have read and agree to the website <a href="https://allergenicstesting.com/terms-and-conditions/" class="woocommerce-terms-and-conditions-link" target="_blank">terms and conditions</a></span>&nbsp;<span class="required">*</span>
                                                    </label>
                                                    <input type="hidden" name="terms-field" value="1">
                                                </p>
                                            </div>


                                            <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>

                                            <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="ff8dee8878"><input type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">	</div>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>

                </form>

            </div>
        </div>
    </div>
</template>

<script>

export default {
  name: 'Checkout',
    data() {
        return {
            country_options: [
                { value: null, text: 'Select a country / region…' },
                { value: 'NZ', text: 'New Zealand' },
                { value: 'AUS', text: 'Australia' }
            ],
            region_options: [
                { value: null, text: 'Select an option' },
                { value: '01', text: 'Northland' },
                { value: '02', text: 'Auckland' }
            ]
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";

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
