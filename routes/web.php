<?php

use Illuminate\Support\Facades\Route;

// use DB;

Auth::routes();



//Clear config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});

//custom login

Route::get('/testing-email', function () {
    $data=DB::table('users')->where('email','zoommartbd@gmail.com')->first();
    dd($data);
    // return view('frontend.testingPayment.newpayment',compact('data'));
});



Route::get('/workbooks-checkout/{id}', [App\Http\Controllers\Frontend\BookResourceController::class, 'workbookscheckout'])->name('workbookscheckout');


Route::get('purchase-book/{order_id}/{total_amount}/success', [App\Http\Controllers\Frontend\BookResourceController::class, 'yearsbooksuccess'])->name('yearsbooksuccess');




Route::post('checkout-resource', [App\Http\Controllers\Frontend\BookResourceController::class, 'checkoutresource'])->name('checkout.resource');

Route::get('/year1-workbooks', [App\Http\Controllers\Frontend\BookResourceController::class, 'year1book'])->name('year1book');


Route::get('/year2-workbooks', [App\Http\Controllers\Frontend\BookResourceController::class, 'year2book'])->name('year2book');


Route::get('/year3-workbooks', [App\Http\Controllers\Frontend\BookResourceController::class, 'year3book'])->name('year3book');

Route::get('/year4-workbooks', [App\Http\Controllers\Frontend\BookResourceController::class, 'year4book'])->name('year4book');

Route::get('/year5-workbooks', [App\Http\Controllers\Frontend\BookResourceController::class, 'year5book'])->name('year5book');

Route::get('/year6-workbooks', [App\Http\Controllers\Frontend\BookResourceController::class, 'year6book'])->name('year6book');


Route::get('video/tutorial', [App\Http\Controllers\Frontend\DashboardController::class, 'videoTutorial'])->name('videoTutorial');

Route::post('get/video/tutorial/watch', [App\Http\Controllers\Frontend\DashboardController::class, 'video_watchstore'])->name('video_watchstore');


Route::get('video/tutorial/view/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'videoTutorialView']);


Route::post('/user/crop-image-upload', [App\Http\Controllers\Frontend\DashboardController::class, 'cropImg'])->name('cropImg');

Route::post('/userLogin', [App\Http\Controllers\Frontend\UserLoginController::class, 'customLogin'])
    ->name('login.custom');

Route::get('/forget-password', [App\Http\Controllers\Frontend\UserLoginController::class, 'forgetpass'])
->name('login.forgetpass');

Route::post('/forget-password', [App\Http\Controllers\Frontend\UserLoginController::class, 'forgetpasssubmit'])
->name('login.forgetpass');

Route::get('forget/password-update/{email}/{id}', [App\Http\Controllers\Frontend\UserLoginController::class, 'forgetpasssupdate'])
->name('login.forgetpassupdate');

Route::post('forget/password-update/{email}/{id}', [App\Http\Controllers\Frontend\UserLoginController::class, 'forgetpasssupdatesubmit'])
;











Route::get('/venue-hire', [App\Http\Controllers\Frontend\FrontendController::class, 'venueHire']);


Route::get('/get/school-details', [App\Http\Controllers\Frontend\FrontendController::class, 'schoolDetails']);


Route::post('custom-registration', [App\Http\Controllers\Frontend\UserLoginController::class, 'customRegistration'])->name('register.custom');



Route::get('/email/verify/{email}/{id}', [App\Http\Controllers\Frontend\UserLoginController::class, 'email_verify']);
Route::post('/verifyCode', [App\Http\Controllers\Frontend\UserLoginController::class, 'verify_code'])
    ->name('verify.code');

// google Login
Route::get('auth/google', [App\Http\Controllers\GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [App\Http\Controllers\GoogleSocialiteController::class, 'handleCallback']);
//facebook login
Route::get('auth/facebook', [App\Http\Controllers\FacebookSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/facebook', [App\Http\Controllers\FacebookSocialiteController::class, 'handleCallback']);

//

Route::get('admin/tutor/create', [App\Http\Controllers\Admin\TutorManageController::class, 'create']);

Route::post('admin/tutor/create', [App\Http\Controllers\Admin\TutorManageController::class, 'store']);




Route::get('admin/tuition-reources-index', [App\Http\Controllers\Admin\OnlineTuitionController::class, 'index'])->name('admin.tuition-resources');
Route::get('admin/tuition-reources-create', [App\Http\Controllers\Admin\OnlineTuitionController::class, 'create'])->name('admin.tuition-resources-create');
Route::post('admin/tuition-reources-create', [App\Http\Controllers\Admin\OnlineTuitionController::class, 'store']);
Route::post('admin/tuition-reources-update', [App\Http\Controllers\Admin\OnlineTuitionController::class, 'update'])->name('admin.tuition-resources-update');
Route::get('admin/tuition-reources-delete/{id}', [App\Http\Controllers\Admin\OnlineTuitionController::class, 'delete']);
Route::get('admin/tuition-reources-edit/{id}', [App\Http\Controllers\Admin\OnlineTuitionController::class, 'edit']);




Route::get('admin/book-purchase-list/delete/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'bookPurchaseListDelete']);
Route::get('admin/book-purchase-list/details/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'bookPurchaseListDetails']);
Route::post('admin/book-purchase-list/details/update', [App\Http\Controllers\Admin\AboutUsController::class, 'bookPurchaseListDetailsUpdate']);
Route::get('admin/book-purchase-list', [App\Http\Controllers\Admin\AboutUsController::class, 'bookPurchaseList'])->name('admin.bookpurchase.list');
Route::get('get/video/subcate/all/{cate_id}', [App\Http\Controllers\Admin\AboutUsController::class, 'getSubcate']);
Route::get('admin/video-category/{cate_id}', [App\Http\Controllers\Admin\AboutUsController::class, 'allCategoryVideo']);
Route::get('admin/video-subcategory/{subcate_id}', [App\Http\Controllers\Admin\AboutUsController::class, 'allSubCategoryVideo']);
Route::get('/admin/staff-watch-video/category', [App\Http\Controllers\Admin\AboutUsController::class, 'staffVideoCategory'])->name('admin.staff-video.category');
Route::get('/admin/staff-watch-video/subcategory/{cate_id}', [App\Http\Controllers\Admin\AboutUsController::class, 'staffVideoSubCategory']);
Route::get('/admin/staff-watch-video/all/{subcate_id}', [App\Http\Controllers\Admin\AboutUsController::class, 'staffVideoAll']);
Route::get('/admin/staff-watch-video/index', [App\Http\Controllers\Admin\AboutUsController::class, 'staffVideoRecord'])->name('admin.staff-video.index');
Route::get('/admin/staff-watch-video/view/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'staffVideoView']);
Route::post('/get/admin/video/tutorial/watch', [App\Http\Controllers\Admin\AboutUsController::class, 'staffVideoViewStore']);

Route::get('/admin/watch-recored/index', [App\Http\Controllers\Admin\AboutUsController::class, 'tutorwatchrecord'])->name('admin.watch-recored.index');
Route::get('/admin/watch-recored-for-admin/index/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'watchrecordforadmin'])->name('admin.watchrecordforadmin.index');
Route::get('admin/watch-video/tutor/list/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'tutorwatchList']);
Route::get('/admin/tutorial-video/create', [App\Http\Controllers\Admin\AboutUsController::class, 'adminVideoCreare'])->name('admin.adminvideo.create');
Route::post('/admin/tutorial-video/create', [App\Http\Controllers\Admin\AboutUsController::class, 'adminVideoStore'])->name('admin.adminvideo.create');
Route::post('/admin/tutorial-video/update', [App\Http\Controllers\Admin\AboutUsController::class, 'adminVideoUpdate'])->name('admin.adminvideo.update');
Route::get('/admin/tutorial-video/index', [App\Http\Controllers\Admin\AboutUsController::class, 'adminVideoIndex'])->name('admin.adminvideo.index');
Route::get('/admin/tutorial-video/edit/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'adminVideoEdit']);
Route::get('/admin/tutorial-video/active/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'adminVideoActive']);
Route::get('/admin/tutorial-video/deactive/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'adminVideoDeactive']);
Route::get('/admin/tutorial-video/delete/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'adminVideoDelete']);
//
Route::get('/admin/apply-candidate/index', [App\Http\Controllers\Admin\AboutUsController::class, 'applycandidate'])->name('admin.applycandidate.candidate');
Route::get('/admin/apply-candidate/details/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'applyCandidateDetails']);
Route::get('/admin/apply-candidate/delete/{id}', [App\Http\Controllers\Admin\AboutUsController::class, 'applycandidateDelete']);
Route::get('/quick-inquiry', [App\Http\Controllers\Frontend\FrontendController::class, 'quickEnquiry']);
Route::post('/quick-inquiry', [App\Http\Controllers\Frontend\FrontendController::class, 'quickEnquirySubmit']);
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'home']);
Route::get('/apps', [App\Http\Controllers\Frontend\FrontendController::class, 'apps']);
Route::get('/summer-school-application', [App\Http\Controllers\Frontend\FrontendController::class, 'summerSchoolApplication']);
Route::post('/summer-school-application', [App\Http\Controllers\Frontend\FrontendController::class, 'summerSchoolApplicationSubmit']);
Route::get('/summer-maths-competition', [App\Http\Controllers\Frontend\FrontendController::class, 'summerMathsCompetition']);
Route::get('/gcse-results', [App\Http\Controllers\Frontend\FrontendController::class, 'gcsemeritResults']);
Route::get('/a-level-results', [App\Http\Controllers\Frontend\FrontendController::class, 'alevelmeritResults']);
// new url
Route::get('/11-plus-april-holidays', [App\Http\Controllers\Frontend\FrontendController::class, 'elevenPlusApril']);
Route::get('/11-plus-summer-holidays', [App\Http\Controllers\Frontend\FrontendController::class, 'elevenPlusSummer']);
Route::get('/11-plus-school-list', [App\Http\Controllers\Frontend\FrontendController::class, 'elevenPlusSchoolList']);
Route::get('/mock-exam-booking', [App\Http\Controllers\Frontend\FrontendController::class, 'mockExam']);
Route::post('/mock-exam-booking', [App\Http\Controllers\Frontend\FrontendController::class, 'mockExamStore']);
Route::get('/exam-centre-london', [App\Http\Controllers\Frontend\FrontendController::class, 'examCentre']);


Route::get('/work-for-merit-tutors', [App\Http\Controllers\Frontend\FrontendController::class, 'worksformerittutors']);
Route::post('/work-for-merit-tutors', [App\Http\Controllers\Frontend\FrontendController::class, 'worksformerittutorstore']);
Route::get('/apply-success', [App\Http\Controllers\Frontend\FrontendController::class, 'applysuccess']);

// new url end
Route::get('/filter-shop', [App\Http\Controllers\Frontend\FrontendController::class, 'filter_shop']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');
Route::get('/admin/profile', [App\Http\Controllers\Admin\DashboardController::class, 'adminProfile'])->name('admin.profile');
Route::get('/admin/profile-update', [App\Http\Controllers\Admin\DashboardController::class, 'adminProfileUpdate'])->name('admin.ProfileUpdate');
Route::post('/admin/profile-update', [App\Http\Controllers\Admin\DashboardController::class, 'adminProfileUpdateSubmit'])->name('admin.ProfileUpdate');
Route::post('/admin/admin-update-password', [App\Http\Controllers\Admin\DashboardController::class, 'adminUpdatePassword'])->name('admin.adminUpdatePassword');
Route::post('/admin/email-update', [App\Http\Controllers\Admin\DashboardController::class, 'adminEmailUpdate'])->name('admin.email.update');
Route::get('/admin/logout', [App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('admin.logout');
// login controler
Route::get('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'loginSubmit'])->name('admin.login');
// settings controller
Route::get('/admin/company-information', [App\Http\Controllers\Admin\SettingsController::class, 'companyInformation'])->name('admin.companyInformation');
Route::post('/admin/company-information', [App\Http\Controllers\Admin\SettingsController::class, 'companyInformationSubmit'])->name('admin.companyInformation');

Route::get('/admin/seo-information', [App\Http\Controllers\Admin\SettingsController::class, 'seoInformation'])->name('admin.seoInformation');
Route::post('/admin/seo-information', [App\Http\Controllers\Admin\SettingsController::class, 'seoInformationSubmit'])->name('admin.seoInformation');


Route::get('/admin/subscrive/all', [App\Http\Controllers\Admin\SettingsController::class, 'subscriveall'])->name('admin.subscriveall');
Route::get('/admin/subscrive/delete/{id}', [App\Http\Controllers\Admin\SettingsController::class, 'deletesubscriv']);

Route::get('/admin/social-information', [App\Http\Controllers\Admin\SettingsController::class, 'socialInformation'])->name('admin.socialInformation');
Route::post('/admin/social-information', [App\Http\Controllers\Admin\SettingsController::class, 'socialInformationSubmit'])->name('admin.socialInformation');
// slider Create
Route::get('/admin/slider/create', [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('admin.slider.create');
Route::post('/admin/slider/store', [App\Http\Controllers\Admin\SliderController::class, 'store'])->name('admin.slider.create');
Route::post('/admin/slider/update', [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('admin.slider.update');
Route::get('/admin/slider/index', [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('admin.slider.index');

Route::get('/admin/slider/active/{id}', [App\Http\Controllers\Admin\SliderController::class, 'active']);
Route::get('/admin/slider/deactive/{id}', [App\Http\Controllers\Admin\SliderController::class, 'deactive']);
Route::get('/admin/slider/edit/{id}', [App\Http\Controllers\Admin\SliderController::class, 'edit']);
Route::get('/admin/slider/delete/{id}', [App\Http\Controllers\Admin\SliderController::class, 'delete']);
// admin user

Route::get('/admin/admin-user/index', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.admin-user.index');
Route::get('/admin/admin-user/create', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('admin.admin-user.create');
Route::post('/admin/admin-user/create', [App\Http\Controllers\Admin\AdminController::class, 'store'])->name('admin.admin-user.create');
Route::post('/admin/admin-user/update', [App\Http\Controllers\Admin\AdminController::class, 'update'])->name('admin.admin-user.update');

Route::get('/admin/admin-user/edit/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit']);
Route::get('/admin/admin-user/delete/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete']);
//Merit Resource
Route::get('/admin/resources/create', [App\Http\Controllers\Admin\MeritResourceController::class, 'create'])->name('admin.resources.create');
Route::post('/admin/resources/create', [App\Http\Controllers\Admin\MeritResourceController::class, 'store'])->name('admin.resources.create');
Route::get('/admin/resources/index', [App\Http\Controllers\Admin\MeritResourceController::class, 'index'])->name('admin.resources.index');
Route::get('/admin/resources/active/{id}', [App\Http\Controllers\Admin\MeritResourceController::class, 'active']);
Route::get('/admin/resources/deactive/{id}', [App\Http\Controllers\Admin\MeritResourceController::class, 'deactive']);
Route::get('/admin/resources/edit/{id}', [App\Http\Controllers\Admin\MeritResourceController::class, 'edit']);
Route::post('/admin/resources/update', [App\Http\Controllers\Admin\MeritResourceController::class, 'update']);
Route::get('/admin/resources/delete/{id}', [App\Http\Controllers\Admin\MeritResourceController::class, 'delete']);
Route::get('get/admin/subcategory/{id}', [App\Http\Controllers\Admin\MeritResourceController::class, 'getSubcategory']);
// about us
Route::get('/admin/about-us/update', [App\Http\Controllers\Admin\AboutUsController::class, 'update'])->name('admin.about-us.update');
Route::post('/admin/about-us/update', [App\Http\Controllers\Admin\AboutUsController::class, 'updateSubmit'])->name('admin.about-us.update');
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\FrontendController::class, 'privacyPolicy']);
Route::get('/terms-conditions', [App\Http\Controllers\Frontend\FrontendController::class, 'termsCondition']);
Route::get('/terms-conditions-tutors', [App\Http\Controllers\Frontend\FrontendController::class, 'termsConditionTutors']);
Route::get('/terms-conditions-home-tutoring', [App\Http\Controllers\Frontend\FrontendController::class, 'termsConditionhometutoring']);
Route::get('/terms-conditions-online-tutoring', [App\Http\Controllers\Frontend\FrontendController::class, 'termsConditiononlinetutoring']);
Route::get('/terms-conditions-onsite-tutoring', [App\Http\Controllers\Frontend\FrontendController::class, 'termsConditiononsitetutoring']);
Route::get('/faq', [App\Http\Controllers\Frontend\FrontendController::class, 'faq']);
Route::get('/merittutors-resources', [App\Http\Controllers\Frontend\FrontendController::class, 'allresources']);
Route::get('/merittutors-resources/details/{id}/{sku}', [App\Http\Controllers\Frontend\FrontendController::class, 'Detailsresources']);
Route::get('/admin/privacy-policy/update', [App\Http\Controllers\Admin\AboutUsController::class, 'privacyPolicy'])->name('admin.privacy-policy.update');
// terms and conditions
Route::get('/admin/terms-conditions/update', [App\Http\Controllers\Admin\AboutUsController::class, 'termsCondition'])->name('admin.terms-conditions.update');
// category
Route::get('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.create');
Route::post('/admin/category/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
Route::get('/admin/category/index', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/active/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'active']);
Route::get('/admin/category/deactive/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'deactive']);
Route::get('/admin/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::get('/admin/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);
Route::get('/admin/contactmessage/index', [App\Http\Controllers\Admin\ContactMessageController::class, 'index'])->name('admin.contactmessage.index');
Route::get('/admin/contactmessage/view/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, 'videmessage']);
Route::post('/admin/contactmessage/view/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, 'replymessage']);
Route::get('/admin/contactmessage/delete/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, 'delete']);
// blog controller
Route::get('/admin/blog/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('admin.blog.create');
Route::post('/admin/blog/create', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('admin.blog.create');
Route::get('/admin/blog/index', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('admin.blog.index');
Route::get('/admin/blog/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit']);
Route::get('/admin/blog/delete/{id}', [App\Http\Controllers\Admin\BlogController::class, 'delete']);
Route::post('/admin/blog/update', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('admin.blog.update');

// student fees
Route::get('/admin/fees/create', [App\Http\Controllers\Admin\StudentFeesController::class, 'create'])->name('admin.fees.create');
Route::post('/admin/fees/create', [App\Http\Controllers\Admin\StudentFeesController::class, 'store'])->name('admin.fees.create');
Route::get('/admin/fees/index', [App\Http\Controllers\Admin\StudentFeesController::class, 'index'])->name('admin.fees.index');
Route::get('/admin/fees/edit/{id}', [App\Http\Controllers\Admin\StudentFeesController::class, 'edit']);
Route::get('/admin/fees/delete/{id}', [App\Http\Controllers\Admin\StudentFeesController::class, 'delete']);
Route::post('/admin/fees/update', [App\Http\Controllers\Admin\StudentFeesController::class, 'update'])->name('admin.fees.update');

// event conterrolerr
Route::get('/admin/event/create', [App\Http\Controllers\Admin\EventController::class, 'create'])->name('admin.event.create');
Route::post('/admin/event/create', [App\Http\Controllers\Admin\EventController::class, 'store'])->name('admin.event.create');
Route::get('/admin/event/index', [App\Http\Controllers\Admin\EventController::class, 'index'])->name('admin.event.index');
Route::get('/admin/event/edit/{id}', [App\Http\Controllers\Admin\EventController::class, 'edit']);
Route::get('/admin/event/delete/{id}', [App\Http\Controllers\Admin\EventController::class, 'delete']);
Route::post('/admin/event/update', [App\Http\Controllers\Admin\EventController::class, 'update'])->name('admin.event.update');
// review controller
Route::get('/admin/review/create', [App\Http\Controllers\Admin\ReviewController::class, 'create'])->name('admin.review.create');
Route::post('/admin/review/create', [App\Http\Controllers\Admin\ReviewController::class, 'store'])->name('admin.review.create');
Route::get('/admin/review/index', [App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin.review.index');
Route::get('/admin/review/edit/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'edit']);
Route::get('/admin/review/delete/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'delete']);
Route::post('/admin/review/update', [App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin.review.update');
//
Route::get('/admin/gallery/create', [App\Http\Controllers\Admin\GalleryControlller::class, 'create'])->name('admin.gallery.create');
Route::post('/admin/gallery/create', [App\Http\Controllers\Admin\GalleryControlller::class, 'store'])->name('admin.gallery.create');
Route::get('/admin/gallery/index', [App\Http\Controllers\Admin\GalleryControlller::class, 'index'])->name('admin.gallery.index');
Route::get('/admin/gallery/edit/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'edit']);
Route::get('/admin/gallery/delete/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'delete']);
Route::post('/admin/gallery/update', [App\Http\Controllers\Admin\GalleryControlller::class, 'update'])->name('admin.gallery.update');
Route::get('/admin/gallery/active/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'active']);

Route::get('/admin/gallery/deactive/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'deactive']);
Route::get('/admin/result/create', [App\Http\Controllers\Admin\GalleryControlller::class, 'resultCreate']);
Route::get('/admin/result/delete/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'resultDelete']);
Route::post('/admin/result/create', [App\Http\Controllers\Admin\GalleryControlller::class, 'resultStore']);
Route::get('/admin/result/index', [App\Http\Controllers\Admin\GalleryControlller::class, 'resultIndex']);
Route::get('/admin/result/edit/{id}', [App\Http\Controllers\Admin\GalleryControlller::class, 'resultEdit']);
Route::post('/admin/result/update', [App\Http\Controllers\Admin\GalleryControlller::class, 'resultUpdate']);





Route::get('/admin/summer-school/index', [App\Http\Controllers\Admin\AssesmentController::class, 'summerSchoolProgram'])->name('admin.summerschool.index');
Route::get('/admin/maths-competition/index', [App\Http\Controllers\Admin\AssesmentController::class, 'summerMathscompetition'])->name('admin.mathscompetition.index');
// assesment list
Route::get('/admin/assesment/index', [App\Http\Controllers\Admin\AssesmentController::class, 'index'])->name('admin.assesment.index');
Route::get('/admin/assesment/active/{id}', [App\Http\Controllers\Admin\AssesmentController::class, 'active']);
Route::get('/admin/assesment/deactive/{id}', [App\Http\Controllers\Admin\AssesmentController::class, 'deactive']);
Route::get('/admin/assesment/details/{id}', [App\Http\Controllers\Admin\AssesmentController::class, 'details']);
Route::get('/admin/assesment/delete/{id}', [App\Http\Controllers\Admin\AssesmentController::class, 'delete']);
// student request
Route::get('/admin/student-request/index', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'index'])->name('admin.student-request.index');
Route::get('/admin/student-request/delete/{id}', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'delete']);
Route::get('/admin/student-request/view/{id}', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'view']);
Route::post('/admin/student-request/approve', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'approve']);
Route::get('/admin/assign-tutor/index', [App\Http\Controllers\Admin\StudentTutorRequestController::class, 'assigntutor'])->name('admin.assign-tutor.index');
// bnner
Route::get('/admin/banner/update', [App\Http\Controllers\Admin\BannerController::class, 'bannerupdate'])->name('admin.banner.update');
Route::post('/admin/banner/update', [App\Http\Controllers\Admin\BannerController::class, 'update'])->name('admin.banner.update');
// tutor manage
Route::get('/admin/tutor/list', [App\Http\Controllers\Admin\TuitorController::class, 'index'])->name('admin.tutor.list');
Route::get('/admin/tutor/shortlisted', [App\Http\Controllers\Admin\TuitorController::class, 'shortlistedtutor'])->name('admin.tutor.shortlist');
Route::get('/admin/tutor/reference-details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'referencedetails']);
Route::get('/admin/tutor/addshortlisted/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'addshortlistedtutor']);
Route::get('/admin/tutor/removeshortlisted/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'removeshortlistedtutor']);
//
Route::get('/admin/approve-tutor/list', [App\Http\Controllers\Admin\TuitorController::class, 'approvetutor'])->name('admin.approvetutor.list');
Route::get('/admin/reject-tutor/list', [App\Http\Controllers\Admin\TuitorController::class, 'rejectetutor'])->name('admin.rejecttutor.list');
Route::get('/admin/pending-tutor/list',[App\Http\Controllers\Admin\TuitorController::class, 'pendingtutor'])->name('admin.pendingtutor.list');
Route::get('/admin/archive-tutor/list', [App\Http\Controllers\Admin\TuitorController::class, 'archivetutor'])->name('admin.archivetutor.list');
Route::get('/admin/archive/tutor/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'tutorarchive']);
Route::get('/admin/removearchive/tutor/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'tutorremovearchive']);
//
Route::get('/admin/branchtutor/list', [App\Http\Controllers\Admin\TuitorController::class, 'branchtutor'])->name('admin.branchtutor.list');
Route::get('/admin/tutor/details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'details']);
Route::get('/admin/tutor/delete/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'delete']);
Route::get('/admin/tutor/approve/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'approve']);
Route::get('/admin/tutor/reject/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'reject']);
Route::get('/admin/tutor/education-details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'educationdetails']);

Route::get('/admin/tutor/video-presentation/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'videodetails']);
Route::post('/admin/tutor/video-presentation/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'videodetailsstatus']);
Route::post('/admin/tutor/education-details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'educationdetailsstatus']);
Route::get('/admin/tutor/cv-details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'cvdetails']);
Route::get('/admin/tutor/history-details/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'history']);
Route::get('/admin/tutor/paymentrequest-history/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'paymentrequesthistory']);
Route::get('/admin/tutor/paymentrequest-approve/{id}/{tutor_id}', [App\Http\Controllers\Admin\TuitorController::class, 'paymentrequestapprove']);
Route::post('/admin/tutor/paymentrequest-approve/{id}/{tutor_id}', [App\Http\Controllers\Admin\TuitorController::class, 'paymentrequststore']);
// payment request
Route::get('/admin/tutor/payment-request', [App\Http\Controllers\Admin\TuitorController::class, 'paymentrequest'])->name('admin.tutior.paymentrequest');
Route::get('/admin/payment-request/delete/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'paymentrequestdelete']);
Route::get('/admin/payment-request/reject/{id}', [App\Http\Controllers\Admin\TuitorController::class, 'paymentrequestreject']);
Route::get('/admin/verification/update', [App\Http\Controllers\Admin\TuitorController::class, 'verificationupdate']);
Route::get('/admin/tutoreducation/update', [App\Http\Controllers\Admin\TuitorController::class, 'educationverifyupdate']);
// student/Gurdian


Route::get('/admin/student/list', [App\Http\Controllers\Admin\StudentManageController::class, 'index'])->name('admin.student.list');
Route::get('/admin/student/details/{id}', [App\Http\Controllers\Admin\StudentManageController::class, 'details']);
Route::get('/admin/student/delete/{id}', [App\Http\Controllers\Admin\StudentManageController::class, 'delete']);
Route::post('/admin/student/details/{id}', [App\Http\Controllers\Admin\StudentManageController::class, 'detailsverified']);

// receive payment

Route::get('/admin/payment/receive', [App\Http\Controllers\Admin\PaymentController::class, 'receiveindex'])->name('admin.receiveindex.list');
Route::get('/admin/payment/pay', [App\Http\Controllers\Admin\PaymentController::class, 'payindex'])->name('admin.payindex.list');
// mail send/notify
Route::get('/admin/user/notify/{id}', [App\Http\Controllers\Admin\MailSendController::class, 'create']);
Route::post('/admin/user/notify/{id}', [App\Http\Controllers\Admin\MailSendController::class, 'store']);
Route::get('/admin/notify/index', [App\Http\Controllers\Admin\MailSendController::class, 'mainindex'])->name('admin.notify.tutor');
//Frontend Catagory wise product
Route::get('/category/{slug}/{id}', [App\Http\Controllers\Frontend\FrontendCatagoryController::class, 'catagoryView']);
Route::get('/products/{slug}/{id}', [App\Http\Controllers\Frontend\ProductController::class, 'details']);
//Subcategory wise product
Route::get('/subcategory/{slug}/{id}', [App\Http\Controllers\Frontend\FrontendSubCategoryController::class, 'subCatagoryView']);
//user dashboard
Route::get('/logout', [App\Http\Controllers\Frontend\DashboardController::class, 'logout']);
// Route::get('/dashboard', [App\Http\Controllers\Frontend\DashboardController::class, 'dashboard']);
Route::get('/tutor/information', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorinformation']);
Route::get('/tutor/student-request-list', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrequestlist']);
Route::get('/tutor/student-request-list/view/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrequestlistview']);
Route::get('/tutor/student-request-list/accept/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrequestlistaccept']);
Route::get('get/tutor/studentrequestlist/reject/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrequestlistreject']);
Route::post('/tutor/student-request-list/reject', [App\Http\Controllers\Frontend\DashboardController::class, 'studentrejectRequest']);
Route::post('/tutor/account', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorprofileupdate']);
Route::get('/tutor/account', [App\Http\Controllers\Frontend\DashboardController::class, 'tutor_account']);
Route::get('/user/dbs-certification', [App\Http\Controllers\Frontend\DashboardController::class, 'dbscertification']);
Route::get('/tutor/subject-create', [App\Http\Controllers\Frontend\DashboardController::class, 'subjectcreate']);
Route::get('/get/subject/subject/submit', [App\Http\Controllers\Frontend\DashboardController::class, 'subjectsubmit']);
Route::get('/get/allsubject/fromcontroller', [App\Http\Controllers\Frontend\DashboardController::class, 'getallsubject']);
Route::get('/get/tutorsubject/delete/{bid}', [App\Http\Controllers\Frontend\DashboardController::class, 'gettutorsubjectdelete']);
Route::get('/get/allsubject/bylevel/{level_id}', [App\Http\Controllers\Frontend\FrontendController::class, 'getsubject']);
Route::get('/get-free-resources', [App\Http\Controllers\Frontend\FrontendController::class, 'getFreeResources']);
Route::post('/get-free-resources', [App\Http\Controllers\Frontend\FrontendController::class, 'getFreeResourcesSubmit']);
Route::get('/user/video', [App\Http\Controllers\Frontend\DashboardController::class, 'videosection']);
Route::post('/user/video', [App\Http\Controllers\Frontend\DashboardController::class, 'videosectionStore']);
Route::get('/user/proof-of-address', [App\Http\Controllers\Frontend\DashboardController::class, 'proofofaddress']);
Route::post('/user/proof-of-address', [App\Http\Controllers\Frontend\DashboardController::class, 'proofofaddresssubmit']);
Route::get('/user/id-verifications', [App\Http\Controllers\Frontend\DashboardController::class, 'idverification']);
Route::post('/user/id-verifications', [App\Http\Controllers\Frontend\DashboardController::class, 'idverificationsubmit']);
Route::post('/user/dbs-certification', [App\Http\Controllers\Frontend\DashboardController::class, 'dbscertificationsubmit']);
Route::get('/user/verification', [App\Http\Controllers\Frontend\DashboardController::class, 'verification']);
Route::get('/user/verification/delete/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'deleteverifications']);
Route::get('/tutor/educational-information', [App\Http\Controllers\Frontend\DashboardController::class, 'educationalInformation']);
Route::get('/tutor/educational-information/delete/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'deleteeducationalInformation']);
Route::get('tutor-subject/delete/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorsubject_delete']);
Route::get('/tutor/subjects', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorsubjects']);
Route::post('/tutor/subjects', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorsubjectStore']);
Route::get('/tutor/articals', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorarticals']);



Route::post('/tutor/articals', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorarticalssubmit']);
Route::get('/tutor/articals-index', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorarticalsindex']);
Route::get('/tutor/articals/delete/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'articaledelete']);
Route::get('/tutor/articals/edit/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorarticalsedit']);
Route::post('/tutor/articals/update', [App\Http\Controllers\Frontend\DashboardController::class, 'tutorarticalsupdate']);

Route::get('/user/profile-image', [App\Http\Controllers\Frontend\DashboardController::class, 'profileimage']);
Route::post('/user/profile-image', [App\Http\Controllers\Frontend\DashboardController::class, 'profileimagesubmit']);


Route::get('/user/cv', [App\Http\Controllers\Frontend\DashboardController::class, 'cvuploads']);
Route::post('/user/cv', [App\Http\Controllers\Frontend\DashboardController::class, 'cvuploadsubmit']);

Route::post('/tutor/education-information/gcse', [App\Http\Controllers\Frontend\DashboardController::class, 'gcsesubmit']);
Route::post('/tutor/education-information/alevel', [App\Http\Controllers\Frontend\DashboardController::class, 'alevelsubmit']);
Route::post('/tutor/education-information/degree', [App\Http\Controllers\Frontend\DashboardController::class, 'degreesubmit']);
Route::post('/tutor/education-information/masters', [App\Http\Controllers\Frontend\DashboardController::class, 'masterssubmit']);
Route::post('/tutor/education-information/more', [App\Http\Controllers\Frontend\DashboardController::class, 'moresubmit']);

Route::get('/tutor/message', [App\Http\Controllers\Frontend\DashboardController::class, 'allmessage']);
Route::get('/tutor/message/view/{id}', [App\Http\Controllers\Frontend\DashboardController::class, 'viewmessage']);
Route::post('tutor/message/chat/submit', [App\Http\Controllers\Frontend\DashboardController::class, 'tutormessagesubmit']);
Route::post('user/message/chat', [App\Http\Controllers\Frontend\DashboardController::class, 'messagechat']);
// tutor wallet

Route::get('/tutor/wallet', [App\Http\Controllers\Frontend\WalletController::class, 'index']);
Route::get('/tutor/withdraw', [App\Http\Controllers\Frontend\WalletController::class, 'withdrawrequest']);
Route::post('/tutor/withdraw', [App\Http\Controllers\Frontend\WalletController::class, 'withdrawrequestsubmit']);





//customer info update
Route::get('/student/message', [App\Http\Controllers\Frontend\StudentChatController::class, 'allmessage']);
Route::get('/student/message/view/{id}', [App\Http\Controllers\Frontend\StudentChatController::class, 'viewmessage']);
Route::post('/student/message/chat/submit', [App\Http\Controllers\Frontend\StudentChatController::class, 'tutormessagesubmit']);
Route::post('/student/message/chat', [App\Http\Controllers\Frontend\StudentChatController::class, 'messagechat']);
//


Route::get('/student/due_amount/paid/{order_id}', [App\Http\Controllers\Frontend\PaymentController::class, 'due_amountpaid']);
Route::post('/student/due_amount/paid/{order_id}', [App\Http\Controllers\Frontend\PaymentController::class, 'due_amountpaidsubmit']);




Route::get('/user/notification', [App\Http\Controllers\Frontend\StudentChatController::class, 'studentnotification']);
Route::post('/user/notification', [App\Http\Controllers\Frontend\StudentChatController::class, 'studentnotificationsubmit']);


Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact']);
Route::post('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contactstore']);
Route::get('/gallery', [App\Http\Controllers\Frontend\FrontendController::class, 'gallary']);



//filter product
Route::get('/filterproduct', [App\Http\Controllers\Frontend\FilterProductController::class, 'filter']);
Route::get('/filtersubcategoryproduct', [App\Http\Controllers\Frontend\FilterProductController::class, 'subCategoryfilter']);


//pages
Route::get('/about-us', [App\Http\Controllers\Frontend\PagesController::class, 'aboutUs']);
Route::get('/terms-condition', [App\Http\Controllers\Frontend\PagesController::class, 'termsCondition']);
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\PagesController::class, 'privancyPolicy']);
Route::get('/payment-policy', [App\Http\Controllers\Frontend\PagesController::class, 'paymentPolicy']);

Route::get('/admission-procedure', [App\Http\Controllers\Frontend\PagesController::class, 'admission_procedure']);

// Route::get('/tutor-find', [App\Http\Controllers\Frontend\PagesController::class, 'tutorfind']);
// Route::get('/tutor-find/search', [App\Http\Controllers\Frontend\PagesController::class, 'tutorfindresult'])->name('tutor.search.result');

// Route::get('/tutor-find/details/{id}', [App\Http\Controllers\Frontend\PagesController::class, 'tutordetails']);




// tutor hire controller




Route::get('/video/online-tutorial', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'OnlineVideo']);
Route::get('/tutor/online-resources', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'OnlineResources']);

Route::get('/tutor/hire/payment-details/{order_id}/{diffInweek}/{diffInMonths}/{t_id}', [App\Http\Controllers\Frontend\TutorHireController::class, 'paymentProcess']);

Route::get('/tutor/contact-a-tutor/{id}', [App\Http\Controllers\Frontend\TutorHireController::class, 'tutorhire']);
Route::post('/tutor/contact-a-tutor/submit', [App\Http\Controllers\Frontend\TutorHireController::class, 'tutorhiresubmit']);
// tutor lesson complete
Route::get('/tutor/lesson-complete-list', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'index']);
Route::get('/tutor/lesson-complete-add', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'add']);
Route::post('/tutor/lesson-complete-add', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'store']);
Route::get('/tutor/lesson-complete-delete/{id}', [App\Http\Controllers\Frontend\TutorLessonComplateController::class, 'delete']);

Route::post('/stripe-payment', [App\Http\Controllers\Frontend\PaymentController::class, 'handlePost'])->name('stripe.post');
Route::get('/mybooked/{order_id}/{amount}/success', [App\Http\Controllers\Frontend\PaymentController::class, 'success']);
Route::get('/mybooked/cancel', [App\Http\Controllers\Frontend\PaymentController::class, 'cancel'])->name('cancel');



Route::get('/student/payment-history', [App\Http\Controllers\Frontend\StudentPaymentController::class, 'paymentHistory']);


Route::get('/child-care', [App\Http\Controllers\Frontend\PagesController::class, 'child_care']);
//product report
// blog
Route::get('/blogs', [App\Http\Controllers\Frontend\FrontendController::class, 'blogs']);
Route::get('/details/{slug}/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'blogsdetails']);

Route::get('/events', [App\Http\Controllers\Frontend\EventController::class, 'index']);
Route::get('/event/details/{id}', [App\Http\Controllers\Frontend\EventController::class, 'eventdetails']);

// assesment controller

Route::get('/testing-assesment', [App\Http\Controllers\Frontend\AssesmentController::class, 'testingassesment']);
Route::post('/testing-assesment', [App\Http\Controllers\Frontend\AssesmentController::class, 'testingassesmentSubmit']);

Route::get('/assessment', [App\Http\Controllers\Frontend\AssesmentController::class, 'create']);
Route::post('/assessment', [App\Http\Controllers\Frontend\AssesmentController::class, 'store']);



Route::get('/gcse-chemistry-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'chemistryRevision']);
Route::get('/gcse-maths-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'mathsRevision']);

Route::get('/gcse-biology-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'biologyRevision']);

Route::get('/gcse-physics-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'physicsRevision']);

Route::get('/gcse-english-language-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'englishlanguageRevision']);

Route::get('/gcse-english-literature-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'englishLiteratureRevision']);
// end gcse

Route::get('/alevel-chemistry-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'aLevelchemistryRevision']);
Route::get('/alevel-maths-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'aLevelmathsRevision']);

Route::get('/alevel-biology-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'aLevelbiologyRevision']);

Route::get('/alevel-physics-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'aLevelphysicsRevision']);

Route::get('/alevel-psychology-revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'aLevelpsychologyRevision']);





// Route::get('/revision-courses', [App\Http\Controllers\Frontend\CourseController::class, 'revisionCourses']);

// allcourses


Route::get('/tuition/11-plus-london', [App\Http\Controllers\Frontend\CourseController::class, 'elevenplus']);
Route::get('/tuition/ks1-maths-tuition', [App\Http\Controllers\Frontend\CourseController::class, 'ksonemaths']);
Route::get('/tuition/ks1-english-tuition', [App\Http\Controllers\Frontend\CourseController::class, 'ksoneenglish']);
Route::get('/tuition/ks2-maths-tuition', [App\Http\Controllers\Frontend\CourseController::class, 'kstwomaths']);
Route::get('/tuition/ks2-english-tuition', [App\Http\Controllers\Frontend\CourseController::class, 'kstwoenglish']);
Route::get('/tuition/ks3-tuition', [App\Http\Controllers\Frontend\CourseController::class, 'ksthree']);
Route::get('/tuition/gcse-tuition', [App\Http\Controllers\Frontend\CourseController::class, 'gcse']);
Route::get('/tuition/a-level-tuition', [App\Http\Controllers\Frontend\CourseController::class, 'alevelCourse']);


Route::get('/work-with-us', [App\Http\Controllers\Frontend\TuitorController::class, 'applyfrom']);
Route::get('/tutor/signup', [App\Http\Controllers\Frontend\TuitorController::class, 'singup']);
Route::post('/tutor/signup', [App\Http\Controllers\Frontend\TuitorController::class, 'singupstore']);
Route::get('/register/success', [App\Http\Controllers\Frontend\TuitorController::class, 'registersuccess'])->name('register.success');
//
Route::get('/register/type', [App\Http\Controllers\Frontend\StudentController::class, 'registertype']);

//
Route::get('/student/signup', [App\Http\Controllers\Frontend\StudentController::class, 'singup']);
Route::post('/student/signup', [App\Http\Controllers\Frontend\StudentController::class, 'singupstore']);

Route::get('/student/dashboard', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'dashboard']);
Route::get('/user/updatepassword', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'updatepassword']);
Route::post('/user/updatepassword', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'updatepasswordStore']);

Route::get('/student/savetutor', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'savetutor']);

Route::get('/student/updateprofile', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'updateprofile']);
Route::post('/student/updateprofile', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'updateprofileStore']);
Route::get('/student/tutorrequestlist', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'studentrequestlist']);
Route::get('/student/tutorrequestlist/delete/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'studentrequestdelete']);
Route::get('/student/tutorrequestlist/update/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'studentrequestupdate']);
Route::post('/student/tutorrequestlist/update/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'studentrequsubmit']);
Route::get('/student/lesson-complete', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplate']);


Route::get('/student/lesson-complete/view/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplateview']);
Route::post('/student/lesson-complete/view/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplatestatusupdate']);

Route::get('/student/lesson-complete/approve/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplateapprove']);
Route::get('/student/lesson-complete/reject/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'lessioncomplatereject']);

Route::get('/student/tutor-hire-list', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'tutorHireList']);


Route::get('/student/tutorrequestlist/view/{id}', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'tutorHireview']);
Route::post('user/feedback/submit', [App\Http\Controllers\Frontend\StudentDashboardController::class, 'feedbacksubmit']);
// student payment
Route::get('/student/payment', [App\Http\Controllers\Frontend\StudentPaymentController::class, 'index']);


Route::get('/get/verification/details/{id}', [App\Http\Controllers\Frontend\StudentPaymentController::class, 'getverification']);
Route::get('/get/educationiden/details/{id}', [App\Http\Controllers\Frontend\StudentPaymentController::class, 'geteducationiden']);




// save tutor routes
Route::post('/student/tutorsave', [App\Http\Controllers\Frontend\SaveTutorController::class, 'savetutor']);

//Search

Route::get('/news-letter', [App\Http\Controllers\Frontend\PagesController::class, 'newsletter']);



Route::get('/summer-school', [App\Http\Controllers\Frontend\PagesController::class, 'summerschool']);

Route::get('/tutor-guideline', [App\Http\Controllers\Frontend\PagesController::class, 'tutorguidline']);

Route::get('/student-guideline', [App\Http\Controllers\Frontend\PagesController::class, 'studentguidline']);


Route::post('newslettersubmit/news', [App\Http\Controllers\Frontend\PagesController::class, 'newsletterSubmit']);


Route::get('/on-site-tutoring', [App\Http\Controllers\Frontend\PagesController::class, 'OnSite']);
Route::get('/online-tutoring', [App\Http\Controllers\Frontend\PagesController::class, 'online']);
Route::get('/home-tutoring', [App\Http\Controllers\Frontend\PagesController::class, 'hometutoring']);
Route::get('/finance-support', [App\Http\Controllers\Frontend\PagesController::class, 'financesupport']);
Route::get('/filter-by-name', [App\Http\Controllers\Frontend\PagesController::class, 'filterbyname']);


Route::get('/reference-check/{id}/{email}', [App\Http\Controllers\Frontend\PagesController::class, 'referencecheckpage']);

Route::post('/reference-check/submission/confirm/', [App\Http\Controllers\Frontend\PagesController::class, 'referencecheckconfirm']);

Route::post('/reference-check/submission/decline/', [App\Http\Controllers\Frontend\PagesController::class, 'referencecheckdecline']);
