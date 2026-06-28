<?php

use App\Http\Middleware\CheckAccept;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

    Route::middleware([CheckAccept::class,'auth'])->group(function () {
        Route::get("/notif", [NotificationController::class,"notify"]);
        Route::get("/notif/del", [NotificationController::class,"notifyDel"]);
        Route::view('/', 'home')->name('home')->middleware('auth');
        Route::view('/UserProfile','profile')->name('profile');
        Route::view('/notification', 'notification')->name('notification');

        Route::view('/messages/{reciever}/{sender}', 'message')->name('messages');
        Route::view('/conversation', 'conversation')->name('conversation');

        Route::view('/editProfile', 'edit-profile')->name('editProfile');
        Route::view('/contactAdmin', 'contact-admin')->name('contactAdmin');


        Route::view('/students', 'student')->name('student');

        Route::view('/report', 'report')->name('report');
        Route::view('/report-forum/{id}', 'report-forum')->name('report-forum');

        Route::view('/users', 'user')->name('user');
        Route::view('/request', 'request')->name('request');
        Route::view('/organization-account', 'organization-account')->name('organization-account');

        Route::view('/years/{id}', 'year')->name('year');
        Route::view('/EditYears/{id}', 'editYear')->name('editYear');
        Route::view('/create-years/{id}', 'create-year')->name('create-year');


        Route::view('/blocks/{id}', 'block')->name('block');
        Route::view('/EditBlock/{id}', 'editBlock')->name('EditBlock');
        Route::view('/create-block/{id}', 'create-block')->name('create-block');

        Route::view('/studentList/{id}', 'student-list')->name('student-list');
        Route::view('/create-student-list/{id}', 'create-student-list')->name('create-student-list');

        Route::view('/events', 'event')->name('event');
        Route::view('/createEvents', 'create-event')->name('createEvent');
        Route::view('/editEvents/{id}', 'edit-event')->name('edit-event');
        Route::view('/department-event', 'department-event')->name('department-event');
        Route::view('/event-settings', 'event-settings')->name('event-settings');

        Route::view('/news', 'news')->name('news');
        Route::view('/course-news', 'course-news')->name('course-news');
        Route::view('/createNews', 'create-news')->name('createNews');
        Route::view('/editNews/{id}', 'edit-news')->name('edit-News');
        Route::view('/news-settings', 'news-settings')->name('news-settings');

        Route::view('/forums', 'forum')->name('forum');
        Route::view('/department-forums', 'department-forum')->name('department-forum');
        Route::view('/Createforums', 'create-forum')->name('create-forum');
        Route::view('/Editforums/{id}', 'edit-forum')->name('edit-forum');
        Route::view('/comments/{id}', 'comment')->name('comment');
        Route::view('/ReplyComments/{id}', 'reply-comment')->name('reply-comment');
        Route::view('/forum-settings', 'forum-settings')->name('forum-settings');
        Route::view('/user-forum-profile/{id}', 'user-forum-profile')->name('user-forum-profile');

        Route::view('/faculty', 'faculty')->name('faculty');

        Route::middleware([IsAdmin::class])->group(function () {
            Route::view('/create-faculty', 'create-faculty')->name('create-faculty');
            Route::view('/edit-faculty-profile/{id}', 'edit-faculty-profile')->name('edit-faculty-profile');
        });

        Route::view('/courseList', 'course-list')->name('course-list');
        Route::view('/subjectList/{id}', 'subject-list')->name('subject-list');
        Route::view('/createSubjectList/{id}', 'create-subject-list')->name('create-subject-list');
        Route::view('/editSubjectList/{id}', 'edit-subject-list')->name('edit-subject-list');
});
Route::view('/waitingForApproval','waitingForApproval')->name('waitingForApproval')->middleware('auth');
Route::middleware('guest')->group(function(){
    Route::view('/login','login')->name('login');
    Route::view('/forget-password','forget-password')->name('forget-password');
    Route::view('/confirm-code/{email}','confirm-code')->name('confirm-code');
    Route::view('/create-new-password/{email}','create-new-password')->name('create-new-password');
    Route::view('/register','register')->name('register');
    Route::view('/register-faculty','register-faculty')->name('register-faculty');
    Route::view('/organization','organization')->name('organization');

});


// require __DIR__.'/auth.php';
