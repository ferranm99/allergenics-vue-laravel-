<template>
    <section class="ag-banner">
        <div class="agg-bg-image ag-has-overlay">
            <b-img :src="require('../../assets/images/' + image).default" fluid :alt=image_alt></b-img>
        </div>
        <div class="agg-center-wrap">
            <div class="agg-center-hold">
                <div class="container">
                    <div class="ag-banner-text">
                        <h1>{{ title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

export default {
  name: 'TestsBanner',
    props: {
        image: String,
        image_alt: String,
        title: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
    .agg-bg-image img {
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: 100%;
        max-height: 100%;
    }
</style>
