<?php

namespace App\Support\Notifications\Auth;

use Illuminate\Notifications\Messages\MailMessage;

class OnLockoutNotification extends AuthNotification
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
                    ->subject('Tentativas de login na sua conta.')
                    ->line("Olá, {$notifiable->name},")
                    ->line([
                        "Você está recebendo este e-mail porque foram efetuadas pelo menos 6 tentativas de acesso à sua conta de usuário {$notifiable->email} em {$notifiable->requestedUrl}.",
                        'Clique no botão abaixo para redefinir sua senha:',
                    ])
                    ->line([
                        'Estes são os dados de localização de onde partiram as tentativas de acesso:',
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
                    ->line("Caso seja você mesmo que esteja tentando acessar sua conta e não esteja conseguindo, você pode recuperar sua senha através do link abaixo.")
                    ->action('Recuperar Senha', panel()->resetPasswordUrl())
                    ;
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
