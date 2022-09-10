<template>
    <div class="wrapper" role="document">
        <div class="content">
            <div class="main">
                <b-container>

                    <!--Public version-->
                    <b-row>
                        <b-col cols="12" md="10" class="survey-incomplete text-center mx-auto">
                            <div class="survey-incomplete-inner">

                                <p class="bold mt-30">Congratulations,</p>

                                <p>Your Allergenics test order has been placed and an order confirmation has been emailed to you.</p>

                                <p>Your order number is <strong>0</strong>.</p>
                            </div>

                            <div class="agg-light-green-bg">
                                <div class="survey-incomplete-inner">
                                    <!--<p class="bold mb-0">You're nearly done!</p>-->
                                    <p class="bold mb-0">There are still a few things we need you to do.</p>

                                    <!--hidden if no incomplete surveys-->
                                    <div>
                                        <!--<p>There are couple more things we need you to do</p>-->
                                        <h3 class="agg-subheading">Complete your health questionnaire.</h3>
                                        <p>In order for us to recommend the right supplementation regime for you, please complete the short health questionnaire.</p>
                                    </div>

                                    <div class="table b-table table-responsive-sm agg-survey-table">
                                        <table width="100%">
                                            <tbody>
                                            <tr>
                                                <th>DATE</th>
                                                <th>CLIENT NAME</th>
                                                <th>QUESTIONNAIRE LINK</th>
                                            </tr>

                                            <tr>
                                                <td>2 May 2020</td>
                                                <td>Maree </td>
                                                <td>
                                                    <b-link to="/start-here/4Yw7Kfs69wf/?respondent=34b79b89-8c16-11ea-810f-0241285c7fbc">Complete Questionnaire</b-link>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>3 May 2020</td>
                                                <td>Karoona  </td>
                                                <td>
                                                    <b-link to="/start-here/4Yw7Kfs69wf/?respondent=1854ad6d-8cd9-11ea-b790-0a05468e9248">Complete Questionnaire</b-link>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>10 May 2020</td>
                                                <td>TEAO WARD</td>
                                                <td>
                                                    <b-link to="/start-here/4Yw7Kfs69wf/?respondent=b807ddc1-9237-11ea-aeb2-0a61a81fb6ce">Complete Questionnaire</b-link>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>15 September 2020</td>
                                                <td>Louise </td>
                                                <td>
                                                    <b-link to="/start-here/4Yw7Kfs69wf/?respondent=b5e0f092-f72a-11ea-854c-06f405c359e6">Complete Questionnaire</b-link>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <hr>

                                    <div>
                                        <h3 class="agg-subheading mt-0 mb-30">Send us your sample.</h3>

                                        <p v-if="content.data && content.data.success_address_note.length"
                                           v-html="content.data && content.data.success_address_note"></p>
                                    </div>


                                    <div>
                                        <p>For information on how to take a sample
                                            <b-link @click="() => this.$router.push({ name: 'hair-sample' }).catch(() => {})">click here</b-link>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mt-30">
                                    <p>Any questions? Check out our
                                        <b-link @click="() => this.$router.push({ name: 'faqs' }).catch(() => {})">FAQs</b-link> or
                                        <b-link @click="() => this.$router.push({ name: 'contact' }).catch(() => {})">contact us</b-link>
                                    </p>
                                </div>

                                <!--ORDER BUTTON-->
                                <div class="ag-button-holder">
                                    <b-link to="/#pricing-block" class="agg-button agg-button--red">Order another test</b-link>
                                </div>
                            </div>

                        </b-col>
                    </b-row>
                    <!--Public version end-->

                </b-container>
            </div>
        </div>
    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'Success',
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/region/7').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";

.survey-incomplete {

    hr {
        border-top: 1px solid #999!important;
    }

    h3.agg-subheading {
        color: $green;
        font-family: $museosans;
    }

    h1 {
        color: $green;
        margin: 3rem 1rem 1rem 0;
        font-family: $museosans;
        text-align: left;
    }

    h2 {
        margin: 1rem 0 .5rem 0;
        color: $green;
        font-family: $museosans;
    }

    hr {
        border-color: $gray;
        width: 75%;
        margin: 2rem auto;
        border-width: .5px;
    }

    a:not(.agg-button--red) {
        color: $l-red;
        border-bottom: 1px solid $l-red;
        padding-bottom: 1px;
        @extend .transition;
        transition-property: color, border-bottom;
        &:hover{
            color: $green;
            border-bottom: 1px solid $green;
        }
    }

    .agg-survey-table {
        margin-bottom: 50px;
        background-color: #fff;
        text-align: center;
        th, td {
            border: 1px solid #999;
            padding: 0.5em;
            text-align: center;
        }
    }

    .agg-light-green-bg {
        padding: 30px 15px;

        h3.agg-subheading {
            font-weight: 100;
            font-size: 25px;
            margin-top: 40px;
            margin-bottom: 30px;
            font-family: $museosans;
            color: #414042;
        }
    }

    &-inner {
        max-width: 800px;
        margin: 0 auto;
    }

    .ag-button-holder {
        text-align: center;
    }
}

.page-template-success {
    .agg-heading {
        max-width: 820px;
        text-align: left;
        padding-bottom: 1rem;
        &.main-heading {
            max-width: 100%;
        }
        h1 {
            color: $green;
            margin: 5.6rem 1rem 0 1rem;
            font-family: $museosans;
        }
        p {
            margin-bottom: 0;
            max-width: 480px;
        }
        h2 {
            margin: 1rem 0 .5rem 0;
        }
        a:not(.agg-button--red) {
            color: $l-red;
            border-bottom: 1px solid $l-red;
            padding-bottom: 1px;
            @extend .transition;
            transition-property: color, border-bottom;
            &:hover{
                color: $green;
                border-bottom: 1px solid $green;
            }
        }
    }

    .ag-button-holder {
        text-align: left;
        padding: 20px 10px;
    }
}


.agg-light-green-bg {
    background-color: #87D0D6;
}
</style>
