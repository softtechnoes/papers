<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
// use App\Models\NotificationTemplate;
use Lang;
use Config;

class RequestUserActivationToAdmin extends Notification
{
    use Queueable;
    protected $userTo; // receiver
    protected $userFrom; // sender
    protected $action_link_activate;
    protected $action_link_deactivate; 

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($userTo, $userFrom)
    {
        $this->userTo   = $userTo; //admin
        $this->userFrom = $userFrom; //user
        $action_link_activate = route('activate.request',[$userFrom->id,$userTo->id]);
        $action_link_deactivate = route('deactivate.request',[$userFrom->id,$userTo->id]);
        $this->action_link_activate = $action_link_activate;
        $this->action_link_deactivate = $action_link_deactivate;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        if (config('app.activate_mail_notifications')) {
            return ['mail','database'];
          } else {
            return ['database'];
        }
        // return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        /** @var User $user */
       $userTo             = $this->userTo;
       $userFrom           = $this->userFrom;
       //dd($userTo,$userFrom);
       $default_mail       = Config::get('mail.from.address'); //support@aefika.com
       $action_link_activate = $this->action_link_activate;
       $action_link_deactivate = $this->action_link_deactivate;
       $greeting           = sprintf(__('Hello') . ' %s', $userTo->name);
    //    $template = NotificationTemplate::where('notification_name','RequestUserActivationToAdmin')->first();
       
       $intro              = 'Hello';
       $outro              = 'Outro';
       $salutation         = 'Salutation';

       return (new MailMessage)
       ->from($default_mail,config('app.name').' '. Lang::get('site_lang.on_behalf_of').' '.$userFrom->name)
       ->replyTo($userFrom->email, $userFrom->name)
       ->subject(stripslashes('User Activation').' - '.$userFrom->name)
       ->markdown('mails.request_user_activation', [
        'action_link_activate' => $action_link_activate,
        'action_link_deactivate' => $action_link_deactivate,
        'greeting' =>$greeting,
        'intro' => $intro,
        'outro' => $outro,
        'salutation' => $salutation
        ]);
    }
    public function toDatabase($notifiable)
    {

        /** @var User $user */
        $userTo             = $this->userTo;
        $userFrom           = $this->userFrom;
 
        // $template = NotificationTemplate::where('notification_name','RequestUserActivationToAdmin')->first();
        return [
            'title' =>  'db title',
            'detail' => 'details',
        ];

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
