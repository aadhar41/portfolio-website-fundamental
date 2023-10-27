<?php

namespace App\Mail;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class PostPublished extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $title, $content, $buttonText, $buttonUrl, $email, $post;

    /**
     * Create a new message instance.
     */
    public function __construct(Post $post)
    {
        $this->subject = $subject = 'Your Post Published Notification';
        $this->title = $title = 'Post Published';
        $this->content = $content = "Here's a brief description of your post:";
        $this->buttonText = $buttonText = 'View Your Post';
        $this->buttonUrl = $buttonUrl = "{{ route('posts.show', $post->id) }}";
        $this->email = $email = 'test@gmail.com';
        $this->post = $post;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Post Published',
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
            view: 'emails.post-published',
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
            Attachment::fromPath(public_path($this->post->image)),
        ];
    }
}
