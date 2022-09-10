<template>
    <div class="ag-form-block my-account-content">
        <b-container>
            <b-row>
                <b-col cols="12">
                    <h1 class="text-center">Login</h1>

                    <div class="ag-form-container ag-login-container">
                        <b-form>
                            <b-form-group
                                class="required"
                                label="Username or email address"
                                label-for="username"
                            >
                                <b-form-input
                                    id="username"
                                    type="text"
                                    placeholder=""
                                    required
                                ></b-form-input>
                            </b-form-group>

                            <b-form-group
                                class="required"
                                label="Password"
                                label-for="password"
                            >
                                <b-form-input
                                    id="password"
                                    type="text"
                                    placeholder=""
                                    required
                                ></b-form-input>
                            </b-form-group>

                            <b-form-row>
                                <b-col>
                                    <b-link class="lost-password" to="lost-password">Lost your password?</b-link>
                                </b-col>

                                <b-col class="d-flex justify-content-end">
                                    <b-form-checkbox
                                        id="rememberme"
                                        name="rememberme"
                                        value="accepted"
                                    >
                                        Remember me
                                    </b-form-checkbox>
                                </b-col>
                            </b-form-row>

                            <b-form-row class="justify-content-center">
                                <b-button type="submit" class="agg-button agg-button--red" name="login" value="Log in">Log in</b-button>
                            </b-form-row>

                        </b-form>
                    </div>

                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>

export default {
  name: 'Login'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.ag-form-block.my-account-content {
    padding: 30px 15px;
}
</style>
