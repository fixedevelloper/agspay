<?php

namespace App\Notifications\Agent\Withdraw;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;

class WithdrawMail extends Notification
{
    use Queueable;

    public $user;
    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$data)
    {
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {


        $user = $this->user;
        $data = $this->data;
        $trx_id = $this->data->trx_id;
        $date = Carbon::now();
        $dateTime = $date->format('Y-m-d h:i:s A');
        if($data->gateway_type == "MANUAL"){
            $status = __("Pending");
        }else{
            $status = __("success");
        }
        return (new MailMessage)

                    ->greeting(__("Hello")." ".$user->fullname." !")
                    ->subject(__("Withdraw Money Via")." ". $data->gateway_name.' ('.$data->gateway_type.' )')
                    ->line(__("Withdraw Send Email Heading")." ".$data->gateway_name." ,".__("details of withdraw money").":")
                    ->line(__("web_trx_id").": " .$trx_id)
                    ->line(__("request Amount").": " . getAmount($data->amount,4).' '.get_default_currency_code())
                    ->line(__("Exchange Rate").": " ." 1 ". get_default_currency_code().' = '. getAmount($data->charges->gateway_cur_rate,4).' '.$data->charges->gateway_cur_code)
                    ->line(__("Fees & Charges").": " . getAmount($data->charges->total_charge,4).' '.$data->charges->gateway_cur_code)
                    ->line(__("Will Get").": " .  get_amount($data->charges->will_get,$data->charges->gateway_cur_code,'',4))
                    ->line(__("Total Payable Amount").": " . get_amount($data->charges->payable,get_default_currency_code(),'4'))
                    ->line(__("Status").": ". $status)
                    ->line(__("Date And Time").": " .$dateTime)
                    ->line(__('Thank you for using our application!'));

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}