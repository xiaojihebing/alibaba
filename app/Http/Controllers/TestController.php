<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendReminderEmail;

class TestController extends Controller
{
    /**
     * 测试队列
     */
    public function index()
    {
    	//测试数组

    	$data = ['subject'=>'this is a new title...', 'content'=>'this is content.', 'rfq_id'=>'1343543534'];
    	$job = new SendReminderEmail($data);//->delay(30);
        dispatch($job);
        return 'ok';
    }
}
