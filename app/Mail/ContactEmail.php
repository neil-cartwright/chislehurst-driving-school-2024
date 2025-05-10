<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $telephone;
    public $address;
    public $enquiry;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $telephone, $address, $enquiry)
    {
        $this->name = $name;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->address = $address;
        $this->enquiry = $enquiry;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('neil@chislehurstdrivingschool.co.uk', 'Chislehurst Driving School Website'),
            subject: 'Enquiry from ' . $this->name,
            replyTo: [
                new Address($this->email, $this->name),
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.contact.contact-email',
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
