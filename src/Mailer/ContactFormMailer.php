<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * ContactForm mailer.
 */
class ContactFormMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'ContactForm';

   	public function submission(array $data)
   	{
        $this->from('jameskukreja@gmail.com', 'Bookmarks')
            ->to('jameskukreja@gmail.com', 'Me')
            ->template('default' , 'default')
            ->set(['data' => $data]);
   	}
}
