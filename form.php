


<form   id = "form_1" action = "#" method = "get"  class = "col-12 ">

				<div id= "div4" class="form-group " >
					<input type="text" class = "form-control my-border" name="Username" placeholder="Username" autocomplete = "off" maxlength= "30" pattern="[A-Za-z]{3,30}"title = "please enter a Name." required >
				</div>  <!-- End of form-group Div -->

				<div class="form-group">
					<input type="email" class="form-control my-border" name="email" placeholder="Email" autocomplete = "off" maxlength= "50" title ="Please enter your Email here." required>
                </div><!-- End of form-group Div -->

				<div id= "div5" class="form-group" >
					<input type="password" class = "form-control my-border" name="Password" placeholder="Password" autocomplete = "off" maxlength= "18" pattern="[\w]{10,18}" title ="You need a Password" required>
				</div>  <!-- End of form-group Div -->


				<button type = "submit" class="btn text-light bg-primary my-text-shadow"><i class = "fas fa-sign-in-alt text-light my-text-shadow" title ="click to enter your info" ></i>Login</button>

				</form>  <!-- end of #form_1  -->