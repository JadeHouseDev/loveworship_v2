<?php

namespace App\Jobs;

use App\Http\Controllers\GeneralController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendSmsNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $phone;
    protected $msg;
    protected $type;

    public function __construct($phone, $msg, $type)
    {
        $this->phone = $phone;
        $this->msg = $msg;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $sendSms = new GeneralController;
            Log::warning("############## SEND SMS HANDLE ##########");
            $sms_obj = $sendSms->send_sms($this->phone, $this->msg);
        } catch (\Throwable $th) {
            $err = $th->getMessage();
            Log::warning("############## Error: $err ##########");
        }
    }
}
