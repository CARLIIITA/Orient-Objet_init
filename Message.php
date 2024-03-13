<?php


namespace Email; {

    class Message
    {
        private string $message;
        private string $date;
        private string $author;


        public function setMessage(string $message): self
        {
            $this->message = $message;

            return $this;
        }


        public function setDate(string $date): self
        {
            $this->date = $date;

            return $this;
        }



        public function setAuthor(string $author): self
        {
            $this->author = $author;

            return $this;
        }
        public function displayMessage(): string
        {
            return "Le message de " . $this->author . " est : " . $this->message . " et a été posté le " . $this->date;
        }
    }
}

        namespace Notification; {

        class Message
    {
        public function displayNotification(): string
        {
            return "Notification";
        }
    }
}

        $message = new \Email\Message();
        $message->setMessage('Bonjour');
        $message->setDate('2021-09-01');
        $message->setMessage('Jean');
        echo $message->displayMessage();

        $message1 = new \Notification\Message();
        $message1->displayNotification();
        echo $message1->displayNotification();














































