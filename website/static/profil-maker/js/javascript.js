
// Change photo cover profile

$(document).ready(function()
		{

			/* Uploading Profile BackGround Image */
			$('body').on('change','#bgphotoimg', function()
			{
				$('#timelineBackground img').last().remove();
				$("#bgimageform").ajaxForm({target: '#timelineBackground',
				beforeSubmit:function(){},
				success:function() {

					$("#timelineShade").hide();
					$("#bgimageform").show();
				},
				error:function(){

				} }).submit();
			});


			/* Banner position drag */
			$("body").on('mouseover','.headerimage',function ()
			{
				var y1 = $('#timelineBackground').height();
				var y2 =  $('.headerimage').height();
				$(this).draggable({
					scroll: true,
					axis: "y",
					drag: function(event, ui) {
						if(ui.position.top >= 0)
							{
								ui.position.top = 0;
							}
						else if(ui.position.top <= y1 - y2)
							{
								ui.position.top = y1 - y2;
							}
					},
					stop: function(event, ui)
						{
						}
				});
			});


			/* Bannert Position Save*/
			$("body").on('click','.bgSave',function ()
			{
				var id = $(this).attr("id");
				var p = $("#timelineBGload").attr("style");
				var Y =p.split("top:");
				var Z=Y[1].split(";");
				var dataString ='position='+Z[0];
					$.ajax({
					type: "POST",
					url: "image_saveBG_ajax.php",
					data: dataString,
					cache: false,
					beforeSend: function(){ },
					success: function(html)
					{
						if(html)
						{
							$(".bgImage").fadeOut('slow');
							$(".bgSave").fadeOut('slow');
							$("#bgimageform").show();
							$("#timelineShade").fadeIn("slow");
							$("#timelineBGload").removeClass("headerimage");
							$("#timelineBGload").css({'margin-top':html});
							
							return false;
						}
					}
				});
				return false;
			});

	
		});

// Choose notepad color detail

		    $(document).ready(function() {
		        $("#color").change(function() {
		            if($(this).val() == "Blue"){

		            	//alert('blue');
		    			var lastClass = $('#notepad').attr('class').split(' ').pop();
						$("#notepad").removeClass(lastClass).addClass('bg-blue');

						var lastClass = $('#edge-note').attr('class').split(' ').pop();
						$("#edge-note").removeClass(lastClass).addClass('e-blue'); 
						console.log(lastClass);
                        
		            } 

		            if($(this).val() == "Orange"){

		            	//alert('orange');
		            	var lastClass = $('#notepad').attr('class').split(' ').pop();
						$("#notepad").removeClass(lastClass).addClass('bg-orange');

						var lastClass = $('#edge-note').attr('class').split(' ').pop();
						$("#edge-note").removeClass(lastClass).addClass('e-orange'); 
						console.log(lastClass);
		            	
		            } 

		            if($(this).val() == "Red"){

		            	//alert('red');
		            	var lastClass = $('#notepad').attr('class').split(' ').pop();
						$("#notepad").removeClass(lastClass).addClass('bg-red');

						var lastClass = $('#edge-note').attr('class').split(' ').pop();
						$("#edge-note").removeClass(lastClass).addClass('e-red'); 
						console.log(lastClass);
		               
		            } 
		        });

				$("#position").change(function() {
		            if($(this).val() == "Left"){

		            	// alert('left');
		    			var lastClass = $('#place').attr('class').split(' ').pop();
						$("#place").removeClass(lastClass).addClass('leftside');
						console.log(lastClass);
                        
		            } 

		            if($(this).val() == "Right"){

		            	//alert('right');
		            	var lastClass = $('#place').attr('class').split(' ').pop();
						$("#place").removeClass(lastClass).addClass('rightside');
						console.log(lastClass);
		            	
		            } 
		          
		        });

		});

		    
			//Preview button

 			$(function() { 
                    $("#preview").click(function(){
                    	$('#judul, #konten, #nama').empty();
                        $headline = $('#atas').val();
                        $konten = $('#tengah').val();
                        $nama1 = $('#bawah1').val();
                        $nama2 = $('#bawah2').val();
                        $('#judul').html($headline);
                        $('#konten').html($konten);
                        $('#nama').html($nama1+" "+$nama2);
                        $("#place").css({display: "block"});
                });


                //Ask to save or no    
                    $("#save").click(function(){
                    	$('#fillform').hide();
                    	$('#ask').show();
                        
                });

                //Back to fill form    
                    $("#cancel").click(function(){
                    	$('#fillform').show();
                    	$('#ask').hide();
                        
                });

                
                //Capture image and download it   
			    $("#download").click(function() { 
			    	//alert('download');
			       html2canvas([document.getElementById('timelineContainer')], {
					    onrendered: function (canvas) {
					        //document.getElementById('canvas').appendChild(canvas);
					        var data = canvas.toDataURL('image/png');
					        // AJAX call to send `data` to a PHP file that creates an image from the dataURI string and saves it to a directory on the server

					        var image = new Image();
					        image.src = data;
					        document.getElementById('imaged').appendChild(image);
	                       // document.getElementById('note').style.display('block');
					    }
					});
			    });
		



			}); 	


// Upload image ajax


