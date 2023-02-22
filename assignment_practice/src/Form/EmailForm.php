<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;

class EmailForm extends Form
{
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('body', ['type' => 'text']);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator->minLength('name', 5);
            // ->email('email');

        return $validator;
    }

    protected function _execute(array $data): bool
    {
        // Send an email.
        $mailer = new Mailer('default');
        $mailer
            ->setTransport('gmail') //your email configuration name
            ->setFrom(['deepankarrao284@gmail.com'=> 'mycake4'])
            ->setTo('deepankarrao284@gmail.com')
            ->setEmailFormat('html')
            ->setSubject('Verify New Account')
            ->deliver('Hi $name<br/>Welcome to Code The Pixel.');
        return true;
    }
}

?>