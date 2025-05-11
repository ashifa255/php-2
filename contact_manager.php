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
    }
}
