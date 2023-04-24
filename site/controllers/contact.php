<?php
return function($kirby, $pages, $page) {

    $alert = null;

    if($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if(empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'first_name'  => get('first_name'),
            'last_name'  => get('last_name'),
            'street'  => get('street'),
            'zip'  => get('zip'),
            'location'  => get('location'),
            'email' => get('email'),
            'text'  => get('text')
        ];

        $rules = [
            'first_name'  => ['required', 'minLength' => 3],
            'last_name'  => ['required', 'minLength' => 3],
            'email' => ['required', 'email'],
            'text'  => ['required', 'minLength' => 3, 'maxLength' => 3000],
        ];

        $messages = [
            'first_name'  => 'error_name',
            'last_name'  => 'error_name',
            'email' => 'error_email',
            'text'  => 'error_text'
        ];


        // some of the data is invalid
        if($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;
            // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'email',
                    'from'     => 'y@thgie.ch',
                    'replyTo'  => $data['email'],
                    'to'       => 'y@thgie.ch',
                    'subject'  => 'À propos: ' . esc(join(', ', get('subject'))),
                    'data'     => [
                        'first_name' => esc($data['first_name']),
                        'last_name' => esc($data['last_name']),
                        'street' => esc($data['street']),
                        'zip' => esc($data['zip']),
                        'location' => esc($data['location']),
                        'text'   => esc($data['text']),
                    ]
                ]);

            } catch (Exception $error) {
                if(option('debug')):
                    $alert['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
                else:
                    $alert['error'] = 'error_mail_sent';
                endif;
            }

            // no exception occurred, let's send a success message
            if (empty($alert) === true) {
                $success = 'success';
                $data = [];
            }
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};