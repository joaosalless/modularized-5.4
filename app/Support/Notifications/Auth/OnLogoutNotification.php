<?php

namespace App\Support\Notifications\Auth;

use Illuminate\Notifications\Messages\MailMessage;

class OnLogoutNotification extends AuthNotification
{
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
        return (new MailMessage)
                    ->subject('Foi efetuado logoff em sua conta')
                    ->line("Olá, {$notifiable->name}!")
                    ->line("Foi efetuado logoff em sua conta {$notifiable->email} em {$notifiable->requestedUrl}.")
                    ->line([
                        'Estes são os dados de localização de onde foi encerrada a sessão:',
                    ])
                    ->line([
                        "{$this->geo['city']},",
                        "{$this->geo['state']},",
                        "{$this->geo['country']}",
                    ])
                    ->line("IP: {$this->geo['ip']}")
                    ->line("Dispositivo: {$this->getDevice()}")
                    ->line("Plataforma: {$this->agent->platform()} {$this->agent->version($this->agent->platform())}")
                    ->line("Navegador: {$this->agent->browser()} {$this->agent->version($this->agent->browser())}")
                    ->line("Caso tenha sido você que efetuou o login, ignore esta mensagem.");
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
