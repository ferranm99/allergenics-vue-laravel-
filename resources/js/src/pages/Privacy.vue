<template>
    <div class="wrapper" role="document">
        <div class="content">
            <div class="main">
                <div class="agg-content-holder">
                    <b-container>
                        <b-row>
                            <b-col cols="12" sm="10" class="mx-auto">
                                <GeneralContent
                                content='
                               <h1>Privacy</h1>
                               <p>As health providers we take client confidentiality very seriously.</p>
                                <p>Allergenics will store your information securely and use it to process your hair test, produce a test report and if required provide you with a natural health prescription. We will not sell or provide your information to any other third party. Allergenics will store your information securely and not divulge it to any other party.</p>
                                <p>Allergenics may use your data to send you information on natural health products and services we think may be of interest to you. You can opt out of these at any time by contacting us.</p>
                                <p>You are welcome to contact us at any time to see a copy of the information we have and to amend it or ask that we delete it.</p>
                                <p>Your privacy is a top concern for the Allergenics team. We have stringent policies and practices to protect it. If you do have any questions please email or call us.</p>
                                <p>Thank you for trusting us with your information.</p>
                                '>
                                </GeneralContent>
                            </b-col>
                        </b-row>
                    </b-container>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import GeneralContent from "../components/shared/GeneralContent.vue";

export default {
  name: 'Privacy',
    components: {
       GeneralContent
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
</style>
