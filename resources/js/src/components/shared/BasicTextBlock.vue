<template>
    <div>
        <div class="ag-basic-header-and-text">
            <b-container>
                <div class="agg-heading">
                    <h1 v-if="header">{{ header }}</h1>

                    <h2 v-if="title">{{ title }}</h2>

                    <p class="text-center">{{ content }}</p>
                </div>
            </b-container>
        </div>
    </div>
</template>

<script>

export default {
  name: 'BasicTextBlock',
    props: {
        header: String,
        title: String,
        content: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
