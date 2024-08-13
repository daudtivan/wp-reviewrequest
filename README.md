# Automated Review requests for events in Wordpress
Wordpress automation of review requests with Shopmagic, Fooevents and Customer Reviews for WooCommerce plugins

Code to use shopmagic to trigger a review request upon the customer checks-in an event with Fooevents.

Context and flow of events:
1. Shopmagic custom event to detect customer check-in in fooEvents
2. Shopmagic custom action to trigger email with review request in Customer Reviews for WooCommerce

References:
1. Shopmagic custom event and action example https://github.com/shopmagic/shopmagic-example
2. FooEvents support: "(...)there is a hook 'fooevents_check_in_ticket' available that you could custom code something to send out when that hook is fired."
3. Customer Reviews for WooCommerce "(...)You can create a new instance of the class Ivole_Email and call the function trigger2() to send a review reminder email with code.
You can read more about this action in the file wp-content/plugins/customer-reviews-woocommerce/includes/reminders/class-cr-manual.php – line 190." Full thread on https://wordpress.org/support/topic/send-review-email-with-code/

Required data
1. Order info:
    - customer data
    - product/event data
