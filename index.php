<?php

function getGreeting() {
    return "Hello, World!";
    echo "This line will not execute"; // This line is unreachable
    // This is a comment
}

echo getGreeting();