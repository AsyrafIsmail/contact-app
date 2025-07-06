<?php
require_once __DIR__ . '/../models/Contact.php';

class ContactController{
    private $contactModel;

    public function __construct() {
        $this->contactModel = new Contact();
    }

    // List all contacts
    public function index() {
        $contacts = $this->contactModel->getAllContacts();
        include __DIR__ . '/../views/contacts/index.php';
    }

    // Show form for new contact
    public function create() {
        include __DIR__ . '/../views/contacts/create.php';
    }

    // Save new contact to DB
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $this->contactModel->createContact($name, $email, $phone);
            header("Location: /index.php");
            exit;
        }
    }

    // Show form for editing
    public function edit($id) {
        $contact = $this->contactModel->getContactById($id);
        include __DIR__ . '/../views/contacts/edit.php';
    }

    // Update contact n DB
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $this->contactModel->updateContact($id, $name, $email, $phone);
            header("Location: /index.php");
            exit;
        }
    }

    // Delete contact from DB
    public function delete($id) {
        $this->contactModel->deleteContact($id);
        header("Location: /index.php");
        exit;
    }
}