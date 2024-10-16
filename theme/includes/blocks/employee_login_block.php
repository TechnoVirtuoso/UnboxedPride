<section class="employee-login-block">
    <div class="wrap-employee-block">
        <div class="wrap-top-content">
            <div class="content-block">
            <div class="main-heading"> <?php echo $block['main_heading'] ?> </div>
            <div class="main-text"> <?php echo $block['main_text'] ?> </div>
            </div>
            <div class="discount-image"><img src="<?php echo $block['discount_image']['url'] ?>" alt=""></div>
        </div>
        <div class="wrap-two-sides-block">
            <div class="left-block">
                <div class="left-block-wrap">
                <div class="heading"><?php echo $block['left_block']['heading'] ?></div>
                <div class="text"><?php echo $block['left_block']['text'] ?></div>
              <div class="btn-wrap"> <a class="button" href="<?php echo $block['left_block']['button']['url'] ?>"><?php echo $block['left_block']['button']['title'] ?></a></div> 
            </div>
            </div>
            <div class="right-block">
                <div class="heading">Existing Client</div>

                <div class="from-block">
                    <?php echo $block['right_form']?>
                </div> 

                
                <script>
                function togglePassword() {
                    var passwordField = document.getElementById("password");
                    var passwordIcon = document.querySelector(".password-icon");

                    if (passwordField.type === "password") {
                        passwordField.type = "text";
                        // passwordIcon.textContent = "👁️";
                    } else {
                        passwordField.type = "password";
                        // passwordIcon.textContent = "👁️";
                    }
                }
            </script>

            </div>
        </div>
        
    </div>
</section>