<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as BaseResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends BaseResetPassword
{
    /**
     * Build the mail representation of the notification.
     *
     * @param string $url
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = $this->resetUrl($notifiable);

        return (new MailMessage)
            ->greeting('Merhaba!')
            ->subject('Parola Sıfırlama Talebi')
            ->line('Bu e-postayı, parolanızı sıfırlamak için aldınız.')
            ->action('Parolayı Sıfırla', $url)
            ->line('Bu talebi siz yapmadıysanız, herhangi bir işlem yapmanıza gerek yoktur.')
            ->line('Saygılar!')
            ->salutation( config('app.name') );
    }

    /**
     * Generate the reset URL.
     *
     * @param mixed $notifiable
     * @return string
     */
    protected function resetUrl($notifiable)
    {
        return url(route('password.reset', [
            'token' => $this->token,
            'email' => $notifiable->getEmailForPasswordReset(),
        ], false));
    }
}
