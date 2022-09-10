<template>
    <b-container>
        <b-row>
            <b-col cols="12" lg="8" class="survey-incomplete mx-auto">

                <!--hidden if no incomplete surveys-->
                <p class="bold mt-30">Hi @username,</p>

                <p>You need to complete a health questionnaire for each person you are placing an order for. Below is a list of the orders you have made where the questionnaires have not yet been completed. Please click on the 'Complete questionnaire' link(s) below to finish each questionnaire:</p>

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

                    <p>We cannot process your order until we receive your sample. We’ll email you when your sample has been received and when your test results are ready.</p>

                    <p>You can send us your sample to:</p>

                    <b-row>
                        <b-col cols="12" xs="6" md="4">
                            <strong>By Post:</strong>
                            <p>Allergenics Limited,<br>
                                PO BOX 60 156,<br>
                                Titirangi,<br>
                                Auckland,<br>
                                New Zealand.
                            </p>
                        </b-col>
                        <b-col cols="12" xs="6" md="4">
                            <p>
                                If you wish to courier your sample please use:<br>
                                <strong>NZ Courier Post</strong> or<br>
                                <strong>Australia Courier Post</strong><br>
                                and courier to the<br>
                                <strong>PO Box address.</strong>
                            </p>
                        </b-col>
                    </b-row>

                    <div>
                        <p>For information on how to take a sample <b-link to="/hair-sample">click here</b-link></p>
                    </div>

                    <hr>

                    <div class="mt-30">
                        <p>Any questions? Check out our <b-link to="/faqs">FAQs</b-link> or <b-link to="/contact">contact us</b-link></p>
                    </div>

                    <!--ORDER BUTTON-->
                    <div class="ag-button-holder">
                        <b-link to="/start-here/4Yw7Kfs69wf" class="agg-button agg-button--red">Order another test</b-link>
                    </div>

                </div>

            </b-col>
        </b-row>

    </b-container>
</template>

<script>

export default {
  name: 'IncompleteQuestionnaires'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../../sass/_variables";
@import "../../../../sass/_mixins";

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
</style>
