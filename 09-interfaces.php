<?php
    declare(strict_types = 1);

    interface IMailer {
        public function send() : void;
    }

    class Mailchimp implements IMailer {
        public function send() : void {
            echo "Enviando email desde Mailchimp";
        }
    }

    class ZendGrid implements IMailer {
        public function send() : void {
            echo "Enviando email desde ZendGrid";
        }
    }

    class MailerFactory {
        private static $mailer;

        public static function set(Imailer $mailer) : void{
            if(!self::$mailer){
                self::$mailer = $mailer;
            }
        }

        public static function send() : void {
            self::$mailer->send();
        }

    }


    // $obj = new Mailchimp();
    // $obj->send();

    // echo "\n*2";

    MailerFactory::set(new ZendGrid);
    MailerFactory::send();