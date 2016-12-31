<?php

namespace App\Jobs;

// use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendReminderEmail implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $title;
    protected $content;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // 发送邮件
        Mail::raw($this->content, function($message) {
            $message->from('16655376@qq.com', '更新提醒');
            $message->subject($this->title);
            $message->to('gongxi@sooga.cn');
        });
        sleep(30);
    }
}