<?php
namespace App\Controller;

use App\Form\ContactForm;
use App\Controller\AppController;


/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 */
class ContactsController extends AppController
{

	public function index()
	{
		$form = new ContactForm();
		if($this->request->is('post'))
		{
			if($form->execute($this->request->data))
			{
				$this->Flash->success('We have received your contact info.');
			} else
			{
				$this->Flash->error('Check the form');
			}
		}

		$this->set('form', $form);
	}
}
