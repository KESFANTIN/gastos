<?php

// Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>
    
<script>
    // Mensagem
    window.onload = function() {
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
    };

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });
</script>

<?php 
endif;
session_unset();

?>