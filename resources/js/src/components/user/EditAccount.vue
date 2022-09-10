<template>
    <div class="ag-form-container ag-edit-form">
            <b-form>
                <b-form-row>
                    <b-col cols="12" sm="6">
                        <b-form-group
                            class="required"
                            label="First name"
                            label-for="account_first_name"
                        >
                            <b-form-input
                                id="account_first_name"
                                type="text"
                                placeholder=""
                                required
                                autocomplete="given-name"
                            ></b-form-input>
                        </b-form-group>
                    </b-col>
                    <b-col cols="12" sm="6">
                        <b-form-group
                            class="required"
                            label="Last name"
                            label-for="account_last_name"
                        >
                            <b-form-input
                                id="account_last_name"
                                type="text"
                                placeholder=""
                                required
                                autocomplete="family-name"
                            ></b-form-input>
                        </b-form-group>
                    </b-col>
                </b-form-row>

                <b-form-group
                    class="required"
                    label="Display name"
                    label-for="account_display_name"
                >
                    <b-form-input
                        id="account_display_name"
                        type="text"
                        placeholder=""
                        required
                    ></b-form-input>
                    <small><em>This will be how your name will be displayed in the account section and in reviews</em></small>
                </b-form-group>

                <h5 class="font-weight-bold mt-4">Password change</h5>

                <b-form-group
                    label="Current password (leave blank to leave unchanged)"
                    label-for="password_current"
                >
                    <b-form-input
                        id="password_current"
                        type="password"
                        placeholder=""
                        autocomplete="off"
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    label="New password (leave blank to leave unchanged)"
                    label-for="password_1"
                >
                    <b-form-input
                        id="password_1"
                        type="password"
                        placeholder=""
                        autocomplete="off"
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    label="Confirm new password"
                    label-for="password_2"
                >
                    <b-form-input
                        id="password_2"
                        type="password"
                        placeholder=""
                        autocomplete="off"
                    ></b-form-input>
                </b-form-group>



                <b-form-row class="justify-content-center mt-5">
                    <b-button type="submit" class="agg-button agg-button--red" name="login" value="Log in">Save changes</b-button>
                </b-form-row>

            </b-form>
        </div>
</template>

<script>

export default {
  name: 'EditAccount'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
</style>
