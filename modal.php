<div class="regis_form" id="modal-reg">
        <span onclick="close_modal()" class="close_reg_modal">&times;</span>
        <div class="regis_modal">

            <input type="checkbox" id="clk" aria-hidden="true">
            <div class="sign_up">
                <label for="clk" aria-hidden="true">Sign Up</label>
                <form action="">
                
                    <input type="text" id="stuname"  placeholder="Username" required="">
                    <input type="tel" id="stumob"  placeholder="Mobile No." required="">
                    <input type="email" id="stuemail"  placeholder="Email" required="">
                    <input type="password" id="stupass" placeholder="password" required="">
                     
                    <button onclick="addstu()" class="reg_btn">Sign Up</button>
                </form>
            </div>
            <div class="login">
                <label for="clk" aria-hidden="true">Sign In</label>
                <form action="">

                    <input type="email" name="username" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="password" required="">
                    <button class="reg_btn">Log In</button>
                </form>
            </div>
            <div class="login"></div>
        </div>
    </div>