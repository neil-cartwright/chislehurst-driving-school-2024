<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\CostResourceController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TestController;



/* Admin views */

/* Middleware = MustBeAdmin.php */

Route::middleware('admin')->group(function () {

    /**
     * Admin Controller
     */

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    /**
     * Lesson Controller
     */

    Route::get('/admin/lessons', [LessonController::class, 'index'])->name('admin.lessons');
    Route::get('/admin/lesson/create', [LessonController::class, 'create'])->name('admin.lessons.create');
    Route::post('/admin/lesson/store', [LessonController::class, 'store'])->name('admin.lessons.store');
    Route::post('/admin/lesson/destroy/{id}', [LessonController::class, 'destroy']);
    Route::get('/admin/lesson/{id}/edit', [LessonController::class, 'edit'])->name('admin.lessons.edit');
    Route::post('/admin/lesson/update/{id}', [LessonController::class, 'update']);
    Route::post('/admin/lesson/notes/{id}', [LessonController::class, 'notes']);

    /**
     * Find Lessons
     */
    Route::get('/admin/lessons/find', [FindController::class, 'index'])->name('admin.lessons.find');
    Route::post('/admin/lessons/find', [FindController::class, 'find']);
    Route::get('/admin/lessons/find/{month}/{year}', [FindController::class, 'monthYear']);

    /**
     * Customer Controller
     */

    Route::get('/admin/customers/{sort?}', [CustomerController::class, 'index'])->name('admin.customers');
    Route::get('/admin/customer/create', [CustomerController::class, 'create'])->name('admin.customers.create');
    Route::post('/admin/customer/store', [CustomerController::class, 'store']);
    Route::get('/admin/customer/{id}', [CustomerController::class, 'show'])->name('admin.customers.show');
    Route::post('/admin/customer/destroy/{id}', [Customercontroller::class, 'destroy']);

    Route::get('/admin/customers/customer/search', [CustomerController::class, 'search'])->name('admin.customers.search');
    Route::post('/admin/find', [CustomerController::class, 'find']);


    /** 
     *  Archive 
     */
    Route::post('/admin/customer/archive/{id}', [ArchiveController::class, 'update']);
    Route::get('/admin/customers/archive/archive', [ArchiveController::class, 'archive'])->name('admin.customers.archive');
    Route::get('admin/customers/archive/test-passes', [ArchiveController::class, 'test_passes'])->name('admin.customers.test_passes');


    /**
     * Cost Resource Controller
     */

    Route::get('/admin/costs', [CostResourceController::class, 'index'])->name('admin.costs');
    Route::get('/admin/cost/create/{the_category?}/{month?}/{year?}', [CostResourceController::class, 'create'])->name('admin.cost.create');
    Route::post('/admin/cost', [CostResourcecontroller::class, 'store']);
    Route::get('/admin/cost/edit/{id}', [CostResourceController::class, 'edit'])->name('admin.cost.edit');
    Route::post('/admin/cost/update/{id}', [CostResourceController::class, 'update']);
    Route::post('/admin/cost/destroy/{id}', [CostResourceController::class, 'destroy']);
    Route::get('admin/costs/show/{category}', [CostController::class, 'category'])->name('admin.costs.show');

    /* Cost Controller */
    Route::get('admin/costs/show/description/{description}', [CostController::class, 'description'])->name('admin.cost.description');
    Route::get('admin/costs/show/{month}/{year}', [CostController::class, 'month'])->name('admin.costs.timeFrame');
    Route::get('admin/costs/find', [CostController::class, 'search'])->name('admin.costs.find');
    Route::post('admin/costs', [CostController::class, 'find']);
    Route::get('admin/costs/averages/{year?}', [CostController::class, 'averages'])->name('admin.costs.averages');

    /**
     * Records
     */
    Route::get('/admin/records/{record}', [RecordController::class, 'index']);

    /**
     * Homework
     */
    Route::get('/admin/homework/create/{id}', [HomeworkController::class, 'create']);
    Route::post('/admin/homework/send/{id}', [HomeworkController::class, 'send']);

    /**
     * email
     */
    Route::get('/admin/email/send/test', [HomeworkController::class, 'send']);

    /**
     * notes
     */
    Route::get('/admin/notes/{id}', [NotesController::class, 'show']);

    /**
     * reports
     */
    Route::get('/admin/report/create/{id}', [ReportController::class, 'create']);
    Route::post('/admin/report/store/{id}', [ReportController::class, 'store']);
    Route::get('/admin/report/show/{id}', [ReportController::class, 'show']);
    Route::post('/admin/report/update/{id}', [ReportController::class, 'update']);

    /**
     * Test Controller
     */
    Route::post('/admin/customer/test', [TestController::class, 'store']);
    Route::get('/admin/customers/tests/index', [TestController::class, 'index']);
});
