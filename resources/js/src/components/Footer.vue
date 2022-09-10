<template>
    <footer class="content-info">
        <b-container>
            <b-row>
<!--                Contact-->
                <b-col cols="12" md="6" lg="2" class="footer-col">
                    <div class="footer-col-inner">
                        <h5><strong><span>Contact us</span></strong></h5>
                        <div class="contact-us">
                            <b-link @click="() => this.$router.push({ name: 'contact' }).catch(() => {})">See our contact details</b-link>

                            <ul>
                                <li>
                                    <b-link target="_blank" to="https://www.facebook.com/Allergenics/">
                                        <span class="icon-facebook"></span> Follow us
                                        <svg version="1.1" id="_x31_5" x="0px" y="0px" viewBox="0 0 128 227.3" xml:space="preserve">
                                            <path class="st0" d="M80.2,71.8V54.9c0-8.3,5.5-10.2,9.4-10.2c3.8,0,23.7,0,23.7,0V8.5L80.6,8.3c-36.3,0-44.5,27-44.5,44.3v19.1h-21
                                        v25.5V114h21.1c0,47.9,0,105.7,0,105.7h42.3c0,0,0-58.4,0-105.7h31.4l1.5-16.6l2.3-25.6H80.2z"></path>
                                      </svg>
                                    </b-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </b-col>

<!--                Our Tests-->
                <b-col cols="12" md="6" lg="3" class="footer-col">
                    <div class="footer-col-inner">
                        <h5><strong><span>Our tests</span></strong></h5>

                        <div>
                            <ul class="menu">
                                <li class="menu-item">
                                    <b-link
                                        @click="() => this.$router.push({ name: 'food-and-environmental-sensitivity-test' }).catch(() => {})">
                                        Food &amp; Environmental Sensitivity</b-link>
                                </li>
                                <li class="menu-item">
                                    <b-link
                                        @click="() => this.$router.push({ name: 'optimum-nutrition-test' }).catch(() => {})">
                                        Optimum Nutrition</b-link>
                                </li>
                                <li class="menu-item">
                                    <b-link
                                        @click="() => this.$router.push({ name: 'comprehensive-womens-health-test' }).catch(() => {})">
                                        Comprehensive Women’s Health</b-link>
                                </li>
                                <li class="menu-item">
                                    <b-link
                                        @click="() => this.$router.push({ name: 'comprehensive-mens-health-test' }).catch(() => {})">
                                        Comprehensive Men’s Health</b-link>
                                </li>
                                <li class="menu-item">
                                    <b-link
                                        @click="() => this.$router.push({ name: 'sleep-and-mood-test' }).catch(() => {})">
                                        Sleep &amp; Mood Test</b-link>
                                </li>
                            </ul>
                        </div>

                    </div>
                </b-col>

<!--                Quick Links-->
                <b-col cols="12" md="6" lg="3" class="footer-col">
                    <div class="footer-col-inner">
                        <h5><strong><span>Quick links</span></strong></h5>

                        <div class="menu-footer-quick-links-container">
                            <ul id="menu-footer-quick-links" class="menu">
                                <li class="menu-item">
                                    <b-link @click="() => this.$router.push({ name: 'sample-reports' }).catch(() => {})">Sample Reports</b-link>
                                </li>
                                <li class="menu-item">
                                    <b-link @click="() => this.$router.push({ name: 'faqs' }).catch(() => {})">FAQs</b-link>
                                </li>
                                <li class="menu-item">
                                    <b-link @click="() => this.$router.push({ name: 'hair-sample' }).catch(() => {})">How to take a sample</b-link>
                                </li>
                                <li class="menu-item">
                                    <b-link @click="() => this.$router.push({ name: 'testimonials' }).catch(() => {})">What our customers think</b-link>
                                </li>
                                <li class="menu-item">
                                <!--TODO link update-->
                                    <b-link href="https://practitioner.allergenicstesting.com">Practitioner registration</b-link>
                                </li>
                                <li class="menu-item">
                                    <b-link @click="() => this.$router.push({ name: 'terms-and-conditions' }).catch(() => {})">Terms and conditions</b-link>
                                </li>
                                <li class="menu-item">
                                    <b-link @click="() => this.$router.push({ name: 'privacy' }).catch(() => {})">Privacy</b-link>
                                </li>
                                <!--TODO link update-->
                                <li class="lang-item lang-item-au">
                                    <b-link href="/au/home/" hreflang="en-AU" lang="en-AU">Australia</b-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </b-col>

<!--                Blog Latest-->
                <b-col cols="12" md="6" lg="4" class="footer-col">
                    <div class="footer-col-inner footer-blog">
                        <h5><strong><span>Blog latest</span></strong></h5>
                        <ul>
                            <li>
                                <div class="img-container">
                                    <b-img :src="require('../assets/images/louis-hansel.jpeg').default" fluid alt="Dine Out with a Food Allergy"></b-img>
                                </div>
                                <b-link href="/blog/how-to-dine-out-with-a-food-allergy/"> How to Dine Out with a Food Allergy</b-link><br>
                                <time class="footer-blog-date" datetime="2020-03-01T22:46:10+00:00">02 Mar 2020</time>
                            </li>
                            <li>
                                <div class="img-container">
                                    <b-img :src="require('../assets/images/lunch-box.jpeg').default" fluid alt="3 Easy Peasy Lunch Box Ideas"></b-img>
                                </div>
                                <b-link href="https://allergenicstesting.com/blog/3-easy-peasy-lunch-box-ideas/"> 3 Easy Peasy Lunch Box Ideas</b-link><br>
                                <time class="footer-blog-date" datetime="2020-02-20T21:31:55+00:00">21 Feb 2020</time>
                            </li>
                        </ul>
                    </div>
                </b-col>

            </b-row>
        </b-container>
    </footer>
</template>

<script>
export default {
  name: 'Footer',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    a:hover {
        color: #008288;
    }
</style>
