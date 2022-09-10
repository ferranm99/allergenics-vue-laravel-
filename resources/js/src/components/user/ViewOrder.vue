<template>
    <div>
        <p>
            Order #
            <strong class="order-number">52468</strong> was placed on
            <strong class="order-date">19 Feb 2020</strong> and is currently
            <strong class="order-status">Refunded</strong>.
        </p>

        <h2 class="text-center">Order updates</h2>

        <div class="pl-md-5">
            <p class="mb-0"><strong>Wednesday 19th of February 2020, 10:17am</strong></p>
<!--            <p>New Order handled, respondent uuid</p>-->
        </div>

        <section class="ag-order-details">

            <h2 class="text-center mt-4">Order details</h2>

            <table class="table b-table table-bordered table-responsive-sm my-account-table view-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <b-link to="/product">Pet Test</b-link>
                            <strong class="product-quantity">×&nbsp;1</strong>
                        </td>
                        <td>
                            <span>
                                <bdi><span>$</span>119.00</bdi>
                            </span>
                        </td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <th scope="row">Subtotal:</th>
                        <td>
                            <span><span>$</span>119.00</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Payment method:</th>
                        <td>Pay by Credit Card</td>
                    </tr>
                    <tr>
                        <th scope="row">Refunded via Stripe Dashboard</th>
                        <td><span>-<span>$</span>119.00</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Total:</th>
                        <td>
                            <del aria-hidden="true">$119.00</del>
                            <ins>
                                <span><span>$</span>0.00</span>
                                <small class="includes_tax">(includes <span><span>$</span>15.52</span> GST)</small>
                            </ins>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </section>

        <section>
            <h2 class="text-center mt-4">Billing address</h2>
            <address class="border rounded-sm p-3">
                Billy Bob<br>15B Koha Road<br>Taupo 3330
                <p class="mb-0">
                    <span>
                        <svg style="transform: rotate(270deg)" viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="telephone" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="flip-h bi-telephone mx-auto b-icon bi" data-v-41be6633=""><g data-v-41be6633=""><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path></g>
                        </svg>
                    </span>
                    <span>02159797978</span>
                </p>
                <p class="mb-0">
                    <span>
                        <svg data-v-41be6633="" viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="envelope" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-envelope mx-auto b-icon bi"><g data-v-41be6633=""><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path></g></svg>
                    </span>
                    <span>carl@16hands.co.nz</span>
                </p>
            </address>
        </section>
    </div>
</template>

<script>

export default {
  name: 'ViewOrder'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
</style>
