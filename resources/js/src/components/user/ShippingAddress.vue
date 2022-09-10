<template>
    <div class="ag-form-container ag-edit-form">
        <h3>Shipping address</h3>
            <b-form>
                <b-form-row>
                    <b-col cols="12" sm="6">
                        <b-form-group
                            class="required"
                            label="First name"
                            label-for="shipping_first_name"
                        >
                            <b-form-input
                                id="shipping_first_name"
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
                            label-for="shipping_last_name"
                        >
                            <b-form-input
                                id="shipping_last_name"
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
                    label-for="shipping_company"
                >
                    <b-form-input
                        id="shipping_company"
                        type="text"
                        placeholder=""
                        autocomplete="organization"
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    class="required"
                    label="Country / Region"
                    label-for="shipping_country"
                >
                    <b-form-select class="form-control" required id="shipping_country" :options="country_options"></b-form-select>
                </b-form-group>

                <b-form-group
                    class="required"
                    label="Street address"
                    label-for="shipping_address_1"
                >
                    <b-form-input
                        required
                        id="shipping_address_1"
                        type="text"
                        placeholder="House number and street name"
                        autocomplete="address-line1"
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    class="mt-3"
                    label=""
                    label-for="shipping_address_2"
                >
                    <b-form-input
                        id="shipping_address_2"
                        type="text"
                        placeholder="Apartment, suite, unit, etc. (optional)"
                        autocomplete="address-line2"
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    class="required"
                    label="Town / City"
                    label-for="shipping_city"
                >
                    <b-form-input
                        required
                        id="shipping_city"
                        type="text"
                        placeholder=""
                        autocomplete="address-level2"
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    label="Region (optional)"
                    label-for="shipping_state"
                >
                    <b-form-select class="form-control" id="shipping_state" :options="region_options"></b-form-select>
                </b-form-group>

                <b-form-group
                    class="required"
                    label="Postcode"
                    label-for="shipping_postcode"
                >
                    <b-form-input
                        required
                        id="shipping_postcode"
                        type="text"
                        placeholder=""
                        autocomplete="postal-code"
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    class="required"
                    label="Phone"
                    label-for="shipping_phone"
                >
                    <b-form-input
                        required
                        id="shipping_phone"
                        type="tel"
                        placeholder=""
                        autocomplete="tel"
                    ></b-form-input>
                </b-form-group>

<!--                <b-form-group-->
<!--                    class="required"-->
<!--                    label="Email"-->
<!--                    label-for="shipping_email"-->
<!--                >-->
<!--                    <b-form-input-->
<!--                        required-->
<!--                        id="shipping_email"-->
<!--                        type="email"-->
<!--                        placeholder=""-->
<!--                        autocomplete="email username"-->
<!--                    ></b-form-input>-->
<!--                </b-form-group>-->



                <b-form-row class="justify-content-center mt-5">
                    <b-button type="submit" class="agg-button agg-button--red" name="login" value="Log in">Save address</b-button>
                </b-form-row>

            </b-form>
        </div>
</template>

<script>

export default {
  name: 'ShippingAddress',
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
</style>
