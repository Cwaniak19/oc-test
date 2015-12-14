<?php
/**
 * This file is part of the "PasswordEncoder" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */
namespace WorwaA\Component\Password;
interface EncodingMethod
{
    public function encode($plainText);
}