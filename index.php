<?php

function getGreeting() {
    return "Hello, World!";
    echo "This line will not execute before the other come to the code"; // This line is unreachable
    // This is a comment
}

echo getGreeting();