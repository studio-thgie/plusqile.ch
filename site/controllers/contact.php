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
            'first_name'  => ['required'],
            'last_name'  => ['required'],
            'email' => ['required', 'email'],
        ];

        $messages = [
            'first_name'  => 'error_name',
            'last_name'  => 'error_name',
            'email' => 'error_email',
        ];


        // some of the data is invalid
        if($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;
        // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'email',
                    'from'     => 'communication@plusqile.ch',
                    'replyTo'  => $data['email'],
                    'to'       => 'communication@plusqile.ch',
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
                $success = true;
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