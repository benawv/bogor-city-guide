
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


			/* Banner Position Save*/
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

                
				$( "#square" ).click(function() {  
                	//alert('square');
                	$('#place').prop('class', 'square facebook-caption leftside');
                });  

                $( "#portrait" ).click(function() {  
                	$('#place').prop('class', 'portrait facebook-caption leftside');
                });

                $( "#landscape" ).click(function() {  	
                	$('#place').prop('class', 'landscape facebook-caption leftside');
                });
                
                //Capture image and download it   
				$('body').on('click','#download',function(){
	                html2canvas($('#timelineContainer'), {
	                    onrendered: function(canvas) {
	                        //$('#imaged').html(canvas);
	                            var dataURL = canvas.toDataURL("image/png");

	                           	//$('#imaged').append('<img src="'+dataURL+'" />');
	                            //$('#imaged').html('Generating..');
	                            // $.post('image.php',{image: dataURL},function(data){
	                            //     $('#imaged').html(data);
	                            //     console.log(data);
	                            // });

	                			// Random filename after download
	                			var filename = new Array(5).join().replace(/(.|$)/g, function(){return ((Math.random()*36)|0).toString(36);})

	                			var link = document.createElement('a');
									link.href = dataURL;
									link.download = filename+".png";
									document.body.appendChild(link);
									link.click();

	       						//var a = $("<a>")
								//.attr("href", dataURL)
								//.attr("download", filename)
								//.appendTo("body");

								//a[0].click();

								//a.remove();
	                    }
	                });
					
					// clear input text form
	                var form = document.getElementById("formx");
					form.reset();

					//hiding ask form
	                $('#ask').hide();
			    	$('#fillform').show();
 				});


			}); 	


