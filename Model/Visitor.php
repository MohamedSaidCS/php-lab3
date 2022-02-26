<?php

class Visitor {
    static function MarkVisited() {
        $_SESSION['is_counted'] = true;
    }
}