<?php

// Initialize contact variables

$contact1_name = "";
$contact1_phone = "";
$contact2_name = "";
$contact2_phone = "";
$contact_count = 0;

// Main menu loop

while (true) {
    echo "\nContact Management App\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Choose an option (1-3): ";

    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case '1':
            if ($contact_count >= 2) {
                echo "\nWarning: You can only store 2 contact. Please delete one to add another.\n";

                break;
            }

            echo "\nEnter contact name: ";
            $name = trim(fgets(STDIN));
            echo "Enter phone number: ";
            $phone = trim(fgets(STDIN));

            if ($contact_count == 0) {
                $contact1_name = $name;
                $contact1_phone = $phone;
            } else {
                $contact2_name = $name;
                $contact2_phone = $phone;
            }

            $contact_count++;
            echo "\nContact added successfully!\n";

            break;

        case '2':
            echo "\n-- Saved Contact ---\n";

            if ($contact_count == 0) {
                echo "No contacts saved yet.\n";

                break;
            }

            if ($contact_count >= 1) {
                echo "1. Name: " . $contact1_name . ", Phone: " . $contact1_phone . "\n";
            }

            if ($contact_count >= 2) {
                echo "2. Name: " . $contact2_name . ", Phone: " . $contact2_phone . "\n";
            }

            break;

        case '3':
            echo "\nGoodbye!\n";
            exit(0);


        default:
            echo "\nInvalid choice. Please try again.\n";
    }
}
