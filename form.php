


<form   id = "form_1" action = "#" method = "POST"  class = "col-12 ">

				<div id= "div4" class="form-group " >
					<input type="text" class = "form-control my-border" name="FirstName" placeholder="First Name" autocomplete = "off" maxlength= "30" pattern="[a-zA-Z]{3,30}"title = "please enter your first Name." required >
				</div>  <!-- End of form-group Div -->
                 
                 <div id= "div4" class="form-group " >
					<input type="text" class = "form-control my-border" name="LastName" placeholder="Last Name" autocomplete = "off" maxlength= "30" pattern="[a-zA-Z]{3,30}"title = "please enter your last Name." required >
				</div>  <!-- End of form-group Div -->

				<div class="form-group">
					<input type="email" class="form-control my-border" name="Email" placeholder="Email" autocomplete = "off" maxlength= "50" title ="Please enter your Email here." required>
                </div><!-- End of form-group Div -->

				<div id= "div5" class="form-group" >
					<input type="password" class = "form-control my-border" name="Password" placeholder="Password" autocomplete = "off" maxlength= "18" pattern="[\w]{10,18}" title ="You need a Password" required>
				</div>  <!-- End of form-group Div -->


				<button type = "submit" class="btn text-light bg-primary my-text-shadow" name = "submit">
					<!-- the name attribute must be place either in the button tag or you can place -->
					<!-- the input tag inside of the button tags....you have to have the name attribute -->
					<!-- for the php to grab a hold of it...  -->
                    <!-- <input type = "submit" name = "submit"> -->
					<i class = "fas fa-sign-in-alt text-light my-text-shadow" title ="click to enter your info" ></i>Login</button>

				</form>  <!-- end of #form_1  -->