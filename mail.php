<?php return [
    'common' => [
        'hello' => 'Sveiki :firstname !',
        'view_order_status_online' => 'Užsakymo detalės',
        'view_order_in_backend' => 'View order in store backend',
        'order_details' => 'Order details',
    ],
    'payment' => [
        'refunded' => [
            'subject' => 'Your payment was refunded',
            'message' => 'We just refunded the payment for your order **#:number**.',
            'duration' => 'Please be aware that it may take multiple days until you receive your funds.',
        ],
        'paid' => [
            'subject' => 'Thank you for your payment',
            'message' => 'We just received a payment for your order **#:number**.',
            'process_order' => 'We will now begin to further process the order.',
        ],
        'failed' => [
            'subject' => 'The payment for your order has failed',
            'message' => 'We just wanted to let you know that the payment for order **#:number** has failed',
            'payment_advice' => 'Please login to your account and try again to pay the order.',
            'support' => 'If you continue to experience problems with payments please contact us.',
        ],
    ],
    'order' => [
        'partials' => [
            'billing_address' => 'Billing address',
            'billing_and_shipping' => 'Billing and shipping address',
            'shipping_address' => 'Shipping address',
            'has_been_paid_on' => 'The order has been paid on',
            'currently_pending' => 'Užsakymo statusas: Laukiama apmokėjimo.',
            'track_shipping_status' => 'You can track the shipping status of your order with the following information:',
        ],
        'state_changed' => [
            'subject' => 'The status of your order changed',
            'message' => 'We just wanted to let you know that your order **#:number** was updated to the new status: **:state**',
        ],
        'shipped' => [
            'subject' => 'Your order has been shipped',
            'message' => 'Your order **#:number** has been shipped.',
        ],
    ],
    'customer' => [
        'created' => [
            'subject' => 'Sveiki atvykę, :firstname',
            'confirm_mail' => 'Welcome to our store! Please click on the button below to confirm your e-mail address.',
            'message' => 'Malonu, kad užsiregistravote! Nuo šiol prisijungti prie savo paskyros galite suvedę savo el. pašto adresą **:email** ir slaptažodį, kurį nurodėte registracijos metu.',
            'possibilities' => 'Nuo šiol, prisijungus prie paskyros, galėsite apsipirkti dar greičiau, tikrinti užsakymo būseną bei keisti savo kontaktinę informaciją! .',
            'button' => [
                'confirm' => 'Confirm your e-mail address',
                'visit_store' => 'Eiti į parduotuvę',
            ],
        ],
    ],
    'checkout' => [
        'succeeded' => [
            'subject' => 'Užsakymo #:number patvirtinimas',
            'thanks_for_order' => 'Dėkojame, Jūsų užsakymas buvo sėkmingai pateiktas, skubame jo ruošti, nes mėgstamo žaidimo reikia čia ir dabar! Užsakymo informacija',
            'check_order_status' => 'Patogiai ir greitai peržiūrėkite užsakymo būseną, prisijungęs prie savo asmeninės paskyros.',
        ],
        'failed' => [
            'subject' => 'Checkout error for order #:number',
            'problem_message' => 'We are very sorry that there was a problem during your checkout process. We will look into the problem and contact you with further information.',
            'check_order_status' => 'To check the status of your order you may log in to our store at any time.',
            'payment_id' => 'Payment ID',
            'error' => 'Error message',
        ],
    ],
    'admin' => [
        'checkout_succeeded' => [
            'subject' => 'New order #:number',
            'order_placed' => 'The following order was placed in your store:',
        ],
        'checkout_failed' => [
            'subject' => 'Checkout failed #:number',
            'not_processed' => 'The following order could not be processed correctly. It is possible that you have to contact the customer.',
            'error_details' => 'Error details',
        ],
        'payment_paid' => [
            'subject' => 'Payment for order #:number successful',
            'message' => 'The previously failed payment for this order succeeded on a subsequent attempt.',
        ],
    ],
];
