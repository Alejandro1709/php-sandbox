<?php
  // echo isset($_GET['name']) ? $_GET['name'] : '';
  echo htmlspecialchars($_GET['name'] ?? '');
?>