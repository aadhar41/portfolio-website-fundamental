<?php

namespace App\Mail;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $title, $content, $buttonText, $buttonUrl, $email;
    public $post;

    /**
     * Create a new message instance.
     */
    public function __construct(Post $post)
    {
        $this->subject = $subject = 'Hello';
        $this->title = $title = 'Testing';
        $this->content = $content = 'Lorem Ipsum';
        $this->buttonText = $buttonText = 'Click';
        $this->buttonUrl = $buttonUrl = '#';
        $this->email = $email = 'test@gmail.com';
        $this->post = $post;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            to: 'aadhar41@gmail.com',
            from: env('MAIL_FROM_ADDRESS'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
        view: 'emails.order-shipped',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('storage\uploads\1698236932_IMG_20220830_220511.jpg')),
        ];
    }
}
