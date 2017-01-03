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

    	$data = [
    	'tmpl'=>'emails.test',
    	'subject'=>'this is a new title...', 
    	'content'=>'this is content.', 
    	'mail_to'=>'gongxi@sooga.cn'
    	];
    	$job = new SendReminderEmail($data);//->delay(30);
        dispatch($job);
        return 'ok';
    }
}
