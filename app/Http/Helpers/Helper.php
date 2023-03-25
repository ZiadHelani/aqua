<?php
use App\Models\ContactInfo;
class Helper {
    public static function showSocial() {
        $contact = ContactInfo::first();
        return $contact;
    }
}





?>