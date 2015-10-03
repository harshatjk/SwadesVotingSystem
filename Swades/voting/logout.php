<script type ="text/javascript">
$(document).ready(function(){
    FB.logout(function(response) {
    <?php
        session_start();
        $_SESSION['FBID'] = NULL;
        $_SESSION['FULLNAME'] = NULL;
        session_unset();
    header("Location: ../index.php");        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
    ?>
    });
});
</script>
