<?php

function wp_check_password($password, $hash) {
    $wp_hasher = new PasswordHash(8, true);
    return $wp_hasher->CheckPassword($password, $hash);
}

function wp_hash_password($password) {
    $wp_hasher = new PasswordHash(8, true);
    return $wp_hasher->HashPassword( trim( $password ) );
}
