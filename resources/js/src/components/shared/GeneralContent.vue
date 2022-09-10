<template>
    <div v-html="content" class="ag-terms-holder"></div>
</template>

<script>

export default {
  name: 'GeneralContent',
    props: {
        content: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss"></style>
