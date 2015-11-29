<?php // file '/classes/EmailParts.php' ?>
<?php
	// This is a simple class that will get the information sent with the contact
	// form. It creates the email body message and also the subject, "from" and "to"
	// information of the email.
	class EmailParts {

		public $contactForm;

		public function __construct($contactForm) {
			$this->contactForm = $contactForm;
		}

		public function getSubject() {
			return $this->contactForm->objet;
		}

		public function getFrom() {
			return array($this->contactForm->email => $this->contactForm->name);
		}

		

		public function getTo() {
			return EMAIL_TO;
		}

		public function getBodyMessage() {
			$name = $this->contactForm->name;
			$tele = $this->contactForm->tele;
			$email = $this->contactForm->email;
			$message = $this->contactForm->message;
			return <<<EOD
Name: $name \n
GSM: $tele \n
Email: $email \n
Message: $message \n
EOD;
		}

	}