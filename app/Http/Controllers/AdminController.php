<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function index() {
        return view('admin.admin');
    }

    /**
     * @Route("/admin/students")
     */
    public function indexStudents() {
        return view('admin.students');
    }

     /**
     * @Route("/admin/waiters")
     */
    public function indexWaiters() {
        return view('admin.waiters');
    }

}
