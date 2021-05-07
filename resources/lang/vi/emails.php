<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Emails Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various emails that
    | we need to display to the user. You are free to modify these
    | language lines according to your application's requirements.
    |
    */

    // Activate new user account email.
    'activationSubject'  => 'Yêu cầu kích hoạt',
    'activationGreeting' => 'Chào mừng!',
    'activationMessage'  => 'Bạn cần kích hoạt email của mình trước khi có thể bắt đầu sử dụng tất cả các dịch vụ của chúng tôi.',
    'activationButton'   => 'Kích hoạt',
    'activationThanks'   => 'Cảm ơn bạn đã sử dụng ứng dụng của chúng tôi!',

    // Goobye email.
    'goodbyeSubject'  => 'Xin lỗi để nhìn bạn ra đi...',
    'goodbyeGreeting' => 'Xin chào :username,',
    'goodbyeMessage'  => 'Chúng tôi rất tiếc khi thấy bạn ra đi. Chúng tôi muốn cho bạn biết rằng tài khoản của bạn đã bị xóa. Cảm ơn vì thời gian chúng tôi đã chia sẻ. Bạn có '.config('settings.restoreUserCutoff').' ngày để khôi phục tài khoản của bạn.',
    'goodbyeButton'   => 'Khôi phục tài khoản',
    'goodbyeThanks'   => 'Chúng tôi rất mong sẽ gặp lại bạn!',

];
