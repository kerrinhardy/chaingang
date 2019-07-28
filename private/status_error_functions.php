<?php

function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div class=\"bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6\" role=\"alert\">";
    $output .= "<p class=\"font-bold\">Oops! Please fix the following errors:</p>";
    $output .= "<ul  class=\"list-inside list-disc\">";
    foreach($errors as $error) {
      $output .= "<li>" . h($error) . "</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}

function get_and_clear_session_message() {
  if(isset($_SESSION['message']) && $_SESSION['message'] != '') {
    $msg = $_SESSION['message'];
    unset($_SESSION['message']);
    return $msg;
  }
}

function display_session_message() {
  $msg = get_and_clear_session_message();
  if(isset($msg) && $msg != '') {
    return '<div id="message">' . h($msg) . '</div>';
  }
}

?>
