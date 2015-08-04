
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
			$("body").on('mouseover','.headerimage, .ava-img',function ()
			{	
				var y1 = $('#timelineBackground, #avacapture1, #avacapture2').height();
				var y2 =  $('.headerimage, .ava-img').height();
				$(this).draggable({
					scroll: true,
					axis: "x,y",
					// drag: function(event, ui) {
					// 	if(ui.position.top >= 0)
					// 		{
					// 			ui.position.top = 0;
					// 		}
					// 	else if(ui.position.top <= y1 - y2)
					// 		{
					// 			ui.position.top = y1 - y2;
					// 		}
					//},
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
                    $("#preview, #save").click(function(){
                    	$('#judul, #konten, #nama, #cname').empty();
                        $headline = $('#atas').val();
                        $konten = $('#tengah').val();
                        $nama1 = $('#bawah1').val();
                        $nama2 = $('#bawah2').val();
                        $('#judul').html($headline);
                        $('#konten').html($konten);
                        $('#nama').html($nama1+" "+$nama2); //name at form cover
                        $('#cname').html($nama1+" "+$nama2); //name at form avatar
                        $("#place").css({display: "block"});
                        
                        var named = $("#nama").text().length;
                        console.log(named);
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

                    //Back to fill form    
                    $("#preview, #download, #square, #portrait, #landscape").click(function(event){
                    	//alert("scroll");
                        event.preventDefault();
						$('html,body').animate({
							scrollTop:$(this.hash).offset().top
						}, 500);
                	});

                
				$( "#square" ).click(function() {  
                	//alert('square');
                	$('#place').prop('class', 'square facebook-caption leftside');
                	$("#notepad").prop('class', 'facebook-caption--inner square-bg bg-blue');
                });  

                $( "#portrait" ).click(function() {  
                	$('#place').prop('class', 'portrait facebook-caption leftside');
                	$("#notepad").prop('class', 'facebook-caption--inner portrait-bg bg-blue');
                });

                $( "#landscape" ).click(function() {  	
                	$('#place').prop('class', 'landscape facebook-caption leftside');
                	$("#notepad").prop('class', 'facebook-caption--inner landscape-bg bg-blue');
                });

                //hiding template
                //$("#cover2, #cover3, #ava1, #ava2, #gambar, #pilih").css("display", "none");
                
                //cek cookie
                var temp = getCookie("template");
    			console.log(temp);

    			//get template from cookie
			    if(temp == "template1") {
			        //alert("landscape");
			        $("#cover1").show();
			        $("#place").prop('class', 'landscape facebook-caption leftside');
			        $("#notepad").prop('class', 'facebook-caption--inner landscape-bg bg-blue');
			    }
			    else if(temp == "template2") {
			        //alert("portrait");
			        $("#cover1").show();
			        $("#place").prop('class', 'portrait facebook-caption leftside');
			        $("#notepad").prop('class', 'facebook-caption--inner portrait-bg bg-blue');
			    }
			    else if(temp == "template3") {
			        //alert("square");
			        $("#cover1").show();
			        $("#place").prop('class', 'square facebook-caption leftside');
			        $("#notepad").prop('class', 'facebook-caption--inner square-bg bg-blue');
			    }
			    else if(temp == "template4" || temp == "template6") {
			        //alert("ava2");
			        $("#ava2").css("display", "block");
			        $("#input1, #input2, #input5, #input6").hide();
			    }
			    else if(temp == "template5") {
			        //alert("ava1");
			        $("#ava1").css("display", "block");
			        $("#input1, #input2, #input3, #input4, #input5, #input6").hide();
			    }

			    if($(window).width() < 640) {
			    	//alert("640 coy");
			    	if(temp == "template1" || temp == "template2" || temp == "template3") {
			    		//$("#cover1").hide();
			    		//$("#cover-m").show();
			    	}
			    }

                //Capture image and download it   
				$('body').on('click','#download',function(){

					//capture cover
					if(temp == "template1" || temp == "template2" || temp == "template3") {

						//$("#cover-m").hide();
	                    //$("#cover1").show();

	                html2canvas($('#cover1'), {
	                    onrendered: function(canvas) {
	                    	
	                        	//$('#imaged').html(canvas);
	                            var dataURL = canvas.toDataURL("image/png");

	                           	//$('#imaged').append('<img src="'+dataURL+'" />');

	                            //$('#imaged').html('Generating..');
	                            // $.post('image.php',{image: dataURL},function(data){
	                            //     $('#imaged').html(data);
	                            //     console.log(data);
	                            // });

	                			//Random filename after download
	                			var filename = new Array(2).join().replace(/(.|$)/g, function(){return ((Math.random()*36)|0).toString(36);})

	        						var link = document.createElement('a');
									link.href = dataURL;
									link.download = "Allianz_download_"+filename+".png";
									document.body.appendChild(link);
									link.click();
									console.log(dataURL);
									console.log(link);	

									//trying to save directory
									var output = dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
									var output = encodeURIComponent(dataURL);
									var cur_path = 'downloaded';
									console.log(output);
									console.log(cur_path); 
		                			var Parameters = "image=" + output + "&filedir=" + cur_path;
								        $.ajax({
								            type: "POST",
								            url: "/website/static/profil-maker/save.php",
								            data: Parameters,
								            success: function(data) {
										        //alert(data);
										        //console.log(data);
										    },
										    error: function(data){
										    	alert("fail");
										    }
								        });

	                    		}

		                	});
						}

					//capture avatar
					else if(temp == "template4" || temp == "template6"){
						html2canvas($('#avatar2'), {
	                    onrendered: function(canvas) {
	                        //$('#imaged').html(canvas);
	                            var dataURL = canvas.toDataURL("image/png");

	                			//Random filename after download
	                			var filename = new Array(2).join().replace(/(.|$)/g, function(){return ((Math.random()*36)|0).toString(36);})

	        						var link = document.createElement('a');
									link.href = dataURL;
									link.download = "Allianz_download_"+filename+".png";
									document.body.appendChild(link);
									link.click();

									//trying to save directory
									var output = dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
									var output = encodeURIComponent(dataURL);
									var cur_path = 'downloaded';
									console.log(output);
									console.log(cur_path); 
		                			var Parameters = "image=" + output + "&filedir=" + cur_path;
								        $.ajax({
								            type: "POST",
								            url: "/website/static/profil-maker/save.php",
								            data: Parameters,
								            success: function(data) {
										        //alert(data);
										        //console.log(data);
										    },
										    error: function(data){
										    	alert("fail");
										    }
								        });
	                    	}
	                	});
					}

					//capture avatar
					else if(temp == "template5"){
						html2canvas($('#avatar1'), {
	                    onrendered: function(canvas) {
	                        //$('#imaged').html(canvas);
	                            var dataURL = canvas.toDataURL("image/png");

	                			//Random filename after download
	                			var filename = new Array(2).join().replace(/(.|$)/g, function(){return ((Math.random()*36)|0).toString(36);})

	        						var link = document.createElement('a');
									link.href = dataURL;
									link.download = "Allianz_download_"+filename+".png";
									document.body.appendChild(link);
									link.click();

									//trying to save directory
									var output = dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
									var output = encodeURIComponent(dataURL);
									var cur_path = 'downloaded';
									console.log(output);
									console.log(cur_path); 
		                			var Parameters = "image=" + output + "&filedir=" + cur_path;
								        $.ajax({
								            type: "POST",
								            url: "/website/static/profil-maker/save.php",
								            data: Parameters,
								            success: function(data) {
										        //alert(data);
										        //console.log(data);
										    },
										    error: function(data){
										    	alert("fail");
										    }
								        });
								
	                    	}
	                	});
					}

					//hiding ask form
	                $('#ask').hide();
			    	$('#fillform').show();
 				});


			});

			//text counter
				function limitTextSize(e) {
				    var max = 180;
				    var txt = $("#tengah").val();
				    //var left = txt.substring(0, max);
				    //var right = txt.substring(max);
				    //var html = left + '<span class="highlight">' + right + "</span>";
				    //$("#overflowText").html(html);
				    $("#counter").html("Letters remaining: <span id='char'> " + (max - txt.length) + "</span>");
				    $("#preview, #save").attr("disabled", txt.length > max);
				    if(txt.length > max) {
				    	//alert("over");
				    	$("#char").css("color", "red");
				    }
				    

				}

				function maxLength(el) {
				    if (!('maxLength' in el)) {
				        var max = el.attributes.maxLength.value;
				        el.onkeypress = function () {
				            if (this.value.length >= max) 
				            	return false;
				        };
				    }
				}

				$(document).ready(function () {
				    $("#tengah").bind('input propertychange', limitTextSize)
				    maxLength($("#tengah"));
				}); 	


				


