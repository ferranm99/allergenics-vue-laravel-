<template>
    <div>
        <p>
            Hello <strong>$username</strong> (not <strong>$username</strong>?
            <b-link to="/my-account/customer-logout/?_wpnonce=155c661fe4">Log out</b-link>)
<!--            TODO logout link-->
        </p>

        <p>
            From your account dashboard you can view your
            <b-link @click="() => this.$router.push({ name: 'orders' }).catch(() => {})">recent orders</b-link>, manage your
            <b-link @click="() => this.$router.push({ name: 'edit-address' }).catch(() => {})">shipping and billing addresses</b-link>, and
            <b-link @click="() => this.$router.push({ name: 'edit-account' }).catch(() => {})">edit your password and account details</b-link>.
        </p>
    </div>
</template>

<script>

export default {
  name: 'MyAccountHome',
    props: {
        content: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
</style>
