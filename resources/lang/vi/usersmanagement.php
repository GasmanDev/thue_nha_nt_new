<?php

return [

    // Titles
    'showing-all-users'     => 'Hiển thị Tất cả Người dùng',
    'users-menu-alt'        => 'Hiển thị Menu Quản lý Người dùng',
    'create-new-user'       => 'Tạo người dùng mới',
    'show-deleted-users'    => 'Hiển thị người dùng đã xóa',
    'editing-user'          => 'Chỉnh sửa người dùng :name',
    'showing-user'          => 'Hiển thị Người dùng :name',
    'showing-user-title'    => ':name\'s Information',

    // Flash Messages
    'createSuccess'   => 'Đã tạo thành công người dùng! ',
    'updateSuccess'   => 'Đã cập nhật thành công người dùng! ',
    'deleteSuccess'   => 'Đã xóa thành công người dùng! ',
    'deleteSelfError' => 'Bạn không thể xóa chính mình! ',

    // Show User Tab
    'viewProfile'            => 'Xem hồ sơ',
    'editUser'               => 'Sửa thông tin người dùng',
    'deleteUser'             => 'Xóa tài khoản',
    'usersBackBtn'           => 'Trở lại trang quản lý tài khoản',
    'usersPanelTitle'        => 'Thông tin người dùng',
    'labelUserName'          => 'Tên tài khoản:',
    'labelEmail'             => 'Email:',
    'labelFirstName'         => 'Họ:',
    'labelLastName'          => 'Tên:',
    'labelRole'              => 'Vai trò:',
    'labelStatus'            => 'Trạng thái:',
    'labelAccessLevel'       => 'Truy cập',
    'labelPermissions'       => 'Quyền:',
    'labelCreatedAt'         => 'Được tạo lúc:',
    'labelUpdatedAt'         => 'Cập nhật lúc:',
    'labelIpEmail'           => 'Email Đăng ký IP:',
    'labelIpEmail'           => 'Email Đăng ký IP:',
    'labelIpConfirm'         => 'Xác nhận IP:',
    'labelIpSocial'          => 'Đăng ký Socialite IP:',
    'labelIpAdmin'           => 'Đăng ký quản trị viên IP:',
    'labelIpUpdate'          => 'Cập nhật cuối cùng IP:',
    'labelDeletedAt'         => 'Đã xóa vào',
    'labelIpDeleted'         => 'Xóa IP:',
    'usersDeletedPanelTitle' => 'Thông tin người dùng đã xóa',
    'usersBackDelBtn'        => 'Quay lại Người dùng đã Xóa',

    'successRestore'    => 'Người dùng đã được khôi phục thành công.',
    'successDestroy'    => 'Hồ sơ người dùng đã bị hủy thành công.',
    'errorUserNotFound' => 'Người dùng không được tìm thấy.',

    'labelUserLevel'  => 'Cấp độ',
    'labelUserLevels' => 'Cấp độ',

    'users-table' => [
        'caption'   => '{1} :userscount user total|[2,*] :userscount total users',
        'id'        => 'ID',
        'name'      => 'Tên tài khoản',
        'fname'     => 'Họ',
        'lname'     => 'Tên',
        'email'     => 'Email',
        'role'      => 'Vai trò',
        'created'   => 'Tạo',
        'updated'   => 'Cập nhật',
        'actions'   => 'Hành động',
        'updated'   => 'Đã cập nhật',
    ],

    'buttons' => [
        'create-new'    => 'New User',
        'delete'        => '<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>  <span class="hidden-xs hidden-sm">Delete</span><span class="hidden-xs hidden-sm hidden-md"> User</span>',
        'show'          => '<i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Show</span><span class="hidden-xs hidden-sm hidden-md"> User</span>',
        'edit'          => '<i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Edit</span><span class="hidden-xs hidden-sm hidden-md"> User</span>',
        'back-to-users' => '<span class="hidden-sm hidden-xs">Back to </span><span class="hidden-xs">Users</span>',
        'back-to-user'  => 'Back  <span class="hidden-xs">to User</span>',
        'delete-user'   => '<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>  <span class="hidden-xs">Delete</span><span class="hidden-xs"> User</span>',
        'edit-user'     => '<i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs">Edit</span><span class="hidden-xs"> User</span>',
    ],

    'tooltips' => [
        'delete'        => 'Xóa',
        'show'          => 'Hiện thị',
        'edit'          => 'Cập nhật',
        'create-new'    => 'Tạo người dùng mới',
        'back-users'    => 'Quay lại người dùng',
        'email-user'    => 'Email :user',
        'submit-search' => 'Gửi tìm kiếm người dùng',
        'clear-search'  => 'Xóa kết quả tìm kiếm',
    ],

    'messages' => [
        'userNameTaken'          => 'Tên người dùng đã được sử dụng',
        'userNameRequired'       => 'Tên người dùng là bắt buộc',
        'fNameRequired'          => 'Tên bắt buộc',
        'lNameRequired'          => 'Họ bắt buộc',
        'emailRequired'          => 'Email là cần thiết',
        'emailInvalid'           => 'Email không hợp lệ',
        'passwordRequired'       => 'Mật khẩu là bắt buộc',
        'PasswordMin'            => 'Mật khẩu cần có ít nhất 6 ký tự',
        'PasswordMax'            => 'Độ dài tối đa của mật khẩu là 20 ký tự',
        'captchaRequire'         => 'Captcha bắt buộc',
        'CaptchaWrong'           => 'Hình ảnh xác thực không chính xác, vui lòng thử lại.',
        'roleRequired'           => 'Vai trò người dùng bắt buộc.',
        'user-creation-success'  => 'Đã tạo thành công người dùng!',
        'update-user-success'    => 'Đã cập nhật thành công người dùng!',
        'delete-success'         => 'Đã xóa thành công người dùng!',
        'cannot-delete-yourself' => 'Bạn không thể xóa chính mình!',
    ],

    'show-user' => [
        'id'                => 'User ID',
        'name'              => 'Username',
        'email'             => '<span class="hidden-xs">User </span>Email',
        'role'              => 'User Role',
        'created'           => 'Created <span class="hidden-xs">at</span>',
        'updated'           => 'Updated <span class="hidden-xs">at</span>',
        'labelRole'         => 'User Role',
        'labelAccessLevel'  => '<span class="hidden-xs">User</span> Access Level|<span class="hidden-xs">User</span> Access Levels',
    ],

    'search'  => [
        'title'             => 'Hiển thị Kết quả Tìm kiếm',
        'found-footer'      => ' Record(s) found',
        'no-results'        => 'Không có kết quả',
        'search-users-ph'   => 'Tìm kiếm người dùng',
    ],

    'modals' => [
        'delete_user_message' => 'Bạn có chắc chắn muốn xóa :user?',
    ],
];
