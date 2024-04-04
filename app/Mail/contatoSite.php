<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class contatoSite extends Mailable
{
    use Queueable, SerializesModels;
    private $emailEnviar;
    private $nome;
    private $dadosForm;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailEnviar, $nome, $dadosForm)
    {
        $this->emailEnviar = $emailEnviar;
        $this->nome = $nome;
        $this->dadosForm = $dadosForm;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Mensagem site Beeapp');
        $this->to($this->emailEnviar, $this->nome);
        $this->cc("ataliba@beeapp.com.br", "Tecnologia Beeapp");
        return $this->view('mail.contatoSite', [
            'email' => $this->emailEnviar,
            'dados' => $this->dadosForm,
        ]);
    }
}