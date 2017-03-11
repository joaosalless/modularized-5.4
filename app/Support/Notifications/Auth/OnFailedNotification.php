<?php

namespace App\Support\Notifications\Auth;

use Illuminate\Notifications\Messages\MailMessage;

class OnFailedNotification extends AuthNotification
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
                    ->subject('Tentativa de login na sua conta.')
                    ->line("Olá, {$notifiable->name},")
                    ->line([
                        "Você está recebendo este e-mail porque foi efetuada uma tentativa de acesso à sua conta de usuário {$notifiable->email} em {$notifiable->requestedUrl}.",
                        'Caso não tenha certeza da complexidade da sua senha, é recomendável que altere-a.',
                        'Clique no botão abaixo se quiser redefinir sua senha:',
                    ])
                    ->action('Recuperar Senha', panel()->resetPasswordUrl())
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
