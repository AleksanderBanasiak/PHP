<?php

session_start();
session_destroy();


header("Location: http://localhost:80/php/php6b"); // nie wiedziałem jak tutaj mam podać inaczej ścieżkę z racji tego że conf-> już nie działa
?>