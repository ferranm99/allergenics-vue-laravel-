<template>
    <div class="wrapper" role="document">
        <div class="content">
            <div class="main">
                <div class="agg-content-holder ag-blog-holder sample-reports-holder">
                    <b-container>
                        <b-row>
                            <b-col cols="12" sm="10" md="8" class="mx-auto">

                                <div class="agg-heading ag-small">
                                    <div class="page-header">
                                        <h1>Sample Reports</h1>
                                    </div>
                                    <p>Download pdf sample reports for our tests...</p>
                                </div>

                                <div class="ag-blog-wrapper">
                                    <b-row class="flex-row">

                                        <b-col cols="12" md="6" lg="4">
                                            <div class="ag-blogpost">
                                                <div class="ag-img-wrap">
                                                    <b-link target="_blank" to="/storage/food-and-environmental-sensitivity-test.pdf" title="Food and Environmental Sensitivity Test - sample report">
                                                        <b-img class="report-image" :src="require('../assets/images/Food-Environmental-Sensitivity-Test-sample-report-1.jpeg').default" fluid alt="Food and Environmental Sensitivity Test sample report with Family of four doing headstand post in the outdoors."></b-img>
                                                        <span>Food &amp; Environmental Sensitivity Test</span>
                                                    </b-link>
                                                    <b-link class="direct-download-icon" to="/storage/food-and-environmental-sensitivity-test.pdf" download="">
                                                        <IconDownload></IconDownload>
                                                    </b-link>
                                                </div>
                                            </div>
                                        </b-col>

                                        <b-col cols="12" md="6" lg="4">
                                            <div class="ag-blogpost">
                                                <div class="ag-img-wrap">
                                                    <b-link target="_blank" to="/storage/optimum-nutrition-test.pdf" title="Optimum Nutrition Test - sample test">
                                                        <b-img class="report-image" :src="require('../assets/images/Optimum-Nutrition-Test-sample-report-1.jpeg').default" fluid alt="Optimum Nutrition Test - sample report with Family of four doing headstand post in the outdoors."></b-img>
                                                        <span>Optimum Nutrition Test</span>
                                                    </b-link>
                                                    <b-link class="direct-download-icon" to="/storage/optimum-nutrition-test.pdf" download="">
                                                        <IconDownload></IconDownload>
                                                    </b-link>
                                                </div>
                                            </div>
                                        </b-col>

                                        <b-col cols="12" md="6" lg="4">
                                            <div class="ag-blogpost">
                                                <div class="ag-img-wrap">
                                                    <b-link target="_blank" to="/storage/comprehensive-womens-health-test.pdf" title="Comprehensive Women's Health Test - sample report">
                                                        <b-img class="report-image" :src="require('../assets/images/Comprehensive-Womens-Health-Test-sample-report-1.jpeg').default" fluid alt="Comprehensive Women's Health Test with Family of four doing headstand post in the outdoors."></b-img>
                                                        <span>Comprehensive Women's Health Test</span>
                                                    </b-link>
                                                    <b-link class="direct-download-icon" to="/storage/comprehensive-womens-health-test.pdf" download="">
                                                        <IconDownload></IconDownload>
                                                    </b-link>
                                                </div>
                                            </div>
                                        </b-col>

                                        <b-col cols="12" md="6" lg="4">
                                            <div class="ag-blogpost">
                                                <div class="ag-img-wrap">
                                                    <b-link target="_blank" to="/storage/comprehensive-mens-health-test.pdf" title="Comprehensive Men's Health Test - sample report">
                                                        <b-img class="report-image" :src="require('../assets/images/Comprehensive-Mens-Health-Test-sample-report-1.jpeg').default" fluid alt="Comprehensive Men's Health Test - sample report with Family of four doing headstand post in the outdoors."></b-img>
                                                        <span>Comprehensive Men's Health Test</span>
                                                    </b-link>
                                                    <b-link class="direct-download-icon" to="/storage/comprehensive-mens-health-test.pdf" download="">
                                                        <IconDownload></IconDownload>
                                                    </b-link>
                                                </div>
                                            </div>
                                        </b-col>

                                        <b-col cols="12" md="6" lg="4">
                                            <div class="ag-blogpost">
                                                <div class="ag-img-wrap">
                                                    <b-link target="_blank" to="/storage/sleep-and-mood-test.pdf" title="Sleep and Mood Test - sample report">
                                                        <b-img class="report-image" :src="require('../assets/images/Sleep-and-Mood-Test-sample-report-1.jpeg').default" fluid alt="Family of four doing headstand post in the outdoors."></b-img>
                                                        <span>Sleep and Mood Test</span>
                                                    </b-link>
                                                    <b-link class="direct-download-icon" to="/storage/sleep-and-mood-test.pdf" download="">
                                                        <IconDownload></IconDownload>
                                                    </b-link>
                                                </div>
                                            </div>
                                        </b-col>

                                    </b-row>
                                </div>
                            </b-col>

                        </b-row>
                    </b-container>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import IconDownload from "../components/icons/IconDownload.vue";

export default {
  name: 'SampleReports',
    components: {
        IconDownload
    },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";


</style>
