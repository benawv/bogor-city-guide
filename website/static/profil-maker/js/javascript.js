
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
			// $("body").on('mouseover','.headerimage, .ava-img',function ()
			// {	
			// 	var y1 = $('#timelineBackground, #avacapture1, #avacapture2').height();
			// 	var y2 =  $('.headerimage, .ava-img').height();
			// 	$(this).draggable({
			// 		scroll: true,
			// 		axis: "x,y",
			// 		// drag: function(event, ui) {
			// 		// 	if(ui.position.top >= 0)
			// 		// 		{
			// 		// 			ui.position.top = 0;
			// 		// 		}
			// 		// 	else if(ui.position.top <= y1 - y2)
			// 		// 		{
			// 		// 			ui.position.top = y1 - y2;
			// 		// 		}
			// 		//},
			// 		stop: function(event, ui)
			// 			{
			// 			}
			// 	});
			// });
			
				
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
		    			var lastClass = $('#notepad, #notepad-m').attr('class').split(' ').pop();
						$("#notepad, #notepad-m").removeClass(lastClass).addClass('bg-blue');

						var lastClass = $('#edge-note, #edge-note-m').attr('class').split(' ').pop();
						$("#edge-note, #edge-note-m").removeClass(lastClass).addClass('e-blue'); 
						//console.log(lastClass);
                        
		            } 

		            if($(this).val() == "Orange"){

		            	//alert('orange');
		            	var lastClass = $('#notepad, #notepad-m').attr('class').split(' ').pop();
						$("#notepad, #notepad-m").removeClass(lastClass).addClass('bg-orange');

						var lastClass = $('#edge-note, #edge-note-m').attr('class').split(' ').pop();
						$("#edge-note, #edge-note-m").removeClass(lastClass).addClass('e-orange'); 
						//console.log(lastClass);
		            	
		            } 

		            if($(this).val() == "Red"){

		            	//alert('red');
		            	var lastClass = $('#notepad, #notepad-m').attr('class').split(' ').pop();
						$("#notepad, #notepad-m").removeClass(lastClass).addClass('bg-red');

						var lastClass = $('#edge-note, #edge-note-m').attr('class').split(' ').pop();
						$("#edge-note, #edge-note-m").removeClass(lastClass).addClass('e-red'); 
						//console.log(lastClass);
		               
		            } 
		        });

				$("#position").change(function() {
		            if($(this).val() == "Left"){

		            	// alert('left');
		    			var lastClass = $('#place, #place-m').attr('class').split(' ').pop();
						$("#place, #place-m").removeClass(lastClass).addClass('leftside');
						//console.log(lastClass);
                        
		            } 

		            if($(this).val() == "Right"){

		            	//alert('right');
		            	var lastClass = $('#place, #place-m').attr('class').split(' ').pop();
						$("#place, #place-m").removeClass(lastClass).addClass('rightside');
						//console.log(lastClass);
		            	
		            } 
		          
		        });
				$("#judul").text(getCookie("head"));
				$("#konten").text(getCookie("konten"));
				$("#nama").text(getCookie("nama1")+" "+getCookie("nama2"));
				$("#cname").text(getCookie("nama1")+" "+getCookie("nama2"));
				
				$(".headlineCover").val(getCookie("head"));
				$(".contentCover").text(getCookie("konten"));
				$(".nama1Cover").val(getCookie("nama1"));
				$(".nama2Cover").val(getCookie("nama2"));
			});

		    
			//Preview button
 			$(function() { 
                    $("#preview").click(function(){

						//preview and save
						if(form.valid()){
							//alert("all filled");
							$("a#preview").attr("href", "#top");
							$('#judul, #konten, #nama, #cname, #judul-m, #konten-m, #nama-m, #cname-m').empty();
	                        $headline = $('#atas').val();
	                        $konten = $('#tengah').val();
	                        $nama1 = $('#bawah1').val();
	                        $nama2 = $('#bawah2').val();
	                        $('#judul, #judul-m').html($headline);
	                        $('#konten, #konten-m').html($konten);
	                        $('#nama, #nama-m').html($nama1+" "+$nama2); //name at form cover
	                        $('#cname, #cname-m').html($nama1+" "+$nama2); //name at form avatar
	                        $("#place").css({display: "block"});
	                        //anchor.href = null;
							setCookie("head",$headline);
							setCookie("konten",$konten);
							setCookie("nama1",$nama1);
							setCookie("nama2",$nama2);
						}
						else {
							//alert("no filled");
							$("a#preview").attr("href", "#fillform");
							$('#judul, #konten, #nama, #cname, #judul-m, #konten-m, #nama-m, #cname-m').empty();
						}
                        
                	});
					
					$("#save").click(function(){

						//preview and save
						if(form.valid()) {
							//alert("all filled");
							$("a#save").attr("href", "#ask");
							$('#judul, #konten, #nama, #cname, #judul-m, #konten-m, #nama-m, #cname-m').empty();
	                        $headline = $('#atas').val();
	                        $konten = $('#tengah').val();
	                        $nama1 = $('#bawah1').val();
	                        $nama2 = $('#bawah2').val();
	                        $('#judul, #judul-m').html($headline);
	                        $('#konten, #konten-m').html($konten);
	                        $('#nama, #nama-m').html($nama1+" "+$nama2); //name at form cover
	                        $('#cname, #cname-m').html($nama1+" "+$nama2); //name at form avatar
	                        $("#place").css({display: "block"});

	                        $('#fillform').hide();
                			$('#ask').show();   
						}
						else {
							//alert("no filled");
							$("a#save").attr("href", "#fillform");
							$('#judul, #konten, #nama, #cname, #judul-m, #konten-m, #nama-m, #cname-m').empty();
						}

						//$("a").attr("href", "#top");
                        
                	});

	                //Back to fill form    
	                $("#cancel").click(function(){
	                $('#fillform').show();
	                $('#ask').hide();      
	                });

                    //Smooth scroll   
                    $("#preview, #download, #square, #portrait, #landscape, #save, #ask, #fillform").click(function(event){
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
    			//console.log(temp);

    			//get template from cookie
			    if(temp == "template1") {
			        //alert("landscape");
			        $("#cover1").show();
			        $("#place").prop('class', 'landscape facebook-caption leftside');
			        $("#notepad").prop('class', 'facebook-caption--inner landscape-bg bg-blue');

			        //mobile looks like
			        $("#place-m").prop('class', 'landscape-m facebook-caption leftside');
			        $("#notepad-m").prop('class', 'facebook-caption--inner landscape-m-bg bg-blue');
			    }
			    else if(temp == "template2") {
			        //alert("portrait");
			        $("#cover1").show();
			        $("#place, #place-m").prop('class', 'portrait facebook-caption leftside');
			        $("#notepad, #notepad-m").prop('class', 'facebook-caption--inner portrait-bg bg-blue');

			        //mobile looks like
			        $("#place-m").prop('class', 'portrait-m facebook-caption leftside');
			        $("#notepad-m").prop('class', 'facebook-caption--inner portrait-m-bg bg-blue');
			    }
			    else if(temp == "template3") {
			        //alert("square");
			        $("#cover1").show();
			        $("#place, #place-m").prop('class', 'square facebook-caption leftside');
			        $("#notepad, #notepad-m").prop('class', 'facebook-caption--inner square-bg bg-blue');

			        //mobile looks like
			        $("#place-m").prop('class', 'square-m facebook-caption leftside');
			        $("#notepad-m").prop('class', 'facebook-caption--inner square-m-bg bg-blue');
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

			    //mobile condition
			    if($(window).width() < 640) {
			    	//alert("640 coy");
			    	if(temp == "template1" || temp == "template2" || temp == "template3") {
			    		$("#cover1").hide();
			    		$("#cover-m").show();
			    	}
			    	else if(temp == "template4" || temp == "template6") {
			    		//alert("this is avatar 2 comin' up");
			    		$("#ava2").hide();
			    		$("#ava2-m").show();
			    	}
			    	else if(temp == "template5") {
			    		//alert("this is avatar 1 comin' up");
			    		$("#ava1").hide();
			    		$("#ava1-m").show();
			    	}
			    }

                //Capture image and download it   
				$('body').on('click','#download',function(){
					var d = new Date();
					var tgl = d.getFullYear()+""+d.getMonth()+""+d.getDay()+""+d.getHours()+""+d.getMinutes()+""+d.getSeconds();
					var headline = $("#atas").val();
                    var description = $("#tengah").val();
                    var firstName = $("#bawah1").val();
                    var lastName = $("#bawah2").val();
					
					//capture cover
					if(temp == "template1" || temp == "template2" || temp == "template3") {

						$("#cover-m").hide();
	                    $("#cover1").show();

	                	html2canvas($('#cover1'), {
	                    onrendered: function(canvas) {
	                    	
	                        	//$('#imaged').html(canvas);
	                            var dataURL = canvas.toDataURL("image/png");

	                           	//$('#imaged').append('<img src="'+dataURL+'" />');

	                            //$('#imaged').html('Generating..');
	                            // $.post('image.php',{image: dataURL},function(data){
	                            //     $('#imaged').html(data);
	                            //     //console.log(data);
	                            // });

								if($(window).width() < 640) {
									//alert("after capture, back to cover1");
									$("#cover-m").show();
									$("#cover1").hide();
								}

	                			//Random filename after download
	                			var filename = new Array(2).join().replace(/(.|$)/g, function(){return ((Math.random()*36)|0).toString(36);})

	        						var link = document.createElement('a');
									link.href = dataURL;
									link.download = "Cover Profil Maker Allianz.png";
									document.body.appendChild(link);
									link.click();
									//console.log(dataURL);
									//console.log(link);	

									//trying to save directory
									var output = dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
									var output = encodeURIComponent(dataURL);
									var cur_path = 'upload';
									// console.log(output);
									// console.log(cur_path); 
		                			var Parameters = "image=" + output + "&filedir=" + cur_path + "&name="+tgl;
								        $.ajax({
								            type: "POST",
								            url: "/website/var/assets/profil-maker/save.php",
								            //url: "/save-img/",
								            data: Parameters,
								            success: function(data) {
										        //alert(data);
										        //console.log(data);
										    },
										    error: function(data){
										    	//alert("fail");
										    }
								        });
									saveNote(headline,description,firstName,lastName, tgl);
	                    		}

		                	});
						}

					//capture avatar
					else if(temp == "template4" || temp == "template6"){

						$("#ava2-m").hide();
	                    $("#ava2").show();

						html2canvas($('#avatar2'), {
	                    onrendered: function(canvas) {
	                        //$('#imaged').html(canvas);
	                            var dataURL = canvas.toDataURL("image/png");

	                            if($(window).width() < 640) {
									//alert("after capture, back to ava2");
									$("#ava2-m").show();
									$("#ava2").hide();
								}

	                			//Random filename after download
	                			var filename = new Array(2).join().replace(/(.|$)/g, function(){return ((Math.random()*36)|0).toString(36);})

	        						var link = document.createElement('a');
									link.href = dataURL;
									link.download = "Cover Profil Maker Allianz.png";
									document.body.appendChild(link);
									link.click();

									//trying to save directory
									var output = dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
									var output = encodeURIComponent(dataURL);
									var cur_path = 'upload';
									//console.log(output);
									//console.log(cur_path); 
		                			var Parameters = "image=" + output + "&filedir=" + cur_path + "&name="+tgl;
								        $.ajax({
								            type: "POST",
								            url: "/website/var/assets/profil-maker/save.php",
								            data: Parameters,
								            success: function(data) {
										        //alert(data);
										        //console.log(data);
										    },
										    error: function(data){
										    	//alert("fail");
										    }
								        });
									headline = "";
									description = "";
									saveNote(headline,description,firstName,lastName, tgl);
	                    	}
	                	});
					}

					//capture avatar
					else if(temp == "template5"){

						$("#ava1-m").hide();
						$("#ava1").show();

						html2canvas($('#avatar1'), {
	                    onrendered: function(canvas) {
	                        	//$('#imaged').html(canvas);
	                            var dataURL = canvas.toDataURL("image/png");

	       						if($(window).width() < 640) {
								//alert("after capture, back to ava1");
								$("#ava1-m").show();
								$("#ava1").hide();
								}

	                			//Random filename after download
	                			var filename = new Array(2).join().replace(/(.|$)/g, function(){return ((Math.random()*36)|0).toString(36);})

	        						var link = document.createElement('a');
									link.href = dataURL;
									link.download = "Cover Profil Maker Allianz.png";
									document.body.appendChild(link);
									link.click();

									//trying to save directory
									var output = dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
									var output = encodeURIComponent(dataURL);
									var cur_path = 'upload';
									//console.log(output);
									//console.log(cur_path); 
		                			var Parameters = "image=" + output + "&filedir=" + cur_path + "&name="+tgl;
								        $.ajax({
								            type: "POST",
								            url: "/website/var/assets/profil-maker/save.php",
								            data: Parameters,
								            success: function(data) {
										        //alert(data);
										        //console.log(data);
										    },
										    error: function(data){
										    	//alert("fail");
										    }
								        });
									headline = "";
									description = "";
									firstName = "";
									lastName = "";
									saveNote(headline,description,firstName,lastName, tgl);
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
				
				function saveNote(headline,description,firstName,lastName, filename) {
					$.ajax({
                        url : '/save-note/',
                        method : 'post',
                        data : { headline : headline, description : description, firstName : firstName, lastName : lastName, filename : filename}, // format {variable , value}
                        success : function(){
                            //alert('Data Tersimpan');
                       		$('#atas').val('');
                       		$('#tengah').val('');
                       		$('#bawah1').val('');
                       		$('#bawah2').val('');
                        }
                       // data : {headline : headline, description : description, firstName : firstName, lastName : lastName}
                    });
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


				


