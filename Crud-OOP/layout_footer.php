  </div></div>
    <!-- /container -->
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="libs/jquery/jquery-3.2.1.min.js"></script>
 
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="libs/dist/jquery.validate.js"></script>
<script src="libs/dist/jquery.maskedinput.js"></script>
  
<!-- bootbox library -->
<script src="libs/jquery/bootbox.min.js"></script>
 <script>
// JavaScript for deleting product

 
 
 
      
 

$(document).on('click', '.delete-object', function(){
 
    var id = $(this).attr('delete-id');
 	
    bootbox.confirm({
        message: "<h4>Are you sure?</h4>",
        buttons: {
            confirm: {
                label: '<span class="glyphicon glyphicon-ok"></span> Yes',
                className: 'btn-danger'
            },
            cancel: {
                label: '<span class="glyphicon glyphicon-remove"></span> No',
                className: 'btn-primary'
            }
        },
        callback: function (result) {
 
            if(result==true){
                $.post('delete_product.php', {
                    object_id: id
                }, function(data){
                    location.reload();
                }).fail(function() {
                    alert('Unable to delete.');
                });
            }
        }
    });
 
    return false;
});
$(document).on('click', '.delete-multiple', function(){
 
    
 	
    bootbox.confirm({
        message: "<h4>Are you sure?</h4>",
        buttons: {
            confirm: {
                label: '<span class="glyphicon glyphicon-ok"></span> Yes',
                className: 'btn-danger'
            },
            cancel: {
                label: '<span class="glyphicon glyphicon-remove"></span> No',
                className: 'btn-primary'
            }
        },
        callback: function (result) {
 		var id[].add( $(".select").val());
 		alert ($id[]);
            if(result==true){
            	alert( $(".select").attr('value'));
            	$(".select").each(function(){

            		 $.post('delete_product.php', {
                    object_id: $(".select").attr('value')
                }, function(data){
                    location.reload();
                }).fail(function() {
                    alert('Unable to delete.');
                });
              
            	});
              
            }
        }
    });
 
    return false;
});



	
		
		$("form").validate({
			rules: {
				name: {
					required: true,
					minlength : 5
				},
				price:{
					required:true,
					number: true,
					


				},
				description:{
					required:true,
					minlength:10
				}

			},
			message:{
				name: {
					required :"please enter a Name",
					minlength:"Name must consist of at least 5 characters"
				},
				price :{
					required:"please enter a price",
					integer: "price must be a number"
				},
				description: {
					required :"please enter a description",
					minlength:"description must consist of at least 10 characters"
				},
			}
			
			
		});

	

</script>
</body>
</html>