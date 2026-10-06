<?php

class Router
{
    public static function bideratu(): void
    {
        if (isset($_GET['action']) && $_GET['action'] === 'produktuak') {
            $produktuakController = new ProduktuakController();
            $produktuakController->index();
            return;
        }

        require __DIR__ . '/../views/hasiera.php';
    }
}
