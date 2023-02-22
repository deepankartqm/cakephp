<?php

namespace App\Form;
use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

use cake\Mailer\Email;
use cake\Mailer\Mailer;
use cake\Mailer\TransportFactory;
use cake\Mailer\Security;

class ContactForm extends Form
{
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('body', ['type' => 'text']);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator->minLength('name', 5)
            ->email('email');

        return $validator;
    }

    protected function _execute(array $data): bool
    {
        // Send an email.

        $mailer = new Mailer('default');
        $mailer->setTransport('gmail');
        if($mailer->setFrom(['deepankarrao284@gmail.com'=> 'mycake4'])
        // ->setTo('deepankarrao284@gmail.com')
        // ->setEmailFormate('@gam')
        ->setSubject('Verify New Account')
        ->deliver('hi'.implode($data)));

        return true;
    }
}

?>