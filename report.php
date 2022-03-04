<?php

define('TITLE', "Login");
include '../assets/layouts/header.php';
check_logged_out();
?>


<iframe
      src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR72R4mnbY7Xcnp27ci28xMlK0kONWTcphIpEfIl7uYnCi9xDSrmT5mx5xIjwZj7BA3_1_CckqK0Rax/pubhtml?gid=1944528672&amp;single=true&amp;widget=true&amp;headers=false"
      class="col-12"
      width="240"
      height="371"
    ></iframe>
    <a type="button" href="index.php" class="btn btn-primary btn-lg"> Back </a>
    <a
      type="button"
      href="https://docs.google.com/spreadsheets/d/1OSjeTlQFT6aGte7tT5t6KFy2ZHncqS9E-IYBZOGW_5g/export?format=csv&id=1OSjeTlQFT6aGte7tT5t6KFy2ZHncqS9E-IYBZOGW_5g&gid=1944528672"
      download="Open-to-Buy.csv"
      class="btn btn-primary btn-lg"
    >
      Export as CSV
    </a>
    <a
      type="button"
      href="https://docs.google.com/spreadsheets/d/1OSjeTlQFT6aGte7tT5t6KFy2ZHncqS9E-IYBZOGW_5g/export?format=pdf&id=1OSjeTlQFT6aGte7tT5t6KFy2ZHncqS9E-IYBZOGW_5g&gid=1944528672"
      download="Open-to-Buy.csv"
      class="btn btn-primary btn-lg"
    >
      Export as PDF
    </a>


<?php

include '../assets/layouts/footer.php'

?>