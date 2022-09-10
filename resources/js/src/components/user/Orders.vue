<template>
    <div class="ag-myaccount-orders">
        <table class="table b-table table-bordered table-responsive-sm my-account-table">
            <thead>
            <tr>
                <th class="">
                    <span>Order</span>
                </th>
                <th class="">
                    <span>Date</span>
                </th>
                <th class="">
                    <span>Status</span>
                </th>
                <th class="">
                    <span>Total</span>
                </th>
                <th class="">
                    <span>Actions</span>
                </th>
            </tr>
            </thead>
            <tbody>
                <tr class="order-status-refunded order">
                    <td data-title="Order">
                        <b-link @click="() => this.$router.push({ name: 'view-order' }).catch(() => {})">
                            #52468
                        </b-link>
                    </td>
                    <td data-title="Date">
                        <time datetime="2020-02-19T10:17:23+00:00">19 Feb 2020</time>
                    </td>
                    <td data-title="Status">
                        Refunded
                    </td>
                    <td data-title="Total">
                        <del aria-hidden="true">$119.00</del>
                        <ins><span class="amount"><span>$</span>0.00</span></ins>
                        for 1 item
                    </td>
                    <td data-title="Actions">
                        <b-link class="btn btn-light btn-sm" @click="() => this.$router.push({ name: 'view-order' }).catch(() => {})">
                            View
                        </b-link>
                    </td>
                </tr>
                <tr class="order-status-refunded order">
                    <td data-title="Order">
                        <b-link @click="() => this.$router.push({ name: 'view-order' }).catch(() => {})">
                            #52468
                        </b-link>
                    </td>
                    <td data-title="Date">
                        <time datetime="2020-02-19T10:17:23+00:00">19 Feb 2020</time>
                    </td>
                    <td data-title="Status">
                        Completed
                    </td>
                    <td data-title="Total">
                        <del aria-hidden="true">$119.00</del>
                        <ins><span class="amount"><span>$</span>0.00</span></ins>
                        for 1 item
                    </td>
                    <td data-title="Actions">
                        <b-link class="btn btn-light btn-sm" @click="() => this.$router.push({ name: 'view-order' }).catch(() => {})">
                            View
                        </b-link>
                    </td>
                </tr>
                <tr class="order-status-refunded order">
                    <td data-title="Order">
                        <b-link @click="() => this.$router.push({ name: 'view-order' }).catch(() => {})">
                            #52468
                        </b-link>
                    </td>
                    <td data-title="Date">
                        <time datetime="2020-02-19T10:17:23+00:00">19 Feb 2020</time>
                    </td>
                    <td data-title="Status">
                        Processing
                    </td>
                    <td data-title="Total">
                        <del aria-hidden="true">$119.00</del>
                        <ins><span class="amount"><span>$</span>0.00</span></ins>
                        for 1 item
                    </td>
                    <td data-title="Actions">
                        <b-link class="btn btn-light btn-sm" @click="() => this.$router.push({ name: 'view-order' }).catch(() => {})">
                            View
                        </b-link>
                    </td>
                </tr>
                <tr class="order-status-refunded order">
                    <td data-title="Order">
                        <b-link @click="() => this.$router.push({ name: 'view-order' }).catch(() => {})">
                            #52468
                        </b-link>
                    </td>
                    <td data-title="Date">
                        <time datetime="2020-02-19T10:17:23+00:00">19 Feb 2020</time>
                    </td>
                    <td data-title="Status">
                        Failed
                    </td>
                    <td data-title="Total">
                        <del aria-hidden="true">$119.00</del>
                        <ins><span class="amount"><span>$</span>0.00</span></ins>
                        for 1 item
                    </td>
                    <td data-title="Actions">
                        <b-link class="btn btn-light btn-sm" to="#">
                            Pay
                        </b-link>
                        <b-link class="btn btn-light btn-sm" @click="() => this.$router.push({ name: 'view-order' }).catch(() => {})">
                            View
                        </b-link>
                        <b-link class="btn btn-light btn-sm" to="#">
                            Cancel
                        </b-link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

export default {
  name: 'Orders'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
</style>
