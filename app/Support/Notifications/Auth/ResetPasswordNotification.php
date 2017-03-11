<?php

namespace App\Support\Notifications\Auth;

use App\Support\Notifications\Auth\AuthNotification;
use Illuminate\Notifications\Messages\MailMessage;

abstract class ResetPasswordNotification extends AuthNotification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     */
    public function __construct($token)
    {
        parent::__construct();
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line("Olá, {$notifiable->nome},")
            ->line('')
            ->line([
                'Você está recebendo este e-mail porque recebemos um pedido de redefinição de senha para a sua conta.',
                'Clique no botão abaixo para redefinir sua senha:',
            ])
            ->line([
                'Estes são os dados de onde partiu a solicitação:',
            ])
            ->line("Localização: {$this->geo['city']}, {$this->geo['state']}, {$this->geo['country']}.")
            ->line("IP: {$this->geo['ip']}")
            ->line("Dispositivo: {$this->getDevice()}")
            ->line("Plataforma:  {$this->agent->platform()} {$this->agent->version($this->agent->platform())}")
            ->line("Navegador:   {$this->agent->browser() } {$this->agent->version($this->agent->browser()) }")
            ->action('Redefinir Senha', panel()->resetPasswordTokenUrl($this->token))
            ->line('Se você não solicitou uma nova senha, não é necessário nenhuma ação. Mas certifique-se de que suas credenciais estejam seguras e atualizadas.');
    }
}
