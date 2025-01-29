<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\EmailServiceController;
use App\Http\Controllers\EmailTemplateController;
use App\Http\Controllers\MailTracker;
use App\Http\Controllers\PageController;
use App\Models\upgrade;
use App\Models\Cagnotte;
use App\Models\particular_user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\pageViewController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\PortalTemplatesController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\Sendmail;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WorkspaceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::controller(WebsiteController::class)->group(function () {
   Route::get("/", "welcome")->name("welcome");
   Route::get("/docs", "docs")->name("docs");
   Route::post("/docs", "newsletter")->name("newsletter-add");
   Route::get("/visitor/campaign/details/{id}", "campaign_details")->name("visitor.campaign-details");
});

Route::controller(AuthController::class)->group(function () {
   Route::get('/login', 'login')->name('auth.login');
   Route::post('/auth/login', 'login_now')->name('auth.login-now');

   Route::get('/register', 'register')->name('auth.register');
   Route::post('/auth/register', 'register_now')->name('auth.register-now');

   Route::get('/forget', 'forget')->name('auth.forget');
   Route::post('/forget/demand', 'forget_demand')->name('auth.forget-demand');

   Route::get('/reset/{id}', 'reset')->name('auth.reset');
   Route::post('/reset/demand', 'reset_demand')->name('auth.reset-demand');

   Route::get('/logout', 'logout')->name('logout');
});

Route::controller(PortalController::class)->group(function () {
   Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware("IsAuthenticate");
   Route::get('/setting', 'setting')->name('setting')->middleware("IsAuthenticate");
   Route::post('/setting/password/change', 'setting_password_change')->name('setting_password_change')->middleware("IsAuthenticate");
   Route::post('/setting/data/change', 'setting_personal_data')->name('setting_personal_data')->middleware("IsAuthenticate");

   Route::get('/notifications', 'notifications')->name('notifications')->middleware("IsAuthenticate");
});

Route::controller(CampaignController::class)->middleware("IsInWorkspace", "IsAuthenticate")->group(function () {
   Route::get('/campaigns', 'campaigns')->name('campaigns')->middleware("IsAuthenticate");
   Route::get('/campaign/new', 'campaignNew')->name('campaign-new')->middleware("IsAuthenticate");
   Route::get('/campaign/finalize/{uid}', 'campaignEnd')->name('campaign-finalize')->middleware("IsAuthenticate");
   Route::get('/campaign/details/{uid}', 'campaignDetails')->name('campaign-details')->middleware("IsAuthenticate");
   Route::post('/campaign/delete', 'campaign_delete')->name('campaign_delete')->middleware("IsAuthenticate");
   Route::post('/campaign/new/add', 'campaignNewAdd')->name('campaign-new-add');
});

Route::controller(EmailServiceController::class)->group(function () {
   Route::get('/emails/services', 'emailServices')->name('/emails/services')->middleware("IsAuthenticate");
   Route::post('/emails/services/add', 'emailServices_add')->name('/emails/services/add')->middleware("IsAuthenticate");
   Route::post('/emails/services/edit', 'emailServices_edit')->name('/emails/services/edit')->middleware("IsAuthenticate");
   Route::post('/emails/services/delete', 'emailServices_delete')->name('/emails/services/delete')->middleware("IsAuthenticate");
});

Route::controller(WorkspaceController::class)->group(function () {
   Route::get('/workspaces', 'workspace')->name('workspace')->middleware("IsAuthenticate");
   Route::post('/workspace/add', 'workspace_add')->name('workspace-add');
   Route::post('/workspace/edit', 'workspace_edit')->name('workspace-edit');
   Route::post('/workspace/delete', 'workspace_delete')->name('workspace-delete');
   Route::post('/workspace/swipe', 'workspace_swipe')->name('workspace.swipe');
});

Route::controller(SubscriberController::class)->middleware("IsInWorkspace", "IsAuthenticate")->group(function () {
   Route::get('/subscribers', 'index')->name('subscribers');
   Route::post('/group/add', 'group_add')->name('group-add');
   Route::post('/group/delete', 'group_delete')->name('group-delete');
   Route::post('/contact/import/csv', 'import')->name('import-csv')->middleware("IsInTag");
   Route::post('/contact/add', 'add_contact')->name('contact-add')->middleware("IsInTag");
   Route::post('/contact/delete', 'delete_contact')->name('contact-delete');
});

Route::controller(SendEmailController::class)->group(function () {
   Route::post('/campaign/mail/test', 'campaignMailTest')->name('sendmail-campaign-test');
   Route::post('/campaign/mail/bulk', 'campaignMail')->name('sendmail-campaign-sender');
   Route::get('/track-email/{id}', 'trackOpen')->name('track_open'); // Track open
   Route::get('/track-click/{campaign_id}/{url}', 'trackClick')->name('trackClick'); // Track click
});

Route::controller(EmailTemplateController::class)->middleware("IsInWorkspace", "IsAuthenticate")->group(function () {
   Route::get('/templates', 'index')->name('templates');
   Route::post('/template/add', 'template_add')->name('template-add');
   Route::post('/template/edit', 'template_edit')->name('template-edit');
   Route::post('/template/delete', 'template_delete')->name('template-delete');
});

Route::get("/cron/sendmail", function () {
   Artisan::call('app:send-campaign-mail'); //Envoyer et renvoyer les campagnes direct
   Artisan::call('app:send-campaign-mail-schedule'); //Envoyer et renvoyer les campagnes planifiés
});

Route::get("/command", function () {
   //Artisan::call('migrate:refresh');
   Artisan::call('app:send-campaign-mail-schedule');
   Artisan::call('app:send-campaign-mail');
   Artisan::call('queue:work --queue=delete_contacts');
   Artisan::call('queue:work --queue=import_contacts');
});

Route::get("/link", function(){
   Artisan::call('storage:link');
});

Route::controller(MailTracker::class)->group(function () {
   Route::get('/mail/tracker/open/{id}', 'track_open')->name('track_open');
});
