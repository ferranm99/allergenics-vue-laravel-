<template>
    <div>
        <div class="ag-basic-header-and-text">
            <b-container>
                <div v-html="content" class="agg-heading"></div>
            </b-container>
        </div>
    </div>
</template>

<script>

export default {
  name: 'BasicTextLarge',
    props: {
        content: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
