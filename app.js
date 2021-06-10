	$(document).ready(function() {
				$("#pin").validate({
					submitHandler : function() {
					    console.log(form.valid());
						if (form.valid()) {
						    alert("sf");
							return true;
						} else {
							return false;
						}

					},
					rules : {
						pin : {
							required : true,
							minlength : 3,
							remote : {
								url : "check_pin.php",
								type : "post",
								data : {
									username : function() {
										return $("#input_pin").val();
									}
								}
							}
						},
						category:{
						    required : true
						}
                    }})})