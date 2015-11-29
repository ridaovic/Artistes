<?php // file '/classes/ContactForm.php' ?>
<?php
// Class containing information sent by the user with the contact form
// The contact form is considred valid if the name, email and message was
// entered. The attachment is not mandatory.

// The attachment should be a .JPG file or else a validation error
// will be raised.  You can change the way it behave by changing the
// method isAttachmentValid.
class ContactForm {

	// Name entered in the contact form
	public $name;

	public $tele;

	// Email entered in the contact form (nothing validates that it's an existaing email address)
	public $email;

	public $objet;

	// The message field
	public $message;

	// A list of error messages to display to the user. Will be empty if no error happened
	public $errors = [];

	// The file attachment uploaded by the user.
	public $attachment;

	// ContactForm constructor. This method will be called when we instantiate a ContactForm class for the
	// first time. We pass in parameter the $_POST and $_FILE variable that we rename $post and $files.
	// I find it cleaner but we could keep the original name too.
	public function __construct($post = array(), $files = array()) {
		
		if (array_key_exists('name', $post))
			$this->name = $post["name"];

		if (array_key_exists('tele', $post))
			$this->tele = $post["tele"];

		if (array_key_exists('objet', $post))
			$this->objet = $post["objet"];

		if (array_key_exists('email', $post))
			$this->email = $post["email"];							

		if (array_key_exists('message', $post))
			$this->message = $post["message"];			

		if (array_key_exists('attachment', $files))
			$this->attachment = $files["attachment"];						

	}

	// Checks if the user sent the form. It will check that at least one field was filled.
	public function isDataSent() {
		if (!empty($this->name) || !empty($this->email)|| !empty($this->objet) || !empty($this->message)) {
			return true;
		}

		return false;
	}

	// Here, we validate each field of the contact form. If there is an error with one
	// of the field, we'll add an error message in the $errors array.
	public function validate() {
		if (empty($this->name)) {
			$this->errors['name'] = 'Nom est vide';
		}
		if (empty($this->objet)) {
			$this->errors['objet'] = 'Entrez un Objet';
		}
		if (empty($this->name)) {
			$this->errors['name'] = 'Name is mandatory';
		}

		if (empty($this->email)) {
			$this->errors['email'] = 'L-E-mail est obligatoire';
		} else if (filter_var($this->email, FILTER_VALIDATE_EMAIL) === false) {
			$this->errors['email'] = 'Enrez une valide E-mail';
		}

		if (empty($this->message)) {
			$this->errors['message'] = 'Entrez le Message';
		}

		if (!empty($this->attachment['name']) && !$this->isAttachmentValid()) {
			$this->errors['attachment'] = 'Only JPG images are accepted!';
		}

	}

	// Checks if the user uploaded an attachment.
	public function hasAttachment() {
		if (!empty($this->attachment))
			return true;

		return false;
	}

	// Returns the path on the server of the uploaded file
	public function getAttachmentPath() {
		$tempPath = $this->attachment['tmp_name'];
		$realFileName = $this->attachment['name'];
		move_uploaded_file($this->attachment["tmp_name"], UPLOAD_DIR . $this->attachment["name"]);			
		return UPLOAD_DIR . $this->attachment["name"];
	}

	// Returns true if the contact form was valid.
	public function isValid() {
		return empty($this->errors);			
	}

	// Return the error list.
	public function getErrors() {
		return $this->errors;
	}

	// Checks if the attachment uploaded is a valid JPG image
	public function isAttachmentValid() {
		if (exif_imagetype($this->attachment['tmp_name']) == IMAGETYPE_JPEG && $this->isFileExtensionJpg($this->attachment)) {
			return true;
		}

		return false;
	}

	// Utility method to checks if the file extension is really .JPG and the file type is also image/jpeg
	private function isFileExtensionJpg($file) {
		$filename = $file['name'];
		$type = $file['type'];
		$extension = strtolower(substr($filename, strpos($filename, '.') + 1));
		$size = $file['size'];

		if(($extension == 'jpg' || $extension == 'jpeg') && ($type == 'image/jpg' || $type == 'image/jpeg')){
			return true;
		}	

		return false;
	}

}