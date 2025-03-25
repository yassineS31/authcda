<?php

namespace App\Service;


final class EmailService
{
    public function __construct(
        private readonly string $emailUser,
        private readonly string $emailPassword,
        private readonly string $emailSmtp,
        private readonly int $emailPort,
    ){}

    public function test() :string {
        return "Email : " . $this->emailUser .
        " Serveur : " . $this->emailSmtp .
        " Port : " . $this->emailPort;
    }
}