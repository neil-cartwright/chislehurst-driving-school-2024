<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class HomeworkEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $email;
    public $email_subject;
    public $homework_links;

    /**
     * Create a new message instance.
     */
    public function __construct($firstname, $email, $email_subject, $homework_links)
    {
        $this->firstname = $firstname;
        $this->email = $email;
        $this->email_subject = $email_subject;
        $this->homework_links = $homework_links;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('neil@chislehurstdrivingschool.co.uk', 'Neil Cartwright'),
            subject: $this->email_subject,
            replyTo: [
                new Address('neil@chislehurstdrivingschool.co.uk', 'Neil Cartwright'),
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.homework.mail-homework',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
